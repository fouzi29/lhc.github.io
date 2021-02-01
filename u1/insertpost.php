<?php
include('database.php');
error_reporting(0);

if(isset($_POST['submit']))
{	 $topic=$_POST['topic'];
    $articleTitle=$_POST['articleTitle'];
    $articleContent=$_POST['articleContent'];
    $pid=$_POST['pid'];

	$sql="insert into posts (articleTitle, articleContent, pid,	time,topic) 
     values ('$articleTitle', '$articleContent', '$pid',now(),'$topic')";
	 if (mysqli_query($mysqli, $sql)) {
        echo "New record created successfully !";
        header('location:forum.php');
}

else {
		echo "Error: " . $sql . "
" . mysqli_error($mysqli);
	 }
	 mysqli_close($mysqli);
}
?>