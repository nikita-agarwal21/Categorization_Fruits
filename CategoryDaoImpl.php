<?php



require_once 'Category.php';
require_once 'CategoryDao.php';
require_once 'DatabaseUtilities.php';



class CategoryDaoImpl implements CategoryDao
{
    public function searchType($catcode)
    {
        $category=false;
        $connection=DatabaseUtilities::getConnection('grocery');

        $sql='select * from categories where catcode=?';
        $statement=$connection->prepare($sql);
        $statement->bind_param("i",$catcode);


        if($statement->execute())
        {
            $statement->bind_result($catcode,$type);

            if($statement->fetch())
            {
                $category=new Category($catcode,$type);
            }
        }
        
   
    $statement->close();
    $connection->close();

    return $category;
}
}


?>