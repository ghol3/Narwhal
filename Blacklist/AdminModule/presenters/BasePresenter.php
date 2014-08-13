<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 *
 * @date 03.06.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Blacklist\AdminModule\Presenters
 */

namespace 
    Blacklist\AdminModule\Presenters;

use
    Nette\Security\User;

abstract class BasePresenter extends \Nette\Application\UI\Presenter
{
    public function startup()
    {
	parent::startup();
	if ($this->name != 'Admin:Auth') {
            if (!$this->user->isLoggedIn()) {
                if ($this->user->getLogoutReason() === User::INACTIVITY) {
                    $this->flashMessage(STR_437);
                }

                $this->redirect('Auth:login', array(
                    'backlink' => $this->storeRequest()
                ));

            } else {
                if(!$this->user->isAllowed($this->name, $this->action)){
                    $this->flashMessage('Access denied!');
                    $this->redirect('Auth:login');
                }
            }
        }
    }
    
    public function getDefaultInit(\Nette\Database\Context $db)
    {
        $userF = new \Blacklist\Factory\UserFactory($db);
        $this->template->user = $userF->getById($this->getUser()->id);
        $this->template->newCount = count($db->table(\Blacklist\Model\String\TableString::ORDERS)->where('status', 'new'));
    }
    
    /**
     * 
     */
    public function handleLogout()
    {
	$this->user->logout();
	$this->flashMessage(STR_438);
	$this->redirect('this');
    }
    
    /**
     * 
     * @param type $user
     * @param type $action
     */
    protected function saveLog($action, $database)
    {
        $log = new \Blacklist\Object\LogObject();
        $uf = new \Blacklist\Factory\UserFactory($database);
        $u = $uf->getById($this->getUser()->id);
        $log->setDatabase($database);
        $log->user = $u->id;
        $log->action = 'Uživatel ' . $u->getUserInfo()->username . ' ' . $u->getUserInfo()->surname . ' ' . $action;
        $log->create();
    }
}