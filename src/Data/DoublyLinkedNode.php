<?php

namespace Data;

/**
 *@package Data
 *@version 1.0
 *@author Shane Ducharme
 *@copyright 2013, Shane Ducharme
 */
abstract class DoublyLinkedNode extends \Data\LinkedNode implements \Data\IDoublyLinkedNode 
{
    private $previous;

    /**
     * @access public
     * @return IDoublyLinkedNode|null Returns the previously linked node. Will return null
     *   if no previous node exists.
     */
    public function getPrevious()
    {
        if(!isset($this->previous))
        {
            return null;
        }//end if

        return $this->previous;

    }//end getPrevious()
    
    /**
     * @access public
     * @param IDoublyLinkedNode The previously linked node.
     */
    public function setPrevious(IDoublyLinkedNode &$previous)
    {
        $this->previous = $previous;
    }//end setPrevious()


    
    
}//end class