<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 *
 * @date 19.07.2014
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
class LogPresenter extends BasePresenter
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
        $settings = new \Blacklist\Model\Settings\SettingsAction($this->database);
        $logF = new \Blacklist\Factory\LogFactory($this->database);
        $this->template->logs = $logF->getAll($settings->getBasicSettings()->log_number);
    }
    
    /**
     * 
     * @param type $id
     */
    public function handleDelete($id)
    {
        $logF = new \Blacklist\Factory\LogFactory($this->database);
        $mylog = $logF->getById($id);
        $mylog->remove();
        
        $this->flashMessage(STR_455 . ' '. $mylog->getUserObject()->getUserInfo()->username . ' ' . STR_435, 'success');
        if($this->isAjax()){
            $this->redrawControl('logs');
        }else{
            $this->redirect('Log:default');
        }
    }
    
    /**
     * 
     */
    public function handleRemoveAll()
    {
        $fa = new \Blacklist\Factory\LogFactory($this->database);
        $all = $fa->getAll();
        foreach($all as $one){
            $one->remove();
        }
        
        $this->flashMessage(STR_456, 'success');
        
        if($this->isAjax()){
            $this->redrawControl('flashes');
            $this->redrawControl('logs');
        }
    }
}