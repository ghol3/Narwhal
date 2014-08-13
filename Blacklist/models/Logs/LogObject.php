<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 * 
 * @date 07.07.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Blacklist\Object
 */

namespace
    Blacklist\Object;

use
    Nette\Database\Context,
    Blacklist\Model\String\TableString as Tables;

class LogObject extends \Blacklist\Object\Object implements \Blacklist\Object\IObject
{
    public 
        /** @var type int */
        $id     = NULL,
        /** @var type int */
        $user   = NULL, 
        /** @var type string */
        $action = NULL,
        /** @var type timestamp */
        $date   = NULL;
    
    private $userobject = NULL;
    
    public function __construct()
    {
        parent::__construct('\Blacklist\Object\LogObject');
    }
    
    /**
     * 
     * @return type
     */
    public function getUserObject()
    {
        if($this->userobject == NULL){
            $fa = new \Blacklist\Factory\UserFactory($this->database);
            $this->userobject = $fa->getById($this->user);
            unset($fa);
        }
        return $this->userobject;
    }
    
    /**
     * 
     */
    public function create() 
    {
        $this->database->table(Tables::LOGS)->insert($this->toArray());
    }

    /**
     * 
     */
    public function remove() 
    {
        $this->database->table(Tables::LOGS)
                ->where('id', $this->id)
                ->delete();
    }

    /**
     * 
     */
    public function update() 
    {
        $this->database->table(Tables::LOGS)
                ->where('id', $this->id)
                ->update($this->toArray());
    }

}
