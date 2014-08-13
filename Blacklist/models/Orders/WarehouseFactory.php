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
use Blacklist\Object\WarehouseObject;

class WarehouseFactory
{
    /**
     *
     * @var type 
     */
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
     * @return \Blacklist\Object\WarehouseLog
     */
    public function getAll()
    {
        $warehouses = $this->database->table(Tables::WAREHOUSE);
        $objects = array();
        foreach($warehouses as $wh){
            $object = new \Blacklist\Object\WarehouseObject();
            $object->make($wh);
            $object->setDatabase($this->database);
            $objects[] = $object;
        }
        
        return $objects;
    }
    
    /**
     * 
     * @param type $type
     * @return \Blacklist\Object\WarehouseObject
     */
    public function getByType($type)
    {
        $warehouses = $this->database->table(Tables::WAREHOUSE)
                ->where('type', $type);
        $objects = array();
        foreach($warehouses as $wh){
            $object = new \Blacklist\Object\WarehouseObject;
            $object->make($wh);
            $object->setDatabase($this->database);
            $objects[] = $object;
        }
        return $objects;
    }
    
    /**
     * 
     * @param type $id
     * @return \Blacklist\Object\WarehouseObject
     */
    public function getById($id)
    {
        $warehouse = $this->database->table(Tables::WAREHOUSE)
                ->where('id', $id)->fetch();
        $object = new \Blacklist\Object\WarehouseObject();
        $object->make($warehouse);
        $object->setDatabase($this->database);
        return $object;
    }
    
    /**
     * 
     * @param type $product
     * @param type $type
     * @return type
     */
    public function exist($product, $type)
    {
        $warehouse = $this->database->table(Tables::WAREHOUSE)
                ->where(array('product' => $product, 'type' => $type))
                ->fetch();
        return (isset($warehouse->id));
    }
    
    /**
     * 
     * @param type $product
     * @param type $type
     * @return \Blacklist\Object\WarehouseObject
     */
    public function get($product, $type)
    {
        $warehouse = $this->database->table(Tables::WAREHOUSE)
                ->where(array('product' => $product, 'type' => $type))
                ->fetch();
        $object = new \Blacklist\Object\WarehouseObject;
        $object->make($warehouse);
        $object->setDatabase($this->database);
        return $object;
    }

    /**
     * @param null $warehouse
     * @return WarehouseObject
     */
    public function getTree($warehouse = NULL, $sum = NULL)
    {
        $categories = array();

        if($warehouse !== NULL)
        {
            $warehouse = $this->database->table(Tables::WAREHOUSE)
                ->where('type', $warehouse);
        }
        else
        {
            $warehouse = $this->database->table(Tables::WAREHOUSE);
        }

        foreach($warehouse as $wh)
        {
            $who = new WarehouseObject();
            $who->setDatabase($this->database);
            $who->make($wh);
            if(!isset($categories[$who->getProductObject()->getCategoryObject()->name])){
                $categories[$who->getProductObject()->getCategoryObject()->name] = array();
                $categories[$who->getProductObject()->getCategoryObject()->name][] = $who;
            }else{
                $categories[$who->getProductObject()->getCategoryObject()->name][] = $who;
            }
        }

        return $categories;
    }

    /**
     *
     * @return \Blacklist\Object\WarehouseObject
     */
    public function getAllAndFuse()
    {
        $categories = array();
        $warehouses = $this->database->table(Tables::WAREHOUSE);
        $myparek = array();
        foreach($warehouses as $wh)
        {
            if(isset($myparek[$wh->product])){ $myparek[$wh->product] += $wh->stack;}
            else{ $myparek[$wh->product] = $wh->stack;}
        }

        foreach($warehouses as $wh){
            $who = new \Blacklist\Object\WarehouseObject();
            $who->make($wh);
            $who->stack = $myparek[$wh->product];
            $who->setDatabase($this->database);

            if(!isset($categories[$who->getProductObject()->getCategoryObject()->name])){
                $categories[$who->getProductObject()->getCategoryObject()->name] = array();
                if(!isset($categories[$who->getProductObject()->getCategoryObject()->name][$wh->product])){
                    $categories[$who->getProductObject()->getCategoryObject()->name][$wh->product] = $who;
                }
            }else{
                if(!isset($categories[$who->getProductObject()->getCategoryObject()->name][$wh->product])){
                    $categories[$who->getProductObject()->getCategoryObject()->name][] = $who;
                }
            }
        }

        return $categories;
    }
}