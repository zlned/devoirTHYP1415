<?php

class EcrireController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }
	   public function indexAction()
    {
        
        $this->view->absences = Absence::get();
        
        echo $this->view->render('absences/index.tpl');
		   
		   $this->view->presences = Presence::get();
        
        echo $this->view->render('presences/index.tpl');
    }


}

