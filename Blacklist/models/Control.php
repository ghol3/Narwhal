<?php
    
/**
 * This is part of Blacklist CMS developed by Beepvix.
 *
 * @date 29.05.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Blacklist\Model\Control
 */
    
namespace
    Blacklist\Model\Control;

use
    Nette\Object as NObject;
 
/**
 * This class is parent for all database controls.
 * 
 * @author Томас Петр
 */
abstract class MControl extends NObject
{
    /**
     * This method returns all the data that are protected. 
     * Therefore, it is allowed to edit them.
     * @return type array
     */
    public function getArray()
    {
        $array = array();
        foreach (get_class_vars(get_called_class()) as $key => $value)
        {
            if(isset($this->$key)){
                $array[$key] = $this->$key;
            }
        }
        return $array;
    }
}