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

use Blacklist\Factory\OrderFactory,
    Blacklist\Model\String\TableString as Tables,
    Nette\DateTime as DT;

class DealerObject extends Object implements IObject
{
    public
        /** @var type integer */
        $id             = NULL,
        /** @var type string */
        $identificator  = NULL,
        /** @var type string */
        $name           = NULL,
        /** @var type string */
        $city           = NULL,
        /** @var type double */
        $turnover       = NULL,
        /** @var type integer */
        $lastOrder      = NULL,
        /** @var type string */
        $email          = NULL,
        /** @var type string */
        $zip            = NULL,
        /** @var type string */
        $phone          = NULL,
        /** @var type string */
        $address        = NULL;
    
    /**
     * 
     * @param type $name
     * @param type $identificator
     * @param type $city
     */
    public function __construct($name, $identificator, $city)
    {
        $this->identificator = (string) $identificator;
        $this->name = (string) $name;
        $this->city = (string) $city;
        parent::__construct('\Blacklist\Object\DealerObject');
    }
    
    /**
     * create dealer in the database
     */
    public function create() 
    {
        $this->database->table(Tables::DEALERS)
            ->insert($this->toArray());
    }

    /**
     * remove dealer object from database
     */
    public function remove() 
    {
        $this->database->table(Tables::DEALERS)
            ->where('id', $this->id)
            ->delete();
    }

    /**
     * update dealer in the database
     */
    public function update() 
    {
        $this->database->table(Tables::DEALERS)
            ->where('id', $this->id)
            ->update($this->toArray());
    }

    /**
     * @param $months
     * @return int
     */
    public function getTurnOver($months)
    {
        if($months != 0)
        {
            $solds = $this->database->table(Tables::TURNOVER)
                ->where('dealer', $this->id);
            $totalsold = 0;
            $dateNow = new DT;
            foreach($solds as $sold){
                $date = new DT($sold->date, NULL);
                $month = (30 * 24 * 60 * 60) * $months;
                if($date->getTimestamp() > ($dateNow->getTimestamp() - $month)){
                    $orderf = new OrderFactory($this->database);
                    $ps = $orderf->getById($sold->orderkey);
                    foreach($ps->getProducts() as $p){
                        $totalsold += $p->pricedph;
                    }
                }
            }
            return $totalsold;
        }
        else
        {
            $solds = $this->database->table(Tables::TURNOVER)
                ->where('dealer', $this->id);
            $totalsold = 0;
            foreach($solds as $sold){
                $orderf = new OrderFactory($this->database);
                $ps = $orderf->getById($sold->orderkey);
                foreach($ps->getProducts() as $p){
                    $totalsold += $p->pricedph;
                }
            }
            return $totalsold;
        }
    }
}

