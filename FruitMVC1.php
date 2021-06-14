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


    padding:10px;   
  float:left;
}
</style>
 </head>
<body>
<form name='FruitSearch' method='POST' action='FruitController.php'>

<br><br>
<center>
FRUITS:

<input type='radio' name='type' value='11' required <?php echo $fruitHelper->isFruitChecked('11');  ?>>creepers
<input type='radio' name='type' value='12' required <?php echo $fruitHelper->isFruitChecked('12');  ?>>roots
<input type='radio' name='type' value='13' required <?php echo $fruitHelper->isFruitChecked('13');  ?>>tree


<br>
<br>
<input type='submit' value='submit'/>

<br><br>



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
<?php echo '<br><br> NAME : '.$name .'<br>';?>

 
 Type of item : <?php echo $item->getTypeOfItem().'<br>';?>
Item code : <?php echo $item->getCode() .'<br>';?>


Price : &#8377; <?php echo $item->getPrice().'<br>';?>
 
 </div>
 <?php
}
  
  
 
  
  
  }?>





</center>


</form>


</body>

</html>
