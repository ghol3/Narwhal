<?php

namespace
    Blacklist\Factory;

use
    Blacklist\Model\String\TableString as Tables;

class LanguageFactory
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
    public function __construct(\Nette\Database\Context $db)
    {
        $this->database = $db;
    }
    
    /**
     * 
     * @return \Blacklist\Object\LanguageObject
     */
    public function getAll()
    {
        $languages = $this->database->table(Tables::ORDER_LANGUAGES);
        $objects = array();
        foreach($languages as $language){
            $object = new \Blacklist\Object\LanguageObject(NULL);
            $object->make($language);
            $object->setDatabase($this->database);
            $objects[] = $object;
        }
        return $objects;
    }
    
    /**
     * 
     * @param type $id
     * @return \Blacklist\Object\LanguageObject
     */
    public function getById($id)
    {
        $language = $this->database->table(Tables::ORDER_LANGUAGES)
                ->where('id', $id)->fetch();
        $object = new \Blacklist\Object\LanguageObject(NULL);
        if(isset($language->name)){
            $object->make($language);
        }
        $object->setDatabase($this->database);
        return $object;
    }
}