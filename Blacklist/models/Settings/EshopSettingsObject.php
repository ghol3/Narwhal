<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 * 
 * @date 05.07.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Blacklist\Object
 */

namespace
    Blacklist\Object;

/**
 * This class represents base settings from the database as
 * such a stupid object. Why this way? Because I love it!
 * Fuck dynamic languages like PHP, I love data types azaza.
 *
 * @author Томас Петр <www.beepvix.com>
 */
class EshopSettingsObject
{
    public
        /** @var type string */
        $email              = NULL,
        /** @var type int */
        $orderCount         = NULL, // order paggination
        /** @var type double */
        $dph                = NULL,
        /** @var type string */
        $company            = NULL,
        /** @var type string */
        $company_tel        = NULL,
        /** @var type string */
        $company_address    = NULL,
        /** @var type string */
        $company_email      = NULL,
        /** @var type string */
        $company_city       = NULL,
        /** @var type string */
        $company_zip        = NULL,
        /** @var type string */
        $company_url        = NULL,
        /** @var type int */
        $ic                 = NULL,
        /** @var type string */
        $dic                = NULL,
        /** @var type string */
        $account_number     = NULL,
        /** @var type string */
        $swift              = NULL,
        /** @var type string */
        $iban               = NULL,
        /** @var type string */
        $pdf_footer         = NULL,
        /** @var type int */
        $order_number       = NULL,
        /** @var type int */
        $last_order         = NULL,
        /** @var type int */
        $stamp              = NULL,
        /** @var type double */
        $ppl_expres_price   = NULL,
        /** @var type double */
        $messenger_price    = NULL,
        /** @var type timestamp */
        $due_date           = NULL,
        /** @var type timestamp */
        $taxation_date      = NULL,
        /** @var type integer */
        $default_language   = NULL,
        /** @var type string */
        $conditions         = NULL,
        /** @var type string */
        $thanks             = NULL,
        /** @var type string */
        $default_additionals= NULL,
        /** @var type boolean */
        $invoice_wdph       = NULL;
            
    /**
     * @return type array
     */
    public function getArray()
    {
        // hihi you can do it better :-D
        // yep, but NOT TODAY! :-D
        
        $array[] = array(
            'id' => '20',
            'name' => 'email',
            'value' => (string) $this->email
        );
        
        $array[] = array(
            'id' => '21',
            'name' => 'order_paggination',
            'value' => (string) $this->orderCount
        );
        
        $array[] = array(
            'id' => '22',
            'name' => 'price_dph',
            'value' => (string) $this->dph
        );
        
        $array[] = array(
            'id' => '23',
            'name' => 'company',
            'value' => (string) $this->company
        );
        
        $array[] = array(
            'id'    => '24',
            'name'  => 'company_tel',
            'value' => (string) $this->company_tel
        );
        
        $array[] = array(
            'id'    => '25',
            'name'  => 'company_address',
            'value' => (string) $this->company_address
        );
        
        $array[] = array(
            'id'    => '26',
            'name'  => 'company_email',
            'value' => (string) $this->company_email
        );
        
        $array[] = array(
            'id'    => '27',
            'name'  => 'company_city',
            'value' => (string) $this->company_city
        );
        
        $array[] = array(
            'id'    => '28',
            'name'  => 'company_zip',
            'value' => (string) $this->company_zip
        );
        
        $array[] = array(
            'id'    => '29',
            'name'  => 'company_url',
            'value' => (string) $this->company_url
        );
                
        $array[] = array(
            'id'    => '30',
            'name'  => 'ic',
            'value' => (string) $this->ic
        );    
        
       $array[] = array(
           'id' => '31',
           'name'   => 'dic',
           'value'  => (string) $this->dic
       );
       
       $array[] = array(
           'id' => '32',
           'name'   => 'account_number',
           'value'  => (string) $this->account_number
       );
       
       $array[] = array(
           'id' => '33',
           'name'   => 'swift',
           'value'  => (string) $this->swift
       );
       
       $array[] = array(
           'id' => '34',
           'name'   => 'iban',
           'value'  => (string) $this->iban
       );
       
       $array[] = array(
           'id' => '35',
           'name'   => 'pdf_footer',
           'value'  => (string) $this->pdf_footer
       );
       
       $array[] = array(
           'id' => '36',
           'name'   => 'order_number',
           'value'  => (string) $this->order_number
       );
       
       $array[] = array(
           'id' => '37',
           'name'   => 'last_order',
           'value'  => (string) $this->last_order
       );
       
       $array[] = array(
           'id' => '38',
           'name'   => 'stamp',
           'value'  => (string) $this->stamp
       );
       
       $array[] = array(
           'id' => '39',
           'name'   => 'ppl_expres_price',
           'value'  => $this->ppl_expres_price
       );
       
       $array[] = array(
           'id' => '40',
           'name'   => 'messenger_price',
           'value'  => $this->messenger_price
       );
       
       $array[] = array(
           'id' => '41',
           'name'   => 'due_date',
           'value'  => $this->due_date
       );
       
       $array[] = array(
           'id' => '42',
           'name'   => 'taxation_date',
           'value'  => $this->taxation_date
       );
       
       $array[] = array(
           'id' => '43',
           'name'   => 'default_language',
           'value'  => $this->default_language 
       );
       
       $array[] = array(
           'id' => '44',
           'name'   => 'conditions',
           'value'  => $this->conditions
       );
       
       $array[] = array(
           'id' => '45',
           'name'   => 'thanks',
           'value'  => $this->thanks
       );
       
       $array[] = array(
           'id' => '46',
           'name'   => 'default_additionals',
           'value'  => $this->default_additionals
       );

        $array[] = array(
            'id'    => '47',
            'name'  => 'invoice_wdph',
            'value' => $this->invoice_wdph
        );
        
        return $array;
    }
}