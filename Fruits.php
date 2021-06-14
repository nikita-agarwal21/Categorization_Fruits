<?php

  class Fruit
  {  
     private $type_of_item;
     private $code;
     private $name;
     private $catcode;
     private $price;

     public function __construct($type_of_item,$code, $name,$catcode,$price)
     {
        $this->type_of_item = $type_of_item;
       $this->code = $code;
       $this->name = $name;
       $this->catcode = $catcode;
       $this->price = $price;
      
     }
     public function getTypeOfItem()
     {
        return $this->type_of_item;
     }

     public function setTypeofItem($type_of_item)
     {
        $this->type_of_item= $type_of_item;
     }
     public function getCode()
     {
        return $this->code;
     }

     public function setCode($code)
     {
        $this->code= $code;
     }

     public function getName()
     {
        return $this->name;
     }

     public function setName($name)
     {
        $this->name = $name;
     }

     public function getCatCode()
     {
        return $this->catcode;
     }

     public function setCatCode($catcode)
     {
        $this->catcode= $catcode;
     }

     public function getPrice()
     {
        return $this->price;
     }

     public function setPrice($price)
     {
        $this->price = $price;
     }

    
  } 



?>