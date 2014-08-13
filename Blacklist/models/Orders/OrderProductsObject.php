<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace 
    Blacklist\Object;

class OrderProductsObject extends Object implements IObject
{
    
    public
        /** @var type int */
        $orderkey, 
        /** @var type int */
        $product, 
        /** @var type int */
        $count, 
        /** @var type int */
        $id, 
        /** @var type string */
        $discount, 
        /** @var type string */
        $code,
        /** @var type string */
        $name,
        /** @var type double */
        $price,
        /** @var type double */
        $pricedph;
    
    private 
        /** @var type \Blacklist\Object\ProductObject */
        $productObject = NULL;
    
    /**
     * 
     * @param type $order
     * @param type $product
     * @param type $count
     */
    public function __construct($order, $product, $count)
    {
        $this->orderkey = $order;
        $this->product = $product;
        $this->count = $count;
        parent::__construct('\Blacklist\Object\OrderProductObject');
    }
    
    /**
     * 
     * @return type
     */
    public function getProductObject()
    {
        if($this->productObject == NULL && $this->database)
        {
            $factory = new \Blacklist\Factory\ProductFactory($this->database);
            $this->productObject = $factory->getById($this->product);
            unset($factory);
        }
        return $this->productObject;
    }
    
    /**
     * 
     */
    public function create() 
    {
        $this->database->table(\Blacklist\Model\String\TableString::ORDER_PRODUCTS)
                ->insert($this->toArray());
    }

    /**
     * 
     */
    public function remove() 
    {
        $this->database->table(\Blacklist\Model\String\TableString::ORDER_PRODUCTS)
                ->where('id', $this->id)
                ->delete();
    }

    /**
     * 
     */
    public function update() 
    {
        $this->database->table(\Blacklist\Model\String\TableString::ORDER_PRODUCTS)
                ->where('id', $this->id)
                ->update($this->toArray());
    }

}