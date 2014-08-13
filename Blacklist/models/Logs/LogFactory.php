<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 *
 * @date 19.07.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Blacklist\Factory
 */

namespace
    Blacklist\Factory;

use
    Blacklist\Model\String\TableString as Tables;

class LogFactory
{
    private $database;
    
    /**
     * 
     * @param \Nette\Database\Context $database
     */
    public function __construct(\Nette\Database\Context $database){
        $this->database = $database;
    }
    
    /**
     * 
     * @param type $limit
     * @return \Blacklist\Object\LogObject
     */
    public function getAll($limit = NULL)
    {
        $logs = $this->database->table(Tables::LOGS)->limit($limit);
        $objects = array();
        foreach($logs as $log){
            $logObject = new \Blacklist\Object\LogObject();
            $logObject->make($log);
            $logObject->setDatabase($this->database);
            $objects[] = $logObject;
        }
        return $objects;
    }
    
    /**
     * 
     * @param type $id
     * @return \Blacklist\Object\LogObject
     */
    public function getById($id)
    {
        $log = $this->database->table(Tables::LOGS)->where('id', $id)->fetch();
        $object = new \Blacklist\Object\LogObject();
        $object->make($log);
        $object->setDatabase($this->database);
        return $object;
    }
}
