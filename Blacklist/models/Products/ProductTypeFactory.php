<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 * 
 * @date 03.07.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Blacklist\Model\Page
 */

namespace
    Blacklist\Factory;

use
    Blacklist\Model\String\TableString as Tables;

class ProductTypeFactory
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
     * @param type $productId
     * @return \Blacklist\Object\ProductTypeObject
     */
    public function getByProduct($productId)
    {
        $args = array();
        $types = $this->database->table(Tables::PRODUCT_TYPES)->where('product', $productId);
        foreach($types as $myType){
            $object = new \Blacklist\Object\ProductTypeObject(NULL, NULL, NULL);
            $object->make($myType);
            $object->setDatabase($this->database);
            $args[] = $object;
        }
        return $args;
    }
    
    /**
     * 
     * @param type $id
     * @return \Blacklist\Object\ProductTypeObject
     */
    public function getById($id)
    {
        $types = $this->database->table(Tables::PRODUCT_TYPES)->where('id', $id)->fetch();
        $object = new \Blacklist\Object\ProductTypeObject(NULL, NULL, NULL);
        $object->make($types);
        $object->setDatabase($this->database);
        return $object;
    }
    
    public function getByCode($code)
    {
        $type = $this->database->table(Tables::PRODUCT_TYPES)->where('code', $code)->fetch();
        $object = new \Blacklist\Object\ProductTypeObject(NULL, NULL, NULL);
        $object->make($type);
        $object->setDatabase($this->database);
        return $object;
    }
}

