<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 * 
 * @date 15.05.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Settings
 * @license http://BSD.com BSD
 */

namespace
    Blacklist\Model\Settings;

use 
    Blacklist\Object\BasicSettingsObject,
    Nette\Database\Context,
    Blacklist\Model\String\TableString;

/**
 * This class is used to model the settings. 
 * Represents events for classic settings models.
 * 
 * @author Томас Петр <www.beepvix.com>
 */
class SettingsAction
{
    
    /**
     *
     * @var type 
     */
    private $database = NULL;
    
    /**
     * 
     * @param \Nette\Database\Context $db
     */
    public function __construct(Context $db)
    {
	$this->database = $db;
    }
    
    /**
     * 
     * @param \Blacklist\Model\Settings\BasicSettingsControl $basic
     */
    public function updateBasicSettings(BasicSettingsObject $basic)
    {
	$this->database->table(TableString::BASIC_SETTINGS)
                ->where('id < 20')->delete();
	foreach($basic->getArray() as $data)
	{
	    $this->database->table(TableString::BASIC_SETTINGS)
		    ->insert($data);
	}
    }
    
    /**
     * 
     * @return \Blacklist\Model\Settings\BasicSettingsControl
     */
    public function getBasicSettings()
    {
        $dbSettings = $this->database->table(TableString::BASIC_SETTINGS);
        $settings = new BasicSettingsObject();
        $settings->siteurl = $dbSettings[1]->value;
        $settings->sitename = $dbSettings[2]->value;
        $settings->sitedescription = $dbSettings[3]->value;
        $settings->users_can_register = $dbSettings[4]->value;
        $settings->site_email = $dbSettings[5]->value;
        $settings->site_smiles = $dbSettings[6]->value;
        $settings->require_registration_email = $dbSettings[7]->value;
        $settings->copyright = $dbSettings[8]->value;
        $settings->social = $dbSettings[9]->value;
        $settings->footer = $dbSettings[10]->value;
        $settings->pagination = $dbSettings[11]->value;
        $settings->comment_only_user = $dbSettings[12]->value;
        $settings->username = $dbSettings[13]->value;
        $settings->surname = $dbSettings[14]->value;
        $settings->phone = $dbSettings[15]->value;
        $settings->title = $dbSettings[16]->value;
        $settings->keywords = $dbSettings[17]->value;
        $settings->log_number = $dbSettings[18]->value;
        return $settings;
    }
    
    /**
     * 
     * @param \Blacklist\Object\EshopSettingsObject $basic
     */
    public function updateEshopSettings(\Blacklist\Object\EshopSettingsObject $basic)
    {
        $this->database->table(TableString::BASIC_SETTINGS)
                ->where('id > 19')->delete();
        foreach($basic->getArray() as $data)
        {
            $this->database->table(TableString::BASIC_SETTINGS)
                    ->insert($data);
        }
    }
    
    /**
     * 
     * @return \Blacklist\Object\EshopSettingsObject
     */
    public function getEshopSettings()
    {
        $dbSettings = $this->database->table(TableString::BASIC_SETTINGS);
        $settings = new \Blacklist\Object\EshopSettingsObject();
        $settings->email = $dbSettings[20]->value;
        $settings->orderCount = $dbSettings[21]->value;
        $settings->dph = $dbSettings[22]->value;
        $settings->company = $dbSettings[23]->value;
        $settings->company_tel = $dbSettings[24]->value;
        $settings->company_address = $dbSettings[25]->value;
        $settings->company_email = $dbSettings[26]->value;
        $settings->company_city = $dbSettings[27]->value;
        $settings->company_zip = $dbSettings[28]->value;
        $settings->company_url= $dbSettings[29]->value;
        $settings->ic = $dbSettings[30]->value;
        $settings->dic = $dbSettings[31]->value;
        $settings->account_number = $dbSettings[32]->value;
        $settings->swift = $dbSettings[33]->value;
        $settings->iban = $dbSettings[34]->value;
        $settings->pdf_footer = $dbSettings[35]->value;
        $settings->order_number = $dbSettings[36]->value;
        $settings->last_order = $dbSettings[37]->value;
        $settings->stamp = $dbSettings[38]->value;
        $settings->ppl_expres_price = $dbSettings[39]->value;
        $settings->messenger_price = $dbSettings[40]->value;
        $settings->due_date = $dbSettings[41]->value;
        $settings->taxation_date = $dbSettings[42]->value;
        $settings->default_language = $dbSettings[43]->value;
        $settings->conditions = $dbSettings[44]->value;
        $settings->thanks = $dbSettings[45]->value;
        $settings->default_additionals = $dbSettings[46]->value;
        $settings->invoice_wdph = $dbSettings[47]->value;
        return $settings;
    }
}