<?php

/**
 * Ce fichier contient la classe Form_Etu_Modifier.
 *
 * @copyright  2008 Gabriel Malkas
 * @license    "New" BSD License
*/

/**
 * Modifier une entrée Etu.
 *
 * @copyright  2008 Gabriel Malkas
 * @license    "New" BSD License
 */
class Form_Etu_Modifier
{
           
    public function init()
    {
        
        $id = new Zend_Form_Element_Text('id');
        $id->setRequired(true)
            ->addValidators(array(new Zend_Validate_Int(), new Zend_Validate_StringLength()));
        
        $nom = new Zend_Form_Element_Text('nom');
        $nom->setRequired(true)
            ->addValidators(array(new Zend_Validate_Alnum(true), new Zend_Validate_StringLength(20)));
        
        $prenom = new Zend_Form_Element_Text('prenom');
        $prenom->setRequired(true)
            ->addValidators(array(new Zend_Validate_Alnum(true), new Zend_Validate_StringLength(20)));
        
        
        
        $this->addElements(array($id, $nom, $prenom, ));             
   
    }
            
}