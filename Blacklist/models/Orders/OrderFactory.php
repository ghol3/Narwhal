<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 *
 * @date 04.07.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Blacklist\Factory
 */

namespace
    Blacklist\Factory;

use
    Nette\Database\Context,
    Blacklist\Model\String\TableString as Tables;

class OrderFactory
{
    private $searchMatches = array(
            'username'  , 'surname', 
            'firm'      , 'code', 
            'phone'     , 'address', 
            'city'      , 'note', 
            'email'
    );
    
    /**
     *
     * @var type \Nette\Database\Context
     */
    private $database   = NULL;
    
    /**
     * 
     * @param \Nette\Database\Context $db
     */
    public function __construct(Context $db)
    {
        $this->database = (object) $db;
    }
    
    /**
     * 
     * @param type $limit
     * @return \Blacklist\Object\OrderObject
     */
    public function getAll($limit = NULL)
    {
        $orders = $this->database->table(Tables::ORDERS)
                ->order('createDate DESC')
                ->limit($limit);
        
        return $this->make($orders);
    }
    
    /**
     * 
     * @param type $conditions
     * @param type $order
     * @param type $limit
     * @return type
     */
    public function getArray($conditions, $order = NULL, $limit = NULL)
    {
        $orders = $this->database->table(Tables::ORDERS)
                ->where($conditions)
                ->order($order)
                ->limit($limit);
        return $this->make($orders);
    }
    
    /**
     * 
     * @param type $orders
     * @return \Blacklist\Object\OrderObject
     */
    private function make($orders)
    {
        $oOrders = array();
        
        foreach($orders as $order){
            $object = new \Blacklist\Object\OrderObject(NULL, NULL, NULL, NULL, 
                    NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
            $object->make($order);
            $object->setDatabase($this->database);
            
            $productsIDs = $this->database->table(Tables::ORDER_PRODUCTS)->where('orderkey', $object->id);
            foreach($productsIDs as $productIds){
                $productObject = new \Blacklist\Object\OrderProductsObject($productIds->orderkey, $productIds->product, $productIds->count);
                $productObject->setDatabase($this->database);
                $productObject->id = $productIds->id;
                $productObject->discount = $productIds->discount;
                $productObject->code = $productIds->code;
                $productObject->name = $productIds->name;
                $productObject->price = $productIds->price;
                $productObject->pricedph = $productIds->pricedph;
                $object->setProduct($productObject);
            }
            
            $oOrders[] = $object;
        }
        
        return $oOrders;
    }
    
    /**
     * 
     * @param type $limit
     * @return type
     */
    public function getNews($limit = NULL)
    {
        $orders = $this->database->table(Tables::ORDERS)
                ->where('status', 'new')
                ->order('createDate DESC')
                ->limit($limit);
        return $this->make($orders);
    }
    
    /**
     * 
     * @param type $limit
     * @return type
     */
    public function getBroken($limit = NULL)
    {
        $orders = $this->database->table(Tables::ORDERS)
                ->where('status', 'broken')
                ->order('createDate DESC')
                ->limit($limit);
        return $this->make($orders);
    }
    
    /**
     * 
     * @param type $limit
     * @return type
     */
    public function getDone($limit = NULL)
    {
        $orders = $this->database->table(Tables::ORDERS)
                ->where('status', 'done')
                ->order('createDate DESC')
                ->limit($limit);
        return $this->make($orders);
    }
    
    /**
     * 
     * @param type $user
     * @return type
     */
    public function getByUser($user, $type = 'createuser')
    {
        $orders = $this->database->table(Tables::ORDERS)
                ->where($type, $user)
                ->where('export', 1)
                ->order('createDate DESC');
        return $this->make($orders);
    }
    
    /**
     * 
     * @param type $date1 first
     * @param type $date2 last
     * @return type array
     */
    public function getByDate($date1, $date2)
    {
        $orders = $this->database->table(Tables::ORDERS)
                ->where('createDate > ?', $date1)
                ->where('createDate < ?', $date2)
                ->where('export', 1)
                ->order('createDate');
        return $this->make($orders);
    }
    
    /**
     * 
     * @return type
     */
    public function getLastDate()
    {
        $time = $this->database->table('prefix_orders')
                ->order('createDate')
                ->limit(1)
                ->fetch();
        return $time->createDate;
    }
    
    /**
     * 
     * @param type $id
     * @return \Blacklist\Object\OrderObject
     */
    public function getById($id)
    {
        $order = $this->database->table(Tables::ORDERS)
                ->where('id', $id)->fetch();
        $object = new \Blacklist\Object\OrderObject(NULL, NULL, NULL, NULL, 
                    NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
        $object->setDatabase($this->database);
        $object->make($order);
        $productsIDs = $this->database->table(Tables::ORDER_PRODUCTS)->where('orderkey', $object->id);
        foreach($productsIDs as $productIds){
            $productObject = new \Blacklist\Object\OrderProductsObject($productIds->orderkey, $productIds->product, $productIds->count);
                $productObject->setDatabase($this->database);
                $productObject->id = $productIds->id;
                $productObject->discount = $productIds->discount;
                $productObject->code = $productIds->code;
                $productObject->name = $productIds->name;
                $productObject->price = $productIds->price;
                $productObject->pricedph = $productIds->pricedph;
                $object->setProduct($productObject);
        }
        return $object;
    }
    
    /**
     * 
     * @param type $order
     * @return \Blacklist\Object\OrderEmailObject
     */
    public function getEmails($order)
    {
        $emails = $this->database->table(Tables::ORDER_EMAILS)
                ->where('orderkey', $order);
        $objects = array();
        foreach($emails as $email){
            $myObject = new \Blacklist\Object\OrderEmailObject(NULL, NULL, NULL, NULL);
            $myObject->make($email);
            $myObject->setDatabase($this->database);
            $objects[] = $myObject;
        }
        return $objects;
    }
    
    /**
     * 
     * @param type $code
     * @return \Blacklist\Object\OrderObject
     */
    public function getByCode($code)
    {
        $order = $this->database->table(Tables::ORDERS)
                ->where('code', $code)->fetch();
        $object = new \Blacklist\Object\OrderObject(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
        $object->make($order);
        $object->setDatabase($this->database);
        return $object;
    }
    
    /**
     * 
     * @param type $key
     * @return type
     */
    public function search($key)
    {  
        
        $where = "";
        $ft_min_word_len = 1;
        preg_match_all("~[\\pL\\pN_]+('[\\pL\\pN_]+)*~u", stripslashes($key), $this->searchMatches);
        foreach ($this->searchMatches[0] as $part) {
            if (iconv_strlen($part, "utf-8") < $ft_min_word_len) {
                $regexp = "REGEXP '[[:<:]]" . addslashes(strtoupper($part)) . "[[:>:]]'";
                $where .= " OR username $regexp OR surname $regexp)";
            }
        }
        
        $orders = $this->database->table(Tables::ORDERS)
            ->where("MATCH(username, surname, firm, code, phone, address, city, note, email) AGAINST (? IN BOOLEAN MODE)$where", $key)
            ->limit(50);
        
        $orderObjects = array();
        foreach($orders as $order){
            $newO = new \Blacklist\Object\OrderObject(NULL, NULL, NULL, NULL, 
                    NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
            $newO->setDatabase($this->database);
            $newO->make($order);
            $orderObjects[] = $newO;
        }
        
        return $orderObjects;
    }
}

