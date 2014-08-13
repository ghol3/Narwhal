<?php

namespace
    Blacklist\Object;

use
    Blacklist\Model\String\TableString as Tables;

/**
 * 
 */
class WarehouseObject extends \Blacklist\Object\Object implements \Blacklist\Object\IObject
{
    
    public 
        /** @var type int */
        $id         = NULL, 
        /** @var type int */
        $product    = NULL, 
        /** @var type timestamp */
        $date       = NULL, 
        /** @var type int */
        $stack      = NULL, 
        /** @var type string */
        $type       = NULL, 
        /** @var type string */
        $note       = NULL,
        /** @var type int */
        $user       = NULL,
        /** @var type int (0,14, 1, 2, 3, 4, 5, 6) (14 - days, 1-6 - months, 0 - none) */
        $time       = NULL,
        /** @var type timestamp */    
        $edit       = NULL;
    
    private 
        /** @var type \Blacklist\Object\ProductObject */
        $productObject  = NULL,
        /** @var type \Blacklist\Object\UserObject */
        $userObject     = NULL;
    
    /**
     * 
     */
    public function __construct()
    {
        parent::__construct('\Blacklist\Object\WarehouseObject');
    }
    
    /**
     * 
     * @return type \Blacklist\Object\ProductObject
     */
    public function getProductObject()
    {
        if($this->productObject == NULL && $this->database)
        {
            $f = new \Blacklist\Factory\ProductFactory($this->database);
            $this->productObject = $f->getById($this->product);
            unset($f);
        }
        return $this->productObject;
    }
    
    /**
     * 
     * @return type \Blacklist\Object\UserObject
     */
    public function getUserObject()
    {
        if($this->userObject == NULL && $this->database)
        {
            $f = new \Blacklist\Factory\UserFactory($this->database);
            $this->userObject = $f->getById($this->user);
            unset($f);
        }
        return $this->userObject;
    }
    
    /**
     * 
     */
    public function create() 
    {
        $this->edit = new \Nette\DateTime;
        $this->database->table(Tables::WAREHOUSE)
                ->insert($this->toArray());
    }

    /**
     * 
     */
    public function remove() 
    {
        $this->database->table(Tables::WAREHOUSE)
                ->where('id', $this->id)
                ->delete();
    }

    /**
     * 
     */
    public function update() 
    {

        $array = $this->toArray();
        if($this->stack == 0){
            $array['stack'] = '0';
        }
        $array['edit'] = new \Nette\DateTime();
        $this->database->table(Tables::WAREHOUSE)
                ->where('id', $this->id)
                ->update($array);
    }

}

