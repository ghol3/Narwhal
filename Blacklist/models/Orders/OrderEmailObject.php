<?php

namespace
    Blacklist\Object;

use
    Blacklist\Model\String\TableString as Tables;

class OrderEmailObject extends \Blacklist\Object\Object implements \Blacklist\Object\IObject
{
    public 
        /** @var type integer */
        $id         = NULL, 
        /** @var type integer */
        $orderkey   = NULL, 
        /** @var type timestamp */
        $createDate = NULL, 
        /** @var type string */
        $address    = NULL, 
        /** @var type integer */
        $admin      = NULL,
        /** @var type string */
        $facture    = NULL;
    
    private
       /** @var type \Blacklist\Object\UserObject */
       $adminObject = NULL;
    
    /**
     * 
     * @param type $from
     * @param type $to
     * @param type $facture
     * @param type $order
     */
    public function __construct($from, $to, $facture, $order)
    {
        parent::__construct('\Blacklist\Object\OrderEmailObject');
        $this->admin = (string) $from;
        $this->address = (string) $to;
        $this->facture = (string) $facture;
        $this->orderkey = (int) $order;
    }
    
    /**
     * 
     * @return type \Blacklist\Object\UserObject
     */
    public function getAdminObject()
    {
        if($this->adminObject == NULL && $this->database){
            $factory = new \Blacklist\Factory\UserFactory($this->database);
            $this->adminObject = $factory->getById($this->admin);
            unset($factory);
        }
        return $this->adminObject;
    }
    
    /**
     * 
     */
    public function create()
    {
        $this->database->table(Tables::ORDER_EMAILS)
                ->insert($this->toArray());
    }
    
    /**
     * 
     */
    public function update()
    {
        $this->database->table(Tables::ORDER_EMAILS)
                ->where('id', $this->id)
                ->update($this->toArray());
    }
    
    /**
     * 
     */
    public function remove()
    {
        $this->database->table(Tables::ORDER_EMAILS)
                ->where('id', $this->id)
                ->delete();
    }
}