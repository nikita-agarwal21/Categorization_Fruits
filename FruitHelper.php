<?php 
  class FruitHelper 
  { 
     private $type;

     public function __construct() 
     { 
         if ( isset($_POST['type'])) 
               $this->type = $_POST['type']; 
     }

     public function isFruitChecked($par) 
     { 
        if ( !$this->type ) 
             return ''; 
        if($this->type== $par)
             return 'checked'; 
        else
             return '';
     } 
     
 
    
  } 
?>