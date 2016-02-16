<?php
  class Feedback extends Controller{
   public function __construct() {
	parent::__construct();
	     $this->load_model('index/home');
		 $this->model->testDB();
		/*$this->languageSet('common/home');	  
       	$this->setOutput('common/home.tpl');*/
        
   }
   
   
   
   
  
  
   
   
  }
?>