<?php

require_once 'FruitHelper.php';
$fruitHelper=new FruitHelper();


$category=false;
if(isset($_POST['category']))
 $category=$_POST['category'];

?>


<html>
<head><title> groceries types  </title>

<style>
#image{
position:center;

    padding:10px;   
  float:left;
}
</style>
 </head>
<body>
<form name='FruitSearch' method='POST' action='FruitController.php'>

<br><br>

FRUITS:

<input type='radio' name='type' value='11' required <?php echo $fruitHelper->isFruitChecked('11');  ?>>creepers
<input type='radio' name='type' value='12' required <?php echo $fruitHelper->isFruitChecked('12');  ?>>roots
<input type='radio' name='type' value='13' required <?php echo $fruitHelper->isFruitChecked('13');  ?>>tree


<br>
<br>
<input type='submit' value='submit'/>


<?php
   
if($category)

{ 
 
  $fruitDao=new FruitDaoImpl();
  $categoryDao=new CategoryDaoImpl();
  
    ?>
    <br><br>

     <table border='1'>
       <tr><th>attribute</th><th>code</th><th>name</th><th>price (&#8377;)</th></tr>

       <?php
       
       $items=$fruitDao->searchFruit($category->getCatCode());
      
       foreach ($items as $item)
       {
        
        
       
      

  ?>

  <tr><td> <?php echo $item->getTypeOfItem() ?></td>
 <td> <?php echo $item->getCode() ?></td> 
 
 <td> <?php   echo $item->getName() ?></td> 
 
 <td>  <?php  echo $item->getPrice() ?></td> 
    
    
    
    
    
    
    
 <?php  
 } 
}

?>
</tr></table>
<br>
<?php
/*
if ( isset($_POST['category']))
{
    $category = $_POST['category'];
    
}
?>


<?php
if($category)

{ 
  $fruitDao=new FruitDaoImpl();
  $categoryDao=new CategoryDaoImpl();
  $items=$fruitDao->searchFruit($category->getCatCode());
      
       foreach ($items as $item)
       {
        $name=$item->getName();
        
        $fileName = "images/grocery/".$name.".jpg";
      ?>
 
<div id='image' ><img src="<?php echo $fileName ;?>" height="140" width="160" />
<?php echo '<br><br>'.$name;?></div>
<?php
  }}
  
  */
  ?>







</form>


</body>

</html>
