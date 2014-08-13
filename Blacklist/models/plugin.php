<?php

namespace 
    Blacklist\Object;

interface module
{
    
    /**
     * @return type string
     */
    public function getAuthor();
    
    /**
     * @return type string
     */
    public function getDescription();
    
    /**
     * @return type string
     */
    public function getVersion();
    
    /**
     * @return type array
     */
    public function getRouter();
}
