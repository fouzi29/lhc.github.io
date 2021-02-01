<?php
    include('functions.php');
    include('database.php');
error_reporting(0);
    $id = $_GET['id'];
    echo $id;
    $query = "select * from `requests` where `idno` = '$id'; ";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
        
            $query= "INSERT INTO `lawyer`(`id`, `name`, `designation`, `address`, `eb`, `expertfield`, `workplace`, `password`, `idno`) VALUES (NULL,'$row[name]','$row[designation]','$row[address]','$row[eb]','$row[expertfield]','$row[workplace]','$row[password]','$row[idno]')" ;
           echo "sucess";
        }
      
        if(performQuery($query)){
             
  $query = "DELETE FROM `requests` WHERE `idno` = '$id';";
            echo "<script>alert('account accepted')</script>";
        }else{
            echo "<script>alert('Unknown error occured.')</script>";
        }
    }else{
        echo "Error occured.";
    }
    
?>
<br/><br/>
<a href="home.php">Back</a>