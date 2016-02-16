<?php
  class Controller {
        public $model;
        private $modeltitle;
        public $template;
        public $settings= array() ;
        protected $data;
        public $output;
        public $child;
        public $functions;
        public $languages;
        private $model_main;
        public $render;
        public $extender  = 'view/common/body.tpl';
        public $cur_lang;
        
        
        /* if you have other imagination about languages interface remove this*/
        public $pagination = 'view/elements/pagination.tpl';
        
        /* this element for tab active*/
        public $tab_active;
      
        
        public function __construct() {
              
              require('libs/Functions.php');
              $this->functions                   = new Functions();
              
              
              $lang_link= ($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : HTTP_SERVER;
              $redirect_lang =  ($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : HTTP_SERVER;
              $lang_link.= (stristr($lang_link,'?')) ? '&' : '?';
              $lang_link.= LANG.'=';
              
              $this->tab_active =  $_GET['url'];
              
              $languag = explode(',', LANGUAGES);
              for($i=0;$i<count($languag);$i++){
	              $languages[$i]['title'] = $languag[$i];
	              $languages[$i]['link']  =  $lang_link.$languag[$i].'/';
              }
              $this->settings['languages'] = $languages;
              
              
              
              require_once('smarty.php');
              $this->render = $smarty;
              $this->render->assign('EXTENDER',$this->extender);
              
              
              
              
            

              
              
              
              /* language inductor */
              if($_GET[LANG]){
	              $_SESSION[LANG] = $_GET[LANG];
	              $this->cur_lang=$_SESSION[LANG];
	              header("Location: ".$redirect_lang);

              }else{
	              $this->cur_lang = trim((!$_SESSION[LANG]) ? DEF_LANGUAGE : $_SESSION[LANG],'/');
	              
              }
              /* end of language inductor*/
              require('libs/Language.php');
              $this->languages                   = new Language();
              

                     
             
              
        }
        
        public function languageSet($route){
	                       $this->settings = array_merge($this->settings, $this->languages->load($route));
        }
        
             
        public function load_model($model){
             require 'model/'.$model.'.php';
             $model = explode('/',$model);
             $class = end($model);
             $class = $class.'Model';
             $this->modeltitle = $class;
             $this->model = new $class;
          
        }
        
        
        
        
        
        
        

        
        
        public function preRender($element,$array = false ){
	          if($array){
	          			extract($array, EXTR_PREFIX_SAME, "hr");
              }
              ob_start();
        
              require('view/'.$element.'.php');
        
              $varible = ob_get_contents();
  
              ob_end_clean();
	          return $varible;
	        
	        
        }
        
        
      
        public function render(){
          
          foreach ($this->child as $key => $value){
              
              extract($this->settings, EXTR_PREFIX_SAME, "hr");
              
              ob_start();
        
              require('view/'.$value.'.php');
        
              $this->settings[$key] = ob_get_contents();
  
              ob_end_clean();
              
              
          }
         
              
              extract($this->settings, EXTR_PREFIX_SAME, "hr");

              ob_start();
        
              require('view/'.$this->template.'.php');
        
              $this->output = ob_get_contents();
  
              ob_end_clean();
              
              echo $this->output; 
         
         
        }
        
        
        

             
        
        public function redirect($route){
           header("Location: ".$route);
        }
        
        
        
     
        
        
      public function setOutput($tpl){
           $this->setData($this->settings);
           $this->render->assign('tab_active',$this->tab_active);
           $this->render->assign('pagination',$this->pagination);
           $this->render->assign('cur_lang',$this->cur_lang);
           $this->render->display('view/'.$tpl);
           
             
             
      }
      
      public function setData($array){
	      foreach($array as $key=>$value){
		      $this->render->assign($key,$value);
	      }
      }
      
 
      
            
      public function unset_model(){
             unset($this->model);
      }
      
       public function setErrorLog(){
          $url        = explode('/',$_GET['url']);
          $str_return = '';
          for($i=0;$i<count($url);$i++){ $str_return.= $url[$i].'-';}
          return $str_return;
          
        }
      
      
       
    public function generateToken(){
      
      $token="";
      $values="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    
      for($i=0;$i<10;$i++)
      {
        $token.=$values[rand(0,61)];
      }
      
      $_SESSION['token'] = md5($token);
      return '<input type="hidden" name="token" data-var="token" value="'.$token.'"/>';
    }
    
    
    
   
    
    
    
    public function checkToken($token){
      if($_SESSION['token'] == md5($token)){
        return true;
      }
      else{
        return false;
      }
    }
    
    
    
    
   
     
    
    
    
    public function loadModel($array){
              extract($array, EXTR_PREFIX_SAME, "hr");

              ob_start();
              
              require('view/modal/modal.php');
        
              $this->output = ob_get_contents();
  
              ob_end_clean();
              
              return $this->output; 
      
    }
    
    
    
    public function loadParticle($dir,$array=false){
      if($array){
              extract($array, EXTR_PREFIX_SAME, "hr");
      }

              ob_start();
              
              require('view/modal/'.$dir.'.php');
        
              $this->output = ob_get_contents();
  
              ob_end_clean();
              
              return $this->output; 
    }
    
    
    
    public function returnReloader($location,$timeout = 3000){
	    $str = '<script>';
	    $str.= 'setTimeout(function(){window.location.replace("'.$location.'");},'.$timeout.');';
	    $str.= '</script>';
	    return $str;
    }
    

    
    
    
    
    /* textualize functions */
    
    
    public function makeAroudQuotes($a){
	    return '&#171;'.$a.'&#187;'; 
    }
    
    public function mAQs($a){ return $this->makeAroudQuotes($a);}
    
      
      
      
      
      
      
      
  }
?>