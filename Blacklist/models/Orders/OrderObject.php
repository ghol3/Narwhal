<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 *
 * @date 04.07.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Blacklist\Object
 */

namespace
    Blacklist\Object;

use 
    Blacklist\Object\Object as myObject,
    Blacklist\Object\IObject,
    Blacklist\Model\String\TableString as Tables;

class OrderObject extends myObject implements IObject
{
    public
        /** @var type integer */
        $id             = NULL,
        /** @var type integer */
        $code           = NULL,
        /** @var type timestamp */
        $createDate     = NULL,
        /** @var type string */
        $username       = NULL,
        /** @var type string */
        $surname        = NULL,
        /** @var tyep string */
        $address        = NULL,
        /** @var type string */
        $city           = NULL,
        /** @var type integer */
        $zip            = NULL,
        /** @var type string */
        $firm           = NULL,
        /** @var type string*/
        $district       = NULL,
        /** @var type string */
        $region         = NULL,
        /** @var type integer*/
        $ico            = NULL,
        /** @var type integer */
        $dic            = NULL,
        /** @var type string */
        $email          = NULL,
        /** @var type string */
        $phone          = NULL,
        /** @var type string */
        $note           = NULL,
        /** @var type string */
        $fromF           = NULL,
        /** @var type string */
        $state          = NULL,
        /** @var type double */
        $deliveryPrice  = NULL,
        /** @var type string */
        $deliveryType   = NULL,
        /** @var type integer */
        $discount       = NULL,
        /** @var type string */
        $deliveryTime   = NULL,
        /** @var type string */
        $commission     = NULL,
        /** @var type string */
        $commissionAll  = NULL,
        /** @var type string */
        $installments   = NULL,
        /** @var type string */
        $payment        = NULL,
        /** @var type string */
        $shop           = NULL,
        /** @var type string */
        $language       = NULL,
        /** @var type string */
        $currency       = NULL,
        /** @var type string */
        $track          = NULL,
        /** @var type string */
        $status         = NULL,
        /** @var type string */
        $type           = NULL,
        /** @var type string */
        $paid           = 'N',
        /** @var type string */
        $country        = NULL,
        /** @var type int */
        $productCount   = NULL,
        /** @var type string */
        $firm_city      = NULL,
        /** @var type string */
        $firm_address   = NULL,
        /** @var type string */
        $firm_zip       = NULL,
        /** @var type int */
        $facture_lang   = NULL,
        /** @var type int (1/0) */
        $send           = NULL,
        /** @var type int (1/0) */
        $senden         = NULL,
        /** @var type int (1/0) */
        $export         = NULL,
        /** @var type int */
        $createuser     = NULL,
        /** @var type int */
        $doneuser       = NULL,
        /** @var type boolean */
        $invoice_wdph   = NULL;
    
    private
        /** @var type array of \Blacklist\Object\OrderProductObject */
        $products       = array();
    
    
    /**
     * 
     * @param type $code
     * @param type $username
     * @param type $surname
     * @param type $address
     * @param type $city
     * @param type $email
     * @param type $phone
     * @param type $state
     * @param type $deliveryType
     * @param type $payment
     * @param type $shop
     * @param type $language
     * @param type $currency
     */
    public function __construct($code, $username, $surname, $address, $city, $email,
            $phone, $state, $deliveryType, $payment, $shop, $language, $currency)
    {
        parent::__construct('\Blacklist\Object\OrderObject');
        $this->code         = (string) $code;
        $this->username     = (string) $username;
        $this->surname      = (string) $surname;
        $this->address      = (string) $address;
        $this->city         = (string) $city;
        $this->email        = (string) $email;
        $this->phone        = (string) $phone;
        $this->state        = (string) $state;
        $this->deliveryType = (string) $deliveryType;
        $this->payment      = (string) $payment;
        $this->shop         = (string) $shop;
        $this->language     = (string) $language;
        $this->currency     = (string) $currency;
    } 
    
    /**
     * 
     * @return \Blacklist\Object\UserObject
     */
    public function getUserObject()
    {
        if($this->createuser == 0){
            return new UserObject(NULL, NULL, NULL, NULL);
        }else{
            $userF = new \Blacklist\Factory\UserFactory($this->database);
            return $userF->getById($this->createuser);
        }
    }
    
    /**
     * 
     * @return type
     */
    public function isMailen()
    {
        $factory = new \Blacklist\Factory\OrderFactory($this->database);
        $count = $factory->getEmails($this->id);
        return (count($count) > 0);
    }
    
    /**
     * 
     * @return type
     */
    public function getLanguage()
    {
        $factory = new \Blacklist\Factory\LanguageFactory($this->database);
        $lang = $factory->getById($this->facture_lang);
        if($lang->name == NULL){
            $set = new \Blacklist\Model\Settings\SettingsAction($this->database);
            $sete = $set->getEshopSettings();
            $lang = $factory->getById($sete->default_language);
        }
        return $lang;
    }
    
    /**
     * 
     * @return type
     */
    public function getProducts()
    {
        return $this->products;
    }
    
    /**
     * 
     * @return type
     */
    public function getPriceDPH()
    {
        $price = 0;
        foreach($this->products as $product){
            $price += $product->pricedph;
        }
        return $price;
    }
    
    /**
     * 
     * @return type
     */
    public function getTotalPriceDPH()
    {
        $price = 0;
        foreach($this->products as $product){
            $price += $product->pricedph * $product->count;
        }
        return $price;
    }
    
    /**
     * 
     * @param \Blacklist\Object\OrderProductsObject $product
     */
    public function setProduct(OrderProductsObject $product)
    {
        $this->products[] = $product;
    }
    
    /**
     * 
     */
    public function create() 
    {
        $this->database->table(Tables::ORDERS)
                ->insert($this->toArray());
    }

    /**
     * 
     */
    public function remove() 
    {
       $this->database->table(Tables::ORDERS)
               ->where('id', $this->id)
               ->delete();
    }

    /**
     * 
     */
    public function update() 
    {
        $this->database->table(Tables::ORDERS)
                ->where('id', $this->id)
                ->update($this->toArray());
        
    }

}
