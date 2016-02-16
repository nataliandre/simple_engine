<?php
  class Articles extends Controller{
   public function __construct() {
	parent::__construct();
		$this->languageSet('common/home');	  
       	$this->setOutput('articles/review.tpl');
        
   }
   
   
   
   
  
  
   
   
  }
?>