<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 * 
 * @date 01.07.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Blacklist\Model\Page
 */

namespace
    Blacklist\Object;

use
    Blacklist\Model\String\TableString as Tables,
    Nette\DateTime;

class ProductObject extends Object implements IObject
{
    public 
        /** @var type int */
        $id             = NULL,
        /** @var type string */
        $name           = NULL,
        /** @var type double */
        $price          = NULL,
        /** @var type double */
        $pricedph       = NULL,
        /** @var type string */
        $description    = NULL,
        /** @var type string */
        $content        = NULL,
        /** @var type int    */
        $score          = NULL,
        /** @var type string */
        $warranty       = NULL,
        /** @var type string */
        $image          = NULL,
        /** @var type string */
        $link           = NULL,
        /** @var type boolean */
        $visibility     = FALSE,
        /** @var type integer */
        $category       = NULL,
        /** @var type integer */
        $priority       = NULL,
        /** @var type string */
        $code           = NULL,
        /** @var type integer */
        $stock          = NULL,
        /** @var type timestamp */
        $createDate     = NULL,
        /** @var type integer */
        $warehouse      = NULL,
        /** @var type integer */
        $sold           = NULL,
        /** @var type string */
        $detail         = NULL,
        /** @var type string */
        $basicinfo      = NULL,
        /** @var type string */
        $params         = NULL,
        /** @var type string */
        $company        = NULL,
        /** @var type string */    
        $tbasic         = NULL,
         /** @var type string */
        $tdetails       = NULL,
         /** @var type string */
        $tparams        = NULL;
    
    private 
        /** @var type \Blacklist\Object\CategoryObject */
        $categoryObject     = NULL,
        /** @var type array of strings */
        $images             = array(),
        /** @var type array of \Blacklist\Object\ProductTypeObject */
        $productTypes       = array(),
        /** @var type array of \Blacklist\Object\ProductAdditionalObject */
        $additionals        = array();
    
    /**
     * 
     * @param type $name
     * @param type $pricedph
     * @param type $link
     */
    public function __construct($name, $pricedph, $link)
    {
        $this->name = (string) $name;
        $this->pricedph = (double) $pricedph;
        $this->link = (string) $link;
        parent::__construct('\Blacklist\Object\ProductObject');
    }
    
    /**
     * 
     * @return type
     */
    public function getTabs()
    {
        $factory = new \Blacklist\Factory\ProductTabFactory($this->database);
        return $factory->getByProduct($this->id);
    }
    
    /**
     * 
     * @return type
     */
    public function getPrice()
    {
        $sett = new \Blacklist\Model\Settings\SettingsAction($this->database);
        $settings = $sett->getEshopSettings();
        return ($this->pricedph / $settings->dph);
    }
    
    /**
     * 
     */
    public function create() 
    {
        $link = new LinkObject($this->link, 'Product', 'Show');
        $link->setDatabase($this->database);
        $link->create();
        
        $this->database->table(Tables::PRODUCTS)
                ->insert($this->toArray());
        
        $product = $this->database->table(Tables::PRODUCTS)
                ->where('link', $this->link)->fetch();
        
        $object = new WarehouseObject;
        $object->note = '';
        $object->product = $product->id;
        $object->stack = $product->stock;
        $object->time = '0';
        $object->type = 'sklad';
        $object->user = 0;
        $object->setDatabase($this->database);
        $object->create();
    }
    
    public function getTotalSolds()
    {
        $solds = $this->database->table('prefix_product_solds')
                ->where('product', $this->id);
        $totalsold = 0;
        foreach($solds as $sold){
            $totalsold += $sold->stock;
        }
        return $totalsold;
    }
    
    /**
     * 
     * @param type $sold
     */
    public function setTotalSolds($sold)
    {
        $this->database->table('prefix_product_solds')
                ->insert(array('product' => $this->id, 'stock' => $sold));
    }
    
    /**
     * 
     * @param type $months
     * @return type
     */
    public function getSoldsByMonths($months)
    {
        $solds = $this->database->table('prefix_product_solds')
                ->where('product', $this->id);
        $totalsold = 0;
        $dateNow = new DateTime;
        foreach($solds as $sold){
            $date = new DateTime($sold->date, NULL);
            $month = (30 * 24 * 60 * 60) * $months;
            if($date->getTimestamp() > ($dateNow->getTimestamp() - $month)){
                $totalsold += $sold->stock;
            }
        }
        return $totalsold;
    }
    
    /**
     * 
     * @return type
     */
    public function getSoldsAvarge()
    {
        $m12 = $this->getSoldsByMonths(12);
        return ($m12 / 12);
        return 0;
    }

    /**
     * 
     */
    public function remove() 
    {
        $link = new \Blacklist\Factory\LinkFactory($this->database);
        $link->getByUrl($this->link)->remove();
        // remove product
       $this->database->table(Tables::PRODUCTS)
               ->where('id', $this->id)
               ->delete();
       // remove all images
       foreach($this->images as $image){
           $image->remove();
       }
       
       $this->database->table(Tables::WAREHOUSE)
               ->where('product', $this->id)
               ->delete();
    }

    /**
     * 
     */
    public function update() 
    {
        $factory = new \Blacklist\Factory\LinkFactory($this->database);
        $productF = new \Blacklist\Factory\ProductFactory($this->database);
        
        $myProduct = $productF->getById($this->id);
        $originalprice = $myProduct->pricedph;
        $myLink = $factory->getByUrl($myProduct->link);
        $myLink->path = $this->link;
        $myLink->update();
       
        $this->database->table(Tables::PRODUCTS)
            ->where('id', $this->id)
            ->update($this->toArray());
        
        if($originalprice != $this->pricedph)
        {
            $this->database->table(Tables::ORDER_PRODUCTS)
                ->where('product', $this->id)
                ->update(array('pricedph' => $this->pricedph, 'price' => $this->price));
        }
        
    }
    
    /**
     * 
     * @return type \Blacklist\Category\CategoryObject
     */
    public function getCategoryObject()
    {
        if($this->categoryObject === NULL && $this->database)
        {
            $factory = new \Blacklist\Factory\CategoryFactory($this->database);
            $this->categoryObject = $factory->getById($this->category);
            unset($factory);
        }
        return $this->categoryObject;
    }

    /**
     * @return array
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param $image
     */
    public function setImage($image)
    {
        $id = ($image->id == NULL) ? $image->image : $image->id;
        $this->images[$id] = $image;
    }

    /**
     * @param $id
     */
    public function removeImage($id)
    {
        $this->images[$id]->remove();
        unset($this->images[$id]);
    }
    
    /**
     * 
     */
    public function getTypes()
    {
        if($this->database)
        {
            $factory = new \Blacklist\Factory\ProductTypeFactory($this->database);
            $types = $factory->getByProduct($this->id);
            foreach($types as $myType){
                $this->productTypes[$myType->id] = $myType;
            }
            unset($factory);
        }
        return $this->productTypes;
    }
    
    /**
     * 
     * @param \Blacklist\Object\ProductTypeObject $type
     */
    public function setType(ProductTypeObject $type)
    {
        $this->productTypes[($type->id === NULL) ? $type->name : $type->id] = $type;
    }
    
    /**
     * 
     * @param type $id
     */
    public function removeType($id)
    {
        $this->productTypes = $this->getTypes();
        $this->productTypes[$id]->remove(); 
    }
    
    /**
     * 
     * @return type
     */
    public function getAdditionals()
    {
        if($this->database)
        {
            $factory = new \Blacklist\Factory\ProductAdditionalFactory($this->database);
            $adds = $factory->getByProduct($this->id);
            foreach($adds as $myAdd){
                $this->additionals[$myAdd->id] = $myAdd;
            }
            unset($factory);
        }
        return $this->additionals;
    }
    
    /**
     * 
     * @param \Blacklist\Object\ProductAdditionalObject $add
     */
    public function setAdditional(ProductAdditionalObject $add)
    {
        $this->additionals[($add->id === NULL) ? $add->name : $add->id] = $add;
    }
    
    /**
     * 
     * @param type $id
     */
    public function removeAdditional($id)
    {
        $this->additionals = $this->getAdditionals();
        $this->additionals[$id]->remove();
    }
}