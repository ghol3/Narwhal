<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 * 
 * @date 03.07.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Blacklist\Object
 */

namespace   
    Blacklist\Object;

use
    Blacklist\Model\String\TableString as Tables;

class ProductAdditionalObject extends \Blacklist\Object\Object implements \Blacklist\Object\IObject
{
    public 
        /** @var type integer */
        $product    = NULL,
        /** @var type integer */
        $extra      = NULL,
        /** @var type integer */
        $id         = NULL;
    
    private
       /** @var type \Blacklist\Object\ProductObject */
       $productObject = NULL,
       /** @var type \Blacklist\Object\ProductObject */
       $extraObject   = NULL;
    
    
    /**
     * 
     * @param type $product
     * @param type $extra
     */
    public function __construct($product, $extra)
    {
        $this->product = (int) $product;
        $this->extra   = (int) $extra;
        parent::__construct('\Blacklist\Object\ProductAdditionalObject');
    }
    
    /**
     * 
     */
    public function create()
    {
        $this->database->table(Tables::PRODUCT_ADDS)
                ->insert($this->toArray());
    }
    
    /**
     * 
     */
    public function update()
    {
        $this->database->table(Tables::PRODUCT_ADDS)
                ->where('id', $this->id)
                ->update($this->toArray());
    }
    
    /**
     * 
     */
    public function remove()
    {
        $this->database->table(Tables::PRODUCT_ADDS)
                ->where('id', $this->id)
                ->delete();
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
     * @return type
     */
    public function getExtraObject()
    {
        if($this->extraObject == NULL && $this->database)
        {
            $factory = new \Blacklist\Factory\ProductFactory($this->database);
            $this->extraObject = $factory->getById($this->extra);
            unset($factory);
        }
        return $this->extraObject;
    }
}