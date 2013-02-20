<?php

namespace Data;

/**
 *
 *@package Data
 *@version 1.0
 *@author Shane Ducharme
 *@copyright 2013, Shane Ducharme
 */
class Node implements \Data\INode
{
    private $key;
    private $value; 

    /**
     *@access public
     *@return void
     */
    public function __construct($key, $value)
    {
        $this->key = $key;
        $this->value = $value;
    }//end constructor

    /**
     * @access public
     * @return mixed Returns the key value.
     */
    public function getKey() 
    {
        return $this->key;
    }//end getKey()
    
    /**
     * @access public
     * @param mixed The key value.
     */
    public function setKey($key)
    {
        $this->key = $key;
    }//end setKey()
    
    /**
     * @access public
     * @return mixed The value.
     */
    public function getValue()
    {
        return $this->value;
    }//end getValue()
    
    /**
     * @access public
     * @param mixed The value.
     */
    public function setValue($value)
    {
        $this->value = $value;
    }//end setValue()
   
    
}//end class