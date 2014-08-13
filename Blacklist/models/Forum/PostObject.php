<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 * 
 * @date 04.08.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Blacklist\Object
 */

namespace
    Blacklist\Object;

use
    Blacklist\Model\String\TableString as Tables,
    Blacklist\Factory\UserFactory;

class PostObject extends Object implements IObject
{
    public
        /** @var type int */
        $id             = NULL,
        /** @var type timestamp */
        $date           = NULL,
        /** @var type int */
        $topic          = NULL,
        /** @var type string */
        $message        = NULL,
        /** @var type int */
        $user           = NULL,
        /** @var type string */ 
        $name           = NULL,
        /** @var type string */
        $email          = NULL,
        /** @var type string */
        $subject        = NULL,
        /** @var type integer */
        $reply          = '0',
        /** @var type string */
        $ip             = NULL,
        /** @var type timestamp */
        $time           = NULL;

    /**
     *
     */
    public function __construct()
    {
        parent::__construct('\Blacklist\Object\PostObject');
    }
    
    /**
     * returns post author as object
     * @return \Blacklist\Object\UserObject
     */
    public function getUserObject()
    {
        $fa = new UserFactory($this->database);
        return $fa->getById($this->user);
    }
    
    /**
     * create post in the database
     */
    public function create() 
    {
        $this->ip = $_SERVER['REMOTE_ADDR'];
        $this->time = time();
        $this->database->table(Tables::FORUM_POSTS)
            ->insert($this->toArray());
    }

    /**
     * remove post from the database (admin only)
     */
    public function remove() 
    {
        $this->database->table(Tables::FORUM_POSTS)
            ->where('id', $this->id)
            ->delete();
    }

    /**
     * update post in the database (does not work on frontend)
     */
    public function update() 
    {
        $this->database->table(Tables::FORUM_POSTS)
            ->where('id', $this->id)
            ->update($this->toArray());
    }
    
    /**
     * return array of objects with replies to this post
     * @return \Blacklist\Object\PostObject
     */
    public function getReply()
    {
        $rpls = $this->database->table(Tables::FORUM_POSTS)
            ->where('reply', $this->id);

        $objects = array();
        foreach($rpls as $rply)
        {
            $o = new PostObject();
            $o->setDatabase($this->database);
            $o->make($rply);
            $objects[] = $o;
        }
        return $objects;
    }
} 