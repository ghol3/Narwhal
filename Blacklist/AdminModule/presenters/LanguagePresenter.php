<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 *
 * @date 09.07.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Blacklist\AdminModule\Presenters
 */

namespace 
    Blacklist\AdminModule\Presenters;

use
    Nette,
    Nette\Database\Context;

/**
 * @author Томас Петр
 */
class LanguagePresenter extends BasePresenter
{   
    
    private $database;
    
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
    
    /**
     * 
     */
    public function renderDefault()
    {
        $factory = new \Blacklist\Factory\LanguageFactory($this->database);
        $this->template->languages = $factory->getAll();
    }
    
    /**
     * 
     * @param type $langid
     */
    public function renderEdit($langid)
    {
        $langF = new \Blacklist\Factory\LanguageFactory($this->database);
        $this->template->language = $langF->getById($langid);
    }
    
    /**
     * 
     * @return \Nette\Application\UI\Form
     */
    protected function createComponentAddForm()
    {
        $form = new \Nette\Application\UI\Form;
        $form->addText('name', 'Název')
                ->setRequired(STR_643);
        
        $form->addText('title', 'Titulek')
                ->setRequired(STR_644);
        
        $form->addText('supplier', 'Dodavate')
                ->setRequired(STR_645);
        
        $form->addText('phone', 'Tel.:')
                ->setRequired(STR_646);
        
        $form->addText('ico', 'IČO:')
                ->setRequired(STR_647);
        
        $form->addText('dic', 'DIČ')
                ->setRequired(STR_648);
        
        $form->addText('dph', 'Plátce dph:')
                ->setRequired(STR_649);
        
        $form->addText('account_number', 'Číslo účtu:')
                ->setRequired(STR_650);
        
        $form->addText('swift', 'SWIFT:')
                ->setRequired(STR_651);
        
        $form->addText('iban', 'IBAN:')
                ->setRequired(STR_652);
        
        $form->addText('form_of_payment', 'Forma úhrady:')
                ->setRequired(STR_653);
        
        $form->addText('date_of_issue', 'Datum vystavení:')
                ->setRequired(STR_654);
        
        $form->addText('due_date', 'Datum splatnosti:')
                ->setRequired(STR_655);
        
        $form->addText('real_date', 'Datum uskutečnění zdanění.')
                ->setRequired(STR_656);
        
        $form->addText('variable', 'Variabilní symbol:')
                ->setRequired(STR_657);
        
        $form->addText('myorder', 'Objednávka:')
                ->setRequired(STR_658);
        
        $form->addText('subscriber', 'Odběratel:')
                ->setRequired(STR_659);
        
        $form->addText('email', 'Email:')
                ->setRequired(STR_660);
        
        $form->addText('final_beneficiary', 'Konečný příjemce:')
                ->setRequired(STR_661);
        
        $form->addText('cart', 'Platba kartou:')
                ->setRequired(STR_680);
        
        $form->addText('casch', 'Platba hotově:')
                ->setRequired(STR_662);
        
        $form->addText('transfer', 'Platba převodem:')
                ->setRequired(STR_663);
        
        $form->addText('delivery', 'Platba dobírkou')
                ->setRequired(STR_664);
    
        $form->addText('description', 'Fakturujeme Vám dle Vaší objednávky:')
                ->setRequired(STR_665);
        
        $form->addText('price', 'Cena:')
                ->setRequired(STR_666);
        
        $form->addText('stack', 'Kus/ks')
                ->setRequired(STR_667);
        
        $form->addText('number', 'Počet')
                ->setRequired(STR_668);
        
        $form->addText('delivery_price', 'Cena dopravy:')
                ->setRequired(STR_669);
        
        $form->addText('final_price', 'Celková cena:')
                ->setRequired(STR_670);
        
        $form->addText('without_dph', 'Bez dph:')
                ->setRequired(STR_671);
        
        $form->addText('with_dph', 'S dph:')
                ->setRequired(STR_672);
        
        $form->addText('tax_base', 'Základ daní:')
                ->setRequired(STR_673);
        
        $form->addText('vat_rate', 'Sazba DPH:')
                ->setRequired(STR_674);
        
        $form->addText('amout_vat', 'Celkem')
                ->setRequired(STR_675);
        
        $form->addText('total', 'Totální cena:')
                ->setRequired(STR_676);
        
        $form->addText('total_total', 'Celkem k úhradě:')
                ->setRequired(STR_677);
        
        $form->addText('footer', 'Footer:')
                ->setRequired(STR_678);
        
        $form->addText('none', 'None')
                ->setRequired(STR_679);
        
        $form->addSubmit('send', 'ULOŽIT ZMĚNY');
        $form->onSubmit[] = $this->addFormSubmitted;
        return $form;
    }
    
    /**
     * 
     * @param \Nette\Application\UI\Form $form
     */
    public function addFormSubmitted(\Nette\Application\UI\Form $form)
    {
        $language = new \Blacklist\Object\LanguageObject(NULL);
        $language->make($form->getValues());
        $language->setDatabase($this->database);
        $language->create();
        $this->saveLog(STR_450 . ' ' . $language->name, $this->database);
        $this->flashMessage(STR_33 .' ' . $form->getValues()->name . ' ' . STR_451, 'success');
        $this->redirect('Language:default');
    }
    
    /**
     * 
     * @return \Nette\Application\UI\Form
     */
    protected function createComponentEditForm()
    {
        $langF = new \Blacklist\Factory\LanguageFactory($this->database);
        $lang = $langF->getById($this->getParameter('langid'));
        $form = new \Nette\Application\UI\Form;
        
        $form->addText('name', 'Název')
                ->setRequired(STR_643)
                ->setDefaultValue($lang->name);
        
        $form->addText('title', 'Titulek')
                ->setRequired(STR_644)
                ->setDefaultValue($lang->title);
        
        $form->addText('supplier', 'Dodavate')
                ->setRequired(STR_645)
                ->setDefaultValue($lang->supplier);
        
        $form->addText('phone', 'Tel.:')
                ->setRequired(STR_646)
                ->setDefaultValue($lang->phone);
        
        $form->addText('ico', 'IČO:')
                ->setRequired(STR_647)
                ->setDefaultValue($lang->ico);
        
        $form->addText('dic', 'DIČ')
                ->setRequired(STR_648)
                ->setDefaultValue($lang->dic);
        
        $form->addText('dph', 'Plátce dph:')
                ->setRequired(STR_649)
                ->setDefaultValue($lang->dph);
        
        $form->addText('account_number', 'Číslo účtu:')
                ->setRequired(STR_650)
                ->setDefaultValue($lang->account_number);
        
        $form->addText('swift', 'SWIFT:')
                ->setRequired(STR_651)
                ->setDefaultValue($lang->swift);
        
        $form->addText('iban', 'IBAN:')
                ->setRequired(STR_652)
                ->setDefaultValue($lang->iban);
        
        $form->addText('form_of_payment', 'Forma úhrady:')
                ->setRequired(STR_653)
                ->setDefaultValue($lang->form_of_payment);
        
        $form->addText('date_of_issue', 'Datum vystavení:')
                ->setRequired(STR_654)
                ->setDefaultValue($lang->date_of_issue);
        
        $form->addText('due_date', 'Datum splatnosti:')
                ->setRequired(STR_655)
                ->setDefaultValue($lang->due_date);
        
        $form->addText('real_date', 'Datum uskutečnění zdanění.')
                ->setRequired(STR_656)
                ->setDefaultValue($lang->real_date);
        
        $form->addText('variable', 'Variabilní symbol:')
                ->setRequired(STR_657)
                ->setDefaultValue($lang->variable);
        
        $form->addText('myorder', 'Objednávka:')
                ->setRequired(STR_658)
                ->setDefaultValue($lang->myorder);
        
        $form->addText('subscriber', 'Odběratel:')
                ->setRequired(STR_659)
                ->setDefaultValue($lang->subscriber);
        
        $form->addText('email', 'Email:')
                ->setRequired(STR_660)
                ->setDefaultValue($lang->email);
        
        $form->addText('final_beneficiary', 'Konečný příjemce:')
                ->setRequired(STR_661)
                ->setDefaultValue($lang->final_beneficiary);
        
        $form->addText('cart', 'Platba kartou:')
                ->setRequired(STR_680)
                ->setDefaultValue($lang->cart);
        
        $form->addText('casch', 'Platba hotově:')
                ->setRequired(STR_662)
                ->setDefaultValue($lang->casch);
        
        $form->addText('transfer', 'Platba převodem:')
                ->setRequired(STR_663)
                ->setDefaultValue($lang->transfer);
        
        $form->addText('delivery', 'Platba dobírkou')
                ->setRequired(STR_664)
                ->setDefaultValue($lang->delivery);
    
        $form->addText('description', 'Fakturujeme Vám dle Vaší objednávky:')
                ->setRequired(STR_665)
                ->setDefaultValue($lang->description);
        
        $form->addText('price', 'Cena:')
                ->setRequired(STR_666)
                ->setDefaultValue($lang->price);
        
        $form->addText('stack', 'Kus/ks')
                ->setRequired(STR_667)
                ->setDefaultValue($lang->stack);
        
        $form->addText('number', 'Počet')
                ->setRequired(STR_668)
                ->setDefaultValue($lang->number);
        
        $form->addText('delivery_price', 'Cena dopravy:')
                ->setRequired(STR_669)
                ->setDefaultValue($lang->delivery_price);
        
        $form->addText('final_price', 'Celková cena:')
                ->setRequired(STR_670)
                ->setDefaultValue($lang->final_price);
        
        $form->addText('without_dph', 'Bez dph:')
                ->setRequired(STR_671)
                ->setDefaultValue($lang->without_dph);
        
        $form->addText('with_dph', 'S dph:')
                ->setRequired(STR_672)
                ->setDefaultValue($lang->with_dph);
        
        $form->addText('tax_base', 'Základ daní:')
                ->setRequired(STR_673)
                ->setDefaultValue($lang->tax_base);
        
        $form->addText('vat_rate', 'Sazba DPH:')
                ->setRequired(STR_674)
                ->setDefaultValue($lang->vat_rate);
        
        $form->addText('amout_vat', 'Celkem')
                ->setRequired(STR_675)
                ->setDefaultValue($lang->amout_vat);
        
        $form->addText('total', 'Totální cena:')
                ->setRequired(STR_676)
                ->setDefaultValue($lang->total);
        
        $form->addText('total_total', 'Celkem k úhradě:')
                ->setRequired(STR_677)
                ->setDefaultValue($lang->total_total);
        
        $form->addText('footer', 'Footer:')
                ->setRequired(STR_678)
                ->setDefaultValue($lang->footer);
        
        $form->addText('none', 'None')
                ->setRequired(STR_679)
                ->setDefaultValue($lang->none);
        
        $form->addHidden('id', $lang->id);
        
        $form->addSubmit('send', 'ULOŽIT ZMĚNY');
        $form->onSubmit[] = $this->editFormSubmitted;
        return $form;
    }
    
    /**
     * 
     * @param \Nette\Application\UI\Form $form
     */
    public function editFormSubmitted(\Nette\Application\UI\Form $form)
    {
        $language = new \Blacklist\Object\LanguageObject(NULL);
        $language->make($form->getValues());
        $language->setDatabase($this->database);
        $language->update();
        $this->saveLog(STR_452 . ' ' . $language->name, $this->database);
        $this->flashMessage(STR_33.' ' . $form->getValues()->name . ' ' . STR_453, 'success');
        $this->redirect('Language:default');
    }
    
    /**
     * 
     * @param type $id
     */
    public function handleDelete($id)
    {
        $languageF = new \Blacklist\Factory\LanguageFactory($this->database);
        $lang = $languageF->getById($id);
        $lang->remove();
        $this->saveLog(STR_454 .' ' . $lang->name, $this->database);
        $this->flashMessage(STR_33 .' ' . $lang->name . ' ' . STR_435, 'success');
        if($this->isAjax()){
            $this->redrawControl('languages');
        }else{
            $this->redirect('Language:default');
        }
    }
}