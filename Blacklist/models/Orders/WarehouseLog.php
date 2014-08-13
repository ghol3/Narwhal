<?php

namespace
    Blacklist\Object;

use
    Blacklist\Model\String\TableString as Tables;


class WarehouseLog extends \Blacklist\Object\Object implements \Blacklist\Object\IObject
{
    public
        $id     = NULL,
        /*** @var type timestamp */
        $date   = NULL,
        /** @var type string */
        $code   = NULL,
        /** @var type int */
        $stack  = NULL,
        /** @var type int */
        $user   = NULL,
        /** @var type*/
        $note   = NULL,
        $warehouse = NULL,
        $product = NULL;
    
    /**
     * 
     */
    public function __construct()
    {
        parent::__construct('\Blacklist\Object\WarehouseLog');
    }
    
    public function getUser()
    {
        $factory = new \Blacklist\Factory\UserFactory($this->database);
        return $factory->getById($this->user);
    }

    /**
     * 
     */
    public function create() 
    {
        $this->date = new \Nette\DateTime;
        $this->database->table(Tables::WAREHOUSE_LOG)
               ->insert($this->toArray());
    }

    /**
     * 
     */
    public function remove() 
    {
        $this->database->table(Tables::WAREHOUSE_LOG)
                ->where('id', $this->id)
                ->delete();
    }

    /**
     * 
     */
    public function update() 
    {
        $this->database->table(Tables::WAREHOUSE_LOG)
                ->where('id', $this->id)
                ->delete();
    }

}

