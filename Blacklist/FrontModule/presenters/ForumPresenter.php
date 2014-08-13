<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 *
 * @date 04.08.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Blacklist\FrontModule\Presenters
 */

namespace 
    Blacklist\FrontModule\Presenters;

use
    Nette,
    Nette\Database\Context,
    Nette\Application\UI\Form;

/**
 * @author Томас Петр
 */
class ForumPresenter extends BasePresenter
{
    
    /**
     *
     * @var type 
     */
    private $database;
    
    /**
     * 
     * @param \Nette\Database\Context $db
     */
    public function __construct(Context $db)
    {
        $this->database = $db;
        parent::__construct($db);
    }
    
    /**
     * 
     */
    public function renderPosts($page = NULL)
    {
        $this->defaultInit($this->database, $this->template);
        $factory = new \Blacklist\Factory\PostFactory($this->database);
        $this->template->posts = $factory->getAll();
        
        $paginator = new \Nette\Utils\Paginator;
        $paginator->setItemCount(count($this->template->posts));
        $paginator->setItemsPerPage(10);
        $paginator->setPage(($page === NULL) ? 1 : $page);
        $this->template->posts = $factory->getAll($paginator->getLength(), $paginator->getOffset());
        
        $this->template->paginator = $paginator;
    }
    
    /**
     * 
     * @param type $id
     */
    public function renderPost($id)
    {
        $this->defaultInit($this->database, $this->template);
        $factory = new \Blacklist\Factory\PostFactory($this->database);
        $this->template->post = $factory->getById($id);
    }
    
    /**
     * 
     * @return \Nette\Application\UI\Form
     */
    protected function createComponentReplyForm()
    {
        $form = new Form;
        if(!$this->getUser()->isLoggedIn()){
            $form->addText('name', 'Meno')
                ->setRequired('Meno musíte vyplniť.');
            $form->addText('email', 'E-mail')
                ->setRequired('Email musí byť vyplnený.')
                ->addRule(Form::EMAIL, 'Musíte zadať správny email!')
                ->setType('email');
        }
        //$form->addText('subject', 'Predmet')
        //    ->setRequired('Předmět musí být vyplněn.');
        $form->addTextArea('message', 'Sprava');
        $form->addHidden('post', $this->getParameter('id'));
        $form->addSubmit('send');
        $form->onSuccess[] = $this->replyFormSubmitted;
        return $form;
    }
    
    /**
     * 
     * @param \Nette\Application\UI\Form $form
     */
    public function replyFormSubmitted(Form $form)
    {
        $ex = $this->database->table(\Blacklist\Model\String\TableString::FORUM_POSTS)
                ->where(array('ip' => $_SERVER['REMOTE_ADDR'], 'reply' => '1'))->fetch();
        
        $date = new \Nette\DateTime;
        if(isset($ex->ip) && strtotime('+1 hour', $ex->time) > $date->getTimestamp() && !$this->getUser()->isLoggedIn())
        {
            $this->flashMessage('Nový príspevok môžete pridať iba raz za 2 hodiny.', 'info');
        }
        else
        {
            $data = $form->getValues();
            $object = new \Blacklist\Object\PostObject();
            $object->message = $data->message;
            if($this->getUser()->isLoggedIn()){
                $object->user = $this->getUser()->id;
                $object->name = '';
                $object->email = '';
            }else{
                $object->name = $data->name;
                $object->email = $data->email;
            }
            $object->reply = $data->post;
            $object->setDatabase($this->database);
            $object->create();
            $this->flashMessage('Príspevok bol úspešne pridaný, ďakujeme.', 'success');
        }
        
        if($this->isAjax()){
            $this->redrawControl('posts');
            $this->redrawControl('nums');
            $this->redrawControl('flashes');
        }
    }
    
    /**
     * 
     * @param type $pid
     */
    public function handleRemovePost($pid)
    {
        $f = new \Blacklist\Factory\PostFactory($this->database);
        $oo = $f->getById($pid);
        $oo->remove();
        
        $this->flashMessage('Vlákno bolo úspešne vymazané.', 'success');
        
        if($this->isAjax()){
            $this->redrawControl('posts');
            $this->redrawControl('nums');
            $this->redrawControl('flashes');
        }
    }
    
    /**
     * 
     * @return \Nette\Application\UI\Form
     */
    protected function createComponentNewForm()
    {   
        $form = new Form;
        $form->addText('name', 'Meno')
            ->setRequired('Meno musíte vyplniť.');
        $form->addText('email', 'E-mail')
            ->setRequired('Email musí byť vyplnený.')
            ->addRule(Form::EMAIL, 'Musíte zadať správny email!')
            ->setType('email');
        $form->addText('subject', 'Predmet')
            ->setRequired('Predmet musí byť vyplnený.');
        $form->addTextArea('message', 'Sprava');
        $form->addTextArea('abc', 'Aktuálný rok')
            ->setRequired('Antispam musí byť vyplnený!')
            ->addRule(Form::RANGE, 'Zadajte prosím aktuálny rok.', array(date('Y'), date('Y')));
        $form->addSubmit('send');
        $form->onSuccess[] = $this->newFormSubmitted;
        return $form;
    }
    
    /**
     * 
     * @param \Nette\Application\UI\Form $form 
     */
    public function newFormSubmitted(Form $form)
    {
        $data = $form->getValues();
        
        $ex = $this->database->table(\Blacklist\Model\String\TableString::FORUM_POSTS)
                ->where(array('ip' => $_SERVER['REMOTE_ADDR'], 'reply' => '0'))->fetch();
        
        $date = new \Nette\DateTime;
        if(isset($ex->ip) && strtotime('+1 day', $ex->time) > $date->getTimestamp() && !$this->getUser()->isLoggedIn())
        {
            $this->flashMessage('Nové vlákno môžete pridať iba raz za deň.', 'info');
        }
        else
        {
            $object = new \Blacklist\Object\PostObject();
            $object->email = $data->email;
            $object->message = $data->message;
            $object->name = $data->name;
            $object->subject = $data->subject;
            $object->user = '';
            $object->setDatabase($this->database);
            $object->create();
            $this->flashMessage('Ďakujeme za príspevok, čo najskôr sa vám pokúsi odpovedať jeden za našich zamestnancov.', 'success');
        }
        
        $this->redirect('Forum:posts');
    }
    
    /**
     * 
     */
    public function renderAdd()
    {
        $this->defaultInit($this->database, $this->template);
    }
}