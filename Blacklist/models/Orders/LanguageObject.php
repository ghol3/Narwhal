<?php

namespace
    Blacklist\Object;

use
    Blacklist\Model\String\TableString as Tables;

class LanguageObject extends \Blacklist\Object\Object implements \Blacklist\Object\IObject
{
    public
        /** @var type int */
        $id                 = NULL, 
        /**
         * Identificator name
         * @var type stirng
         */
        $name               = NULL,
        /**
         * Faktura - daňový doklad
         * @var type string
         */
        $title              = NULL,
        /**
         * Dodavatel
         * @var type string
         */
        $supplier           = NULL,
        /** @var type string */
        $phone              = NULL,
        /** @var type string */
        $ico                = NULL,
        /** @var type string */
        $dic                = NULL,
        /**
         * Plátce DPH
         * @var type string
         */
        $dph                = NULL,
        /**
         * Číslo účtu
         * @var type string
         */
        $account_number     = NULL,
        /** @var type string */
        $swift              = NULL,
        /** @var type string */
        $iban               = NULL,
        /**
         * Forma úhrady
         * @var type string
         */
        $form_of_payment    = NULL,
        /**
         * Datum vystavení
         * @var type string
         */
        $date_of_issue      = NULL,
        /**
         * Datum splatnosti
         * @var type string
         */
        $due_date           = NULL,
        /**
         * Datum uskutečnění zdanění
         * @var type string
         */
        $real_date          = NULL, 
        /**
         * Variabilní symbol
         * @var type string
         */
        $variable           = NULL, 
        /**
         * Objednávka
         * @var type string
         */
        $myorder            = NULL,
        /**
         * Odběratel
         * @var type string
         */
        $subscriber         = NULL, 
        /** @var type string */
        $email              = NULL,
        /**
         * Konečný příjemce
         * @var type string
         */
        $final_beneficiary  = NULL,
        /**
         * Platba kartou
         * @var type string
         */
        $cart               = NULL,
        /**
         * Platba hotově
         * @var type string
         */
        $casch              = NULL,
        /**
         * Platba převodem
         * @var type string
         */
        $transfer           = NULL,
        /**
         * Platba dobírkou
         * @var type string
         */
        $delivery           = NULL,
        /**
         * Fakturujeme Vám dle Vaší objednávky
         * @var type string
         */
        $description        = NULL,
        /**
         * Cena
         * @var type string
         */
        $price              = NULL,
        /**
         * Kus / ks
         * @var type string
         */
        $stack              = NULL,
        /**
         * Počet
         * @var type string
         */
        $number             = NULL,
        /**
         * Cena dopravy
         * @var type string
         */
        $delivery_price     = NULL,
        /**
         * Celková cena
         * @var type string
         */
        $final_price        = NULL,
        /**
         * Bez dph
         * @var type string
         */
        $without_dph        = NULL,
        /**
         * S dph
         * @var type string
         */
        $with_dph           = NULL,
        /**
         * Základ daní
         * @var type string
         */
        $tax_base           = NULL,
        /**
         * Sazba dph
         * @var type string
         */
        $vat_rate           = NULL,
        /**
         * Částka DPH
         * @var type string
         */
        $amout_vat          = NULL,
        /**
         * Celkem
         * @var type string
         */
        $total              = NULL,
        /**
         * Celkem k úhradě
         * @var type string
         */
        $total_total        = NULL, 
        /**
         * Společnost je zapsána v obchodním rejstříku ...
         * @var type string
         */
        $footer             = NULL,
        $none               = NULL;
    
    /**
     * 
     * @param type $name
     */
    public function __construct($name)
    {
        $this->name = (string) $name;
        parent::__construct('\Blacklist\Object\LanguageObject');
    }

    /**
     * 
     */
    public function create() 
    {
        $this->database->table(Tables::ORDER_LANGUAGES)
                ->insert($this->toArray());
    }

    /**
     * 
     */
    public function remove() 
    {
        $this->database->table(Tables::ORDER_LANGUAGES)
                ->where('id', $this->id)
                ->delete();
    }

    /**
     * 
     */
    public function update() 
    {
        $this->database->table(Tables::ORDER_LANGUAGES)
                ->where('id', $this->id)
                ->update($this->toArray());
    }

}
