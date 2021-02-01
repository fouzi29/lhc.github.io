<?php
    include('functions.php');
    $id = $_GET['id'];
    
    $query = "DELETE FROM `requests` WHERE `requests`.`idno` = '$id';";
        if(performQuery($query)){
            echo "<script>alert('account rejected succesfully.')</script>";
        }else{
            echo "<script>alert('Unknown error occured.')</script>";
        }

?>
<br/><br/>
<a href="home.php">Back</a>