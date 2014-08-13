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

class ProductImageObject extends \Blacklist\Object\Object implements \Blacklist\Object\IObject
{
    public 
        /** @var type integer */
        $id = NULL,
        /** @var type string */
        $product = NULL,
        /** @var type string */
        $image  = NULL;
    
    public function __construct()
    {
        parent::__construct('\Blacklist\Object\ProductImageObject');
    }

    /**
     * 
     */
    public function create()
    {
        $this->database->table(\Blacklist\Model\String\TableString::PRODUCT_IMG)
                ->insert(array('product' => $this->product, 'image' => $this->image));
    }

    /**
     * 
     */
    public function remove() 
    {
        $this->database->table(\Blacklist\Model\String\TableString::PRODUCT_IMG)
                ->where('id', $this->id)
                ->delete();
    }

    /**
     * 
     */
    public function update() 
    {
        $this->database->table(\Blacklist\Model\String\TableString::PRODUCT_IMG)
                ->where('id', $this->id)
                ->delete();
    }

}