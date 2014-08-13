<?php
    
namespace Blacklist\Object;


class Forum
{
    //
    public function getAuthor(){
        return 'Томас Петр';
    }
    
    //
    public function getDate(){
        return '16-03-1994';
    }
    
    //
    public function getDescription(){
        return 'This is forum module for Blacklist CMS :)';
    }
    
    //
    public function getName(){
        return 'Forum Module';
    }
    
    //
    public function getVersion(){
        return '1.0.0';
    }
    
    public function getKey(){
        return 'Forum'; // FORUMObject, FORUMFactory, FORUMPresenter, ...
    }
    
    //
    public function getRouter(){
        
        return array(
            'AdminPresenter' => 'presenters/admin/ForumPresenter.php',
            'FrontPresenter' => 'presenters/front/ForumPresenter.php',
            'Models' => array(
                              'Factory' => 'models/ForumFactory.php',
                              'Object'  => 'models/CategoryObject.php'
                     ),
            'Templates' => array(
                              'default' => 'templates/default.latte',
                              'new'     => 'templates/new.latte'
                     )
        );
    }
    
    //
    public function getDatabaseQuery(){
        return 'create table forum(id int unsigned primary key, name varchar(255));';
    }
}