<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace
    Blacklist\Factory;

use
    Blacklist\Model\String\TableString as Tables;

class WarehouseLogFactory
{
    private $database;
    /**
     * 
     * @param \Blacklist\Factory\Nette\Database\Context $db
     */
    public function __construct(\Nette\Database\Context $db)
    {
        $this->database = $db;
    }
    
    /**
     * 
     * @return \Blacklist\Object\WarehouseLog
     */
    public function getAll()
    {
        $logs = $this->database->table(Tables::WAREHOUSE_LOG);
        $objects = array();
        foreach($logs as $log){
            $object = new \Blacklist\Object\WarehouseLog();
            $object->make($log);
            $object->setDatabase($this->database);
            $objects[] = $object;
        }
        return $objects;
    }
    
    /**
     * 
     * @param type $warehouse
     * @return \Blacklist\Object\WarehouseLog
     */
    public function getAllByWarehouse($warehouse, $conditions = NULL, $order = NULL)
    {
        $log = NULL;
        if($conditions != NULL){
            $logs = $this->database->table(Tables::WAREHOUSE_LOG)->where($conditions)
                    ->order(($order == NULL) ? 'date DESC' : $order);
        }else{
            $logs = $this->database->table(Tables::WAREHOUSE_LOG)->where('warehouse', $warehouse)
                ->order(($order == NULL) ? 'date DESC' : $order);
        }
        $objects = array();
        foreach($logs as $log){
            $object = new \Blacklist\Object\WarehouseLog();
            $object->make($log);
            $object->setDatabase($this->database);
            $objects[] = $object;
        }
        return $objects;
    }
    
    /**
     * 
     * @param type $id
     * @return \Blacklist\Object\WarehouseLog
     */
    public function getById($id)
    {
        $log = $this->database->table(Tables::WAREHOUSE_LOG)->get($id);
        $object = new \Blacklist\Object\WarehouseLog();
        $object->make($log);
        return $object;
    }
}