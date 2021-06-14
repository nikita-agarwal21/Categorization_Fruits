<?php



  class Category
  {  
    
     private $catcode;
     private $type;

     public function __construct($catcode,$type)
     {
      
       $this->catcode = $catcode;
     $this->type=$type;
      
     }
    

     public function getCatCode()
     {
        return $this->catcode;
     }

     public function setCatCode($catcode)
     {
        $this->catcode= $catcode;
     }
     public function getType()
     {
        return $this->type;
     }

     public function setType($type)
     {
        $this->type= $type;
     }

    
    
  } 



?>