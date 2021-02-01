<?php
include('database.php');
$id=$_GET['id'];

$topic=$_POST['topic'];
$articleTitle=$_POST['articleTitle'];
$articleContent=$_POST['articleContent'];
$password=$_POST['password'];

$mysqli->query("update posts set topic='$topic', articleTitle='$articleTitle', articleContent='$articleContent'
 where id=$id");

// Make sure that the file was POSTed.

header('location:h1.php');

?>