<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 *
 * @date 11.07.2014
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
class ExportPresenter extends BasePresenter
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
        $userF = new \Blacklist\Factory\UserFactory($this->database);
        $this->template->users = $userF->getAll();
        $orderF = new \Blacklist\Factory\OrderFactory($this->database);
        $this->template->lastdate = $orderF->getLastDate();
    }
    
    public function handleRefresByUser()
    {
        $data = $_POST;
        $orders = array();
        $orderf = new \Blacklist\Factory\OrderFactory($this->database);
        foreach($data['user'] as $key => $value)
        {
            if($value){
                $orders = array_merge(
                    $orderf->getByUser(
                        $key, 
                        ($data['ty'] == '1') ? 'doneuser' : 'createuser'), 
                        $orders
                );
            }
        }
        
        $this->template->orders = $orders;
        
        if($this->isAjax()){
            $this->redrawControl('orders');
        }
    }
    
    /**
     * 
     */
    public function handleRefreshByDate()
    {
        $data = $_POST;
        $date1 = new Nette\DateTime($data['date1'], NULL);
        $date2 = new Nette\DateTime($data['date2'], NULL);
        $orderF = new \Blacklist\Factory\OrderFactory($this->database);
        $this->template->orders = $orderF->getByDate($date1, $date2);
        
        if($this->isAjax()){
            $this->redrawControl('orders');
        }
    }
}