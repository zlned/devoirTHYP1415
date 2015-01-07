<?php

/**
 * Ce fichier contient la classe Form_Absence_Supprimer.
 *
 * @copyright  2008 Gabriel Malkas
 * @license    "New" BSD License
*/

/**
 * Supprimer une entrée Absence.
 *
 * @copyright  2008 Gabriel Malkas
 * @license    "New" BSD License
 */
class Form_Absence_Supprimer
{
           
    public function init()
    {
        
        $id_abs = new Zend_Form_Element_Text('id_abs');
        $id_abs->setRequired(true)
            ->addValidators(array(new Zend_Validate_Int(), new Zend_Validate_StringLength()));
        
        $jour = new Zend_Form_Element_Text('jour');
        $jour->setRequired(true)
            ->addValidators(array(new Zend_Validate_Alnum(true), new Zend_Validate_StringLength(30)));
        
        
        
        $this->addElements(array($id_abs, $jour, ));             
   
    }
            
}