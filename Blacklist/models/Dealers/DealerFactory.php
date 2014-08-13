<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 *
 * @date 07.07.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Blacklist\Factory
 */


namespace
    Blacklist\Factory;

use
    Nette\Database\Context,
    Blacklist\Model\String\TableString as Tables,
    Blacklist\Object\DealerObject;

class DealerFactory
{
    /** @var \Nette\Database\Context */
    private $database;
    
    /**
     * 
     * @param \Nette\Database\Context $db
     */
    public function __construct(Context $db)
    {
        $this->database = (object) $db;
    }

    /**
     * @return array
     */
    public function getCompleteAll()
    {
        $dealers = $this->database->table(Tables::DEALERS);
        $objects = array();
        foreach($dealers as $dealer){
            $myObject = new DealerObject(NULL, NULL, NULL);
            $myObject->make($dealer);
            $objects[] = $myObject;
        }
        return $objects;
    }
    
    /**
     * 
     * @return \Blacklist\Object\DealerObject
     */
    public function getAll()
    {
        $dealers = $this->database->table(Tables::DEALERS)
                ->where('lastOrder != 0');
        $objects = array();
        foreach($dealers as $dealer){
            $myObject = new DealerObject(NULL, NULL, NULL);
            $myObject->make($dealer);
            $myObject->setDatabase($this->database);
            $objects[] = $myObject;
        }
        return $objects;
    }
    
    /**
     * 
     * @param type $id
     * @return \Blacklist\Object\DealerObject
     */
    public function getById($id)
    {
        $dealer = $this->database->table(Tables::DEALERS)
                ->where('id', $id)->fetch();
        $myObject = new DealerObject(NULL,NULL,NULL);
        $myObject->make($dealer);
        return $myObject;
    }

    /**
     * @return \Blacklist\Object\DealerObject array
     */
    public function getWithoutOrder()
    {
        $dealers = $this->database->table(Tables::DEALERS)
                ->where('lastOrder', 0);
        $objects = array();
        foreach($dealers as $dealer){
            $myObject = new DealerObject(NULL, NULL, NULL);
            $myObject->make($dealer);
            $objects[] = $myObject;
        }
        return $objects;
    }
}