<?php
  class HomeModel extends Model{
   public function __construct() {
    parent::__construct();
   }
   
   
   
   public function testDB(){
	   $mailer = new ODB('as_mailer');
	   $a = $mailer->get('*');
	   print_r($a);
   }

  
  
  
   
 
  
  
}
?>