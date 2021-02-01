<?php
include('database.php');
$id=$_GET['id'];
$mysqli->query("delete from lawyer where id=$id");
unlink("profile_images/".$id.".jpg");
header('location:aindex.php');
?>