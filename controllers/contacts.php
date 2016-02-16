<?php
  class Contacts extends Controller{
   public function __construct() {
	parent::__construct();
        $this->settings['title'] = 'Feedback artndev.space ';
		$this->languageSet('common/home');	  
       	$this->setOutput('common/home.tpl');
   }
   
   
   
   
  
  
   
   
  }
?>