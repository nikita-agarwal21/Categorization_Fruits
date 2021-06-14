<?php
    
     require_once 'FruitsDaoImpl.php';

     require_once 'Fruits.php';
     require_once 'FruitsDao.php';
     require_once 'CategoryDaoImpl.php';

     require_once 'Category.php';
     require_once 'CategoryDao.php';

     require_once 'DatabaseUtilities.php';
     
$category=false;
if(isset($_POST['type']))

{     $catcode = $_POST['type'];
  
     $categoryDao = new CategoryDaoImpl();
    
    // $type=$categoryDao->getType($catcode);
    // $_POST['type']=$type;
 
        
              $category= $categoryDao->searchType($catcode);
       
        

          $_POST['category'] = $category;
  
   
}   
     include 'FruitMVC1.php';
?>