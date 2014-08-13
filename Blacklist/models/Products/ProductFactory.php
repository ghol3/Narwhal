<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 * 
 * @date 01.07.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Blacklist\Model\Page
 */

namespace 
    Blacklist\Factory;

class ProductFactory
{
    /**
     *
     * @var type 
     */
    private $database = NULL;
    
    /**
     * 
     * @param \Nette\Database\Context $db
     */
    public function __construct(\Nette\Database\Context $db)
    {
        $this->database = $db;
    }
    
    /**
     * 
     * @param type $limit
     * @return type
     */
    public function getAll($limit = NULL, $conditions = NULL)
    {
        if($conditions == NULL){
            $products = $this->database->table(\Blacklist\Model\String\TableString::PRODUCTS)
                ->order('priority')
                ->limit($limit);
        }else{
            $products = $this->database->table(\Blacklist\Model\String\TableString::PRODUCTS)
                    ->where($conditions)
                    ->limit($limit);
        }
        $objects = array();
        foreach($products as $product){
            $objects[] = $this->make($product);
        }
        return $objects;
    }
   
    /**
     * 
     * @param type $warehouse
     * @param type $limit
     * @return type
     */
    public function getByWarehouse($warehouse, $limit = NULL)
    {
        $products = $this->database->table(\Blacklist\Model\String\TableString::PRODUCTS)
                ->where('warehouse', $warehouse)
                ->order('priority')
                ->limit($limit);
        $objects = array();
        foreach($products as $product){
            $objects[] = $this->make($product);
        }
        return $objects;
    }
    
    /**
     * 
     * @param type $data
     * @return \Blacklist\Object\ProductObject
     */
    private function make($data)
    {
        $object = new \Blacklist\Object\ProductObject(NULL, NULL, NULL);
        if(isset($data->name)){
            $object->make($data);
            $object->setDatabase($this->database);
            $images = $this->database->table(\Blacklist\Model\String\TableString::PRODUCT_IMG)
                    ->where('product', $object->id);

            foreach($images as $image){
                $oImage = new \Blacklist\Object\ProductImageObject();
                $oImage->make($image);
                $oImage->setDatabase($this->database);
                $object->setImage($oImage);
            }
        }
        return $object;
    }
    
    /**
     * 
     * @param type $id
     * @return type
     */
    public function getById($id)
    {
        $product = $this->database->table(\Blacklist\Model\String\TableString::PRODUCTS)
                ->get($id);
        return $this->make($product);
    }
    
    /**
     * 
     * @param type $url
     * @return type
     */
    public function getByUrl($url)
    {
        $product = $this->database->table(\Blacklist\Model\String\TableString::PRODUCTS)
                ->where('link', $url)->fetch();
        return $this->make($product);
    }
    
    /**
     * 
     * @param type $categoryId
     * @return type
     */
    public function getByCategory($categoryId)
    {
        $products = $this->database->table(\Blacklist\Model\String\TableString::PRODUCTS)
                ->where(array('category' => $categoryId, 'visibility' => 1))
                ->order('priority');
        $objects = array();
        foreach($products as $product){
            $objects[] = $this->make($product);
        }
        return $objects;
    }
    
    /**
     * 
     * @param type $limit
     * @return type
     */
    public function getVisible($limit = NULL)
    {
        $products = $this->database->table(\Blacklist\Model\String\TableString::PRODUCTS)
                ->where('visibility', 1)
                ->order('priority')
                ->limit($limit);
        $objects = array();
        foreach($products as $product){
            $objects[] = $this->make($product);
        }
        return $objects;
    }
    
    /**
     * 
     * @param type $orderId
     * @return type
     */
    public function getByOrder($orderId)
    {
        $prod = $this->database->table(\Blacklist\Model\String\TableString::ORDER_PRODUCTS)
                ->where('orderkey', $orderId);
        $products = array();
        foreach($prod as $pr){
            $products[] = $this->database->table(\Blacklist\Model\String\TableString::PRODUCTS)
                    ->where('id', $pr->product);
        }
        $objects = array();
        foreach($products as $pr){
            $objects[] = $this->make($pr);
        }
        return $objects;
    }
    
    public function changeAll($visibility, $priority)
    {
        foreach($priority as $id => $position)
        {
            $this->database->table(\Blacklist\Model\String\TableString::PRODUCTS)
                    ->where('id', $id)
                    ->update(array('priority' => $position, 'visibility' => (isset($visibility[$id]) && $visibility[$id]) ? 1 : 0));
        }
    }
}
