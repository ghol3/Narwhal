<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 * 
 * @date 03.07.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Blacklist\Model\Page
 */

namespace
    Blacklist\Object;

use
    Blacklist\Model\String\TableString as Tables;

class ProductTypeObject extends \Blacklist\Object\Object implements \Blacklist\Object\IObject
{
    public
        /** @var type integer */
        $id         = NULL,
        /** @var type integer */
        $product    = NULL,
        /** @var type string */
        $name       = NULL,
        /** @var type double */
        $pricedph   = NULL,
        /** @var type boolean */
        $visibility = NULL,
        /** @var type string */
        $code       = NULL;
    
    private
        /** @var type double */
        $price      = NULL,
        /** @var type \Blacklist\Object\ProductObject */
        $productObject = NULL;
    
    public function __construct($name, $pricedph, $product)
    {
        parent::__construct('\Blacklist\Object\ProductTypeObject');
        $this->name     = (string) $name;
        $this->pricedph = (double) $pricedph;
        $this->product  = (int)  $product;
    }
    
    /**
     * 
     */
    public function create()
    {
       $this->database->table(Tables::PRODUCT_TYPES)
           ->insert($this->toArray());
    }
    
    /**
     * 
     */
    public function update()
    {
        $this->database->table(Tables::PRODUCT_TYPES)
            ->where('id', $this->id)
            ->update($this->toArray());
    }
    
    /**
     * 
     */
    public function remove()
    {
        $this->database->table(Tables::PRODUCT_TYPES)
            ->where('id', $this->id)
            ->delete();
    }
    
    /**
     * 
     * @return string
     */
    public function getPriceWithoutDph()
    {
        return $this->price;
    }
    
    /**
     * 
     * @return \Blacklist\Object\ProductObject
     */
    public function getProductObject()
    {
        if($this->productObject === NULL && $this->database)
        {
            $factory = new \Blacklist\Factory\ProductFactory($this->database);
            $this->productObject = $factory->getById($this->product);
            unset($factory);
        }
        return $this->productObject;
    }
}

