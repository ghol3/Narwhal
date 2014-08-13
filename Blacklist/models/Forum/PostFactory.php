<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 *
 * @date 04.08.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Blacklist\Factory
 */


namespace
    Blacklist\Factory;

use
    Nette\Database\Context,
    Blacklist\Model\String\TableString as Tables,
    Blacklist\Object\PostObject;

class PostFactory
{
    /** @var \Nette\Database\Context */
    private $database;
    
    /**
     * 
     * @param \Nette\Database\Context $db
     */
    public function __construct(Context $db)
    {
        $this->database = (object) $db;
    }

    /**
     * limit1 and limit2 just if you want to use pagi
     * @param null $limit1
     * @param null $limit2
     * @return \Blacklist\Object\PostObject array
     */
    public function getAll($limit1 = NULL, $limit2 = NULL)
    {
        $objects = array();
        $posts = $this->database->table(Tables::FORUM_POSTS)
            ->where('reply', '0')
            ->limit($limit1, $limit2);

        foreach($posts as $post)
        {
            $o = new PostObject();
            $o->make($post);
            $o->setDatabase($this->database);
            $objects[] = $o;
        }
        return $objects;
    }
    
    /**
     * returns object by primary key
     * @param type $id
     * @return \Blacklist\Object\PostObject
     */
    public function getById($id)
    {
        $post = $this->database->table(Tables::FORUM_POSTS)
                ->where('id', $id)->fetch();
        $o = new PostObject();
        $o->make($post);
        $o->setDatabase($this->database);
        return $o;
    }
}