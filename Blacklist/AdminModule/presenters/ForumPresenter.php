<?php
    
    /**
     * This is part of Blacklist CMS developed by Beepvix.
     *
     * @date 21.06.2014
     * @author Томас Петр <tomas.petr@beepvix.com>
     * @package Blacklist\AdminModule\Presenters
     */
    
    namespace
    Blacklist\AdminModule\Presenters;
    
    use
    Nette,
    Nette\Database\Context;
    use ZipArchive;
    
    /**
     * @author Томас Петр
     */
    class ForumPresenter extends BasePresenter
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
         * This method just render the default page in
         * my homepage...
         */
        public function renderDefault()
        {
            $articles = new \Blacklist\Factory\ArticleFactory($this->database);
            $this->template->articles = $articles->getAll();
        }
        
        // one article
        public function renderNew($id)
        {
            $articles = new \Blacklist\Factory\ArticleFactory($this->database);
            $this->template->article = $articles->getById($id);
        }
    }