<?php

require_once 'Fruits.php';
require_once 'FruitsDao.php';
require_once 'DatabaseUtilities.php';

class FruitDaoImpl implements FruitDao
{
    public function searchFruit($catcode)
    {
        $items=array();
        $connection=DatabaseUtilities::getConnection('grocery');

        $sql='select * from item where catcode=?';
        $statement=$connection->prepare($sql);
        $statement->bind_param('i',$catcode);


    if( $statement->execute())
       
          {
           
            $resultstmt=$statement->get_result();
  
            while ( $row=$resultstmt->fetch_assoc())
            {
              $item = new Fruit($row['type_of_item'],$row['code'],$row['name'],$row['catcode'],$row['price']);
              $items[] = $item;
            }
  
          }    
        
    $statement->close();
    $connection->close();

    return $items;
}
}



?>