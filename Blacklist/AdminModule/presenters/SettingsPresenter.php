<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 *
 * @date 05.06.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Blacklist\AdminModule\Presenters
 */

namespace 
    Blacklist\AdminModule\Presenters;

use
    Nette,
    Nette\Database\Context,
    Blacklist\Model\Settings\SettingsAction,
    Blacklist\Component\Settings\SettingsComponentFactory;

/**
 * @author Томас Петр
 */
class SettingsPresenter extends BasePresenter
{   
    
    private $settings = NULL;
    
    private $component = NULL;
    
    private $database = nuLl;
    
    /**
     * This is the constructor of this class just set the
     * database context from Nette to my parent.
     * 
     * @param Nette\Database\Context $db
     */
    public function __construct(Context $db)
    {
	parent::__construct();
        $this->database = $db;
	$this->settings = new SettingsAction($db);
	$this->component = new SettingsComponentFactory($db, $this);
	//$this->component = new MenuComponentFactory($db, $this);
    }
    
    /**
     *
     *
     */
    public function startup()
    {
        parent::startup();
	$this->template->user = $this->getUser();
    }
    
    protected function createComponentEditBasicform()
    {
	return $this->component->getBasicSettingsForm();
    }
    
    protected function createComponentEditEshopForm()
    {
        $form = new \Nette\Application\UI\Form;
        $eshopset = new SettingsAction($this->database);
        $eshopsettings = $eshopset->getEshopSettings();
        $form->addTextArea('email', 'Email')->setDefaultValue($eshopsettings->email);
        $form->addText('paggination', 'Počet objednávek na stránku')
                ->setType('number')
                ->setDefaultValue($eshopsettings->orderCount);
        $form->addText('price_dph', 'DPH:')->setDefaultValue($eshopsettings->dph);
        $form->addText('company', 'Název společnosti:')
                ->setDefaultValue($eshopsettings->company);
        $form->addText('company_tel', 'Telefonní číslo spolčnosti:')
                ->setDefaultValue($eshopsettings->company_tel);
        $form->addText('company_address', 'Adresa společnosti:')
                ->setDefaultValue($eshopsettings->company_address);
        $form->addText('company_email', 'Email společnosti:')
                ->setDefaultValue($eshopsettings->company_email);
        $form->addText('company_city', 'Město společnosti:')
                ->setDefaultValue($eshopsettings->company_city);
        $form->addText('company_zip', 'Poštovní směrovací číso:')
                ->setDefaultValue($eshopsettings->company_zip);
        $form->addText('company_url', 'Webová adresa:')
                ->setDefaultValue($eshopsettings->company_url);
        $form->addText('ic', 'IČ')
                ->setDefaultValue($eshopsettings->ic);
        $form->addText('dic', 'DIČ')
                ->setDefaultValue($eshopsettings->dic);
        $form->addText('account_number', 'Číslo účtu')
                ->setDefaultValue($eshopsettings->account_number);
        $form->addText('swift', 'SWIFT:')
                ->setDefaultValue($eshopsettings->swift);
        $form->addText('iban', 'IBAN:')
                ->setDefaultValue($eshopsettings->iban);
        $form->addTextArea('pdf_footer', 'Footer:')
                ->setDefaultValue($eshopsettings->pdf_footer);
        $form->addText('order_number', 'O')
                ->setRequired(STR_688)
                ->setDefaultValue($eshopsettings->order_number)
                ->setType('number');
        $form->addHidden('last_order', $eshopsettings->last_order);
        $form->addHidden('original_order_number', $eshopsettings->order_number);
        $form->addUpload('stamp');
        $form->addHidden('stamp_original', $eshopsettings->stamp);
        $form->addText('ppl_expres_price', 'cena')
                ->setRequired(STR_689)
                ->setDefaultValue($eshopsettings->ppl_expres_price)
                ->setType('number');
        $form->addText('messenger_price', 'cena')
                ->setRequired(STR_690)
                ->setDefaultValue($eshopsettings->messenger_price)
                ->setType('number');
        $form->addText('due_date', 'datum splatnosti')
                ->setDefaultValue($eshopsettings->due_date)
                ->setType('number');
        $form->addText('taxation_date', 'datum zdanění')
                ->setDefaultValue($eshopsettings->taxation_date)
                ->setType('number');
        $form->addTextArea('conditions', 'podminky')
                ->setDefaultValue($eshopsettings->conditions);
        
        $form->addTextArea('thanks', 'Děkovací')
                ->setDefaultValue($eshopsettings->thanks);
        $form->addCheckbox('invoice_wdph', 'Faktury bez DPH')
            ->setDefaultValue(($eshopsettings->invoice_wdph == 'false') ? 0 : 1);
        
        $languageFactory = new \Blacklist\Factory\LanguageFactory($this->database);
        $langarray = array();
        foreach($languageFactory->getAll() as $gulag){
            $langarray[$gulag->id] = $gulag->name;
        }
        $form->addSelect('default_language', 'Defaultní jazyk', $langarray)
                ->setDefaultValue($eshopsettings->default_language);
        $ctgFactory = new \Blacklist\Factory\CategoryFactory($this->database);
        $array = array();
        foreach($ctgFactory->getAll() as $ctg){
            $array[$ctg->id] = $ctg->name;
        }
        $form->addSelect('default_additionals', '', $array)
                ->setDefaultValue($eshopsettings->default_additionals);
        $form->addSubmit('send', 'Odeslat');
        $form->onSuccess[] = $this->editEshopFormSubmitted;
        return $form;
    }
    
    public function editEshopFormSubmitted(\Nette\Application\UI\Form $form)
    {
        $data = $form->getValues();
        $settings = new \Blacklist\Object\EshopSettingsObject();
        $settings->dph = $data->price_dph;
        $settings->email = $data->email;
        $settings->orderCount = $data->paggination;
        $settings->company = $data->company;
        $settings->company_tel = $data->company_tel;
        $settings->company_address = $data->company_address;
        $settings->company_email = $data->company_email;
        $settings->company_city = $data->company_city;
        $settings->company_zip = $data->company_zip;
        $settings->company_url = $data->company_url;
        $settings->ic = $data->ic;
        $settings->dic = $data->dic;
        $settings->account_number = $data->account_number;
        $settings->swift = $data->swift;
        $settings->iban = $data->iban;
        $settings->pdf_footer = $data->pdf_footer;
        $settings->ppl_expres_price = $data->ppl_expres_price;
        $settings->messenger_price = $data->messenger_price;
        $settings->conditions = $data->conditions;
        if($data->order_number !== $data->original_order_number){
            $settings->order_number = $data->order_number;
            $settings->last_order = $data->order_number;
        }else{
            $settings->order_number = $data->order_number;
            $settings->last_order = $data->last_order;
        }

        if($data->invoice_wdph){
            $settings->invoice_wdph = 'true';
        }else{
            $settings->invoice_wdph = 'false';
        }
        
        if($data->stamp->getName() != NULL)
        {
            $imageFactory = new \Blacklist\Object\ImageFactory($data->stamp);
            $imageFactory->upload('images/faktury/');
            $settings->stamp = ($imageFactory->path . $imageFactory->name);
        }else{
            $settings->stamp = $data->stamp_original;
        }
        $settings->due_date = $data->due_date;
        $settings->taxation_date = $data->taxation_date;
        $settings->default_language = $data->default_language;
        $settings->thanks = $data->thanks;
        $settings->default_additionals = $data->default_additionals;
        $action = new SettingsAction($this->database);
        $action->updateEshopSettings($settings);
        $this->saveLog(STR_508, $this->database);
        $this->presenter->flashMessage(STR_509, 'success');
        $this->presenter->redirect('this');
    }
    
    /**
     * This method just render the default page in 
     * my homepage...
     */
    public function renderDefault()
    {
    }
    
    public function renderEshop()
    {
        $settings = $this->settings->getEshopSettings();
        $this->template->eshopSettings = $settings;
    }
    
    public function renderTestDisplay()
    {
        $this->template->settings = $this->settings->getBasicSettings();
    }
}