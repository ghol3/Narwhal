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

class ProductTabFactory
{
    private $database;
    
    public function __construct(\Nette\Database\Context $db)
    {
        $this->database = $db;
    }
    
    /**
     * 
     * @param type $id
     * @return \Blacklist\Object\ProductTabObject
     */
    public function getByProduct($id)
    {
        $tabs = $this->database->table(Tables::PRODUCT_TAB)
                ->where('product', $id);
        $objects = array();
        foreach($tabs as $tab)
        {
            $o = new \Blacklist\Object\ProductTabObject('\Blacklist\Object\ProductTabObject');
            $o->make($tab);
            $o->setDatabase($this->database);
            $objects[] = $o;
        }
        return $objects;
    }
    
    public function getById($id)
    {
        $tab = $this->database->table(Tables::PRODUCT_TAB)
                ->where('id', $id)->fetch();
        
        $o = new \Blacklist\Object\ProductTabObject('\Blacklist\Object\ProductTabObject');
        $o->make($tab);
        $o->setDatabase($this->database);
        return $o;
    }
}