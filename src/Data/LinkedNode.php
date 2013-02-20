<?php

namespace Data;

/**
 *@package Data
 *@version 1.0
 *@author Shane Ducharme
 *@copyright 2013, Shane Ducharme
 */
class LinkedNode extends \Data\Node implements \Data\ILinkedNode
{
    private $next;
    
    /**
     * @access public
     * @return ILinkedNode|null Returns the next ILinkedNode instance if it exists, otherwise returns NULL.
     */
    public function getNext()
    {
        if(!isset($this->next))
        {
            return null;
        }//end if

        return $this->next;

    }//end getNext()
    
    /**
     * @access public
     * @param ILinkedNode The ILinkedNode instance that is next.
     */
    public function setNext(ILinkedNode $next)
    {
        $this->next = $next;

    }//end setNext()
    
}//end class