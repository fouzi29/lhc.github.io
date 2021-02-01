<?php
include('database.php');
error_reporting(0);



if(isset($_POST['submit']))
{	 
    $name=$_POST['name'];
    $expertfield=$_POST['expertfield'];
    $address=$_POST['address'];
    $eb=$_POST['eb'];
    $designation=$_POST['designation'];
    $workplace=$_POST['workplace'];
    $idno=$_POST['idno'];
    $password=$_POST['password'];

	$sql="insert into requests (name, designation, address,eb,expertfield,workplace,idno,password) 
     values ('$name', '$designation', '$address','$eb','$expertfield','$workplace','$idno','$password')";
	 if (mysqli_query($mysqli, $sql)) {
		echo "New record created successfully !";
	 
$res = $mysqli->query("select id from requests order by id desc");
$row = $res->fetch_row();
$id = $row[0];

// Set a constant
define ("FILEREPOSITORY","../admin/profile_images/");

// Make sure that the file was POSTed.
if (is_uploaded_file($_FILES['pimage']['tmp_name']))
{
// Was the file a JPEG?
if ($_FILES['pimage']['type'] != "image/jpeg") {
echo "<p>Profile image must be uploaded in JPEG format.</p>";
} else {

//$name = $_FILES['classnotes']['name'];
$filename=$idno.".jpg";
$result = move_uploaded_file($_FILES['pimage']['tmp_name'],FILEREPOSITORY.$filename);

if ($result == 1) echo "<p>File successfully uploaded.</p>";
else echo "<p>There was a problem uploading the file.</p>";
}
}
header('location:login.php');

}
else {
		echo "Error: " . $sql . "
" . mysqli_error($mysqli);
	 }
	 mysqli_close($mysqli);
}
?>