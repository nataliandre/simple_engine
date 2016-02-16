<?php
  class Projects extends Controller{
   public function __construct() {
	parent::__construct();
	    $this->settings['title'] = 'artndev.space - space technologies';
		$this->languageSet('common/home');	  
       	$this->setOutput('projects/review.tpl');
        
   }
   
   
   
   
  
  
   
   
  }
?>