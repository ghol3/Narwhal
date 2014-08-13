<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 *
 * @date 07.07.2014
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
class DealerPresenter extends BasePresenter
{
    
    private $database = NULL;
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
        $factory = new \Blacklist\Factory\DealerFactory($this->database);
        $this->template->dealers = $factory->getAll();
        $this->template->nodealers = $factory->getWithoutOrder();
    }
    
    /**
     * 
     * @return \Nette\Application\UI\Form
     */
    protected function createComponentAddDealer()
    {
        $form = new \Nette\Application\UI\Form;
        $form->addText('dealer', 'Dealer')->setRequired(STR_642);
        $form->addSubmit('send', 'Odeslat');
        $form->onSuccess[] = $this->addDealerSubmitted;
        return $form;
    }
    
    /**
     * 
     * @param \Nette\Application\UI\Form $form
     */
    public function addDealerSubmitted(\Nette\Application\UI\Form $form)
    {
        $dealer = new \Blacklist\Object\DealerObject('', $form->getValues()->dealer, '');
        $dealer->setDatabase($this->database);
        $dealer->create();
        $this->saveLog(STR_442 .' ' . $dealer->name, $this->database);
        $this->flashMessage(STR_443, 'success');
        if($this->isAjax()){
            $this->redrawControl('flashes');
            $this->redrawControl('nodealers');
            $this->redrawControl('svine');
        }else{
            $this->redirect('Dealer:default');
        }
    }
    
    public function handleRemoveNoDealer($dealerId)
    {
        $fac = new \Blacklist\Factory\DealerFactory($this->database);
        $dealer = $fac->getById($dealerId);
        $dealer->setDatabase($this->database);
        $dealer->remove();
        $this->saveLog(STR_444 . ' ' . $dealer->identificator, $this->database);
        $this->flashMessage(STR_445 .' ' . $dealer->identificator . ' ' . STR_446, 'success');
        
        if($this->isAjax()){
            $this->redrawControl('flashes');
            $this->redrawControl('nodealers');
        }
    }
    
    public function handleRemoveDealer($dealerId)
    {
        $fac = new \Blacklist\Factory\DealerFactory($this->database);
        $dealer = $fac->getById($dealerId);
        $dealer->setDatabase($this->database);
        $dealer->remove();
        $this->database->table(\Blacklist\Model\String\TableString::ORDERS)
                ->where('commission', $dealerId)
                ->update(array('commission' =>  0));
        $this->saveLog(STR_444 . ' ' . $dealer->name, $this->database);
        $this->flashMessage(STR_447 . ' ' . $dealer->identificator . ' ' . STR_446, 'success');
        
        if($this->isAjax()){
            $this->redrawControl('flashes');
            $this->redrawControl('dealers');
        }
    }
    
    /**
     * 
     * @param type $identificator
     * @param type $dealerId
     */
    public function handleChangeIdentificator($identificator, $dealerId)
    {
        $fac = new \Blacklist\Factory\DealerFactory($this->database);
        $dealer = $fac->getById($dealerId);
        $ids = $dealer->identificator;
        $dealer->identificator = $identificator;
        $dealer->setDatabase($this->database);
        $dealer->update();
        $this->saveLog(STR_448 . ' ' . $dealer->name, $this->database);
        $this->flashMessage(STR_445 . ' ' . $ids . ' ' . STR_449 . ' ' . $identificator . '.', 'success');
        
        if($this->isAjax()){
            $this->redrawControl('flashes');
            $this->redrawControl('dealers');
        }
    }
    
    /**
     * 
     */
    public function renderMap()
    {
        $dealerF = new \Blacklist\Factory\DealerFactory($this->database);
        $this->template->dealers = $dealerF->getAll();
    }
}