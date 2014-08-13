<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 * 
 * @date 03.07.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Blacklist\Factory
 */

namespace
    Blacklist\Factory;

use
    Blacklist\Model\String\TableString as Tables;

class ProductAdditionalFactory
{
    private $database;
    
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
     * @param type $productID
     * @return \Blacklist\Object\ProductObject
     */
    public function getByProduct($productID)
    {
        $extras = $this->database->table(Tables::PRODUCT_ADDS)
                ->where('product', $productID);
        $additionals = array();
        foreach($extras as $extra){
            $object = new \Blacklist\Object\ProductAdditionalObject(NULL, NULL, NULL);
            $object->make($extra);
            $object->setDatabase($this->database);
            $additionals[] = $object;
        }
        return $additionals;
    }
    
    /**
     * 
     * @param type $id
     * @return \Blacklist\Object\ProductObject
     */
    public function getById($id)
    {
        $extra = $this->database->table(Tables::PRODUCT_ADDS)
                ->where('id', $id)->fetch();
        $object = new \Blacklist\Object\ProductAdditionalObject(NULL, NULL, NULL);
        $object->setDatabase($this->database);
        $object->make($extra);
        return $object;
    }
}