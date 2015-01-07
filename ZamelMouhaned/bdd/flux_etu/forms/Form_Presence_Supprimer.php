<?php

/**
 * Ce fichier contient la classe Form_Presence_Supprimer.
 *
 * @copyright  2008 Gabriel Malkas
 * @license    "New" BSD License
*/

/**
 * Supprimer une entrée Presence.
 *
 * @copyright  2008 Gabriel Malkas
 * @license    "New" BSD License
 */
class Form_Presence_Supprimer
{
           
    public function init()
    {
        
        $id_presence = new Zend_Form_Element_Text('id_presence');
        $id_presence->setRequired(true)
            ->addValidators(array(new Zend_Validate_Int(), new Zend_Validate_StringLength()));
        
        $jour = new Zend_Form_Element_Text('jour');
        $jour->setRequired(true)
            ->addValidators(array(new Zend_Validate_Alnum(true), new Zend_Validate_StringLength(20)));
        
        
        
        $this->addElements(array($id_presence, $jour, ));             
   
    }
            
}