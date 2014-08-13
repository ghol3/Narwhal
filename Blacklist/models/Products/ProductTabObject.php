<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 * 
 * @date 30.07.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Blacklist\Object
 */

namespace
    Blacklist\Object;

use
    Blacklist\Model\String\TableString as Tables;

class ProductTabObject extends Object implements IObject
{
    public 
        /** @var type int */
        $id         = NULL,
        /** @var type string */
        $name       = NULL,
        /** @var type string */
        $content    = NULL, 
        /** @var type int */
        $product    = NULL;
    
    /**
     * 
     */
    public function create() 
    {
        $this->database->table(Tables::PRODUCT_TAB)
                ->insert($this->toArray());
    }

    /**
     * 
     */
    public function remove() 
    {
        $this->database->table(Tables::PRODUCT_TAB)
                ->where('id', $this->id)
                ->delete();
    }

    /**
     * 
     */
    public function update() 
    {
        $this->database->table(Tables::PRODUCT_TAB)
                ->where('id', $this->id)
                ->update($this->toArray());
    }
}