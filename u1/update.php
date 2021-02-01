<?php
include('database.php');
$id=$_GET['id'];

$name=$_POST['name'];
$Email=$_POST['email'];
$address=$_POST['address'];
$password=$_POST['password'];

$mysqli->query("update users set username='$name', password='$password', email='$Email',
phone_no='$address' where id=$id");
// Set a constant
define ("FILEREPOSITORY","profile_images/");

// Make sure that the file was POSTed.
if (is_uploaded_file($_FILES['pimage']['tmp_name']))
{
// Was the file a JPEG?
if ($_FILES['pimage']['type'] != "image/jpeg") {
echo "<p>Profile image must be uploaded in JPEG format.</p>";
} else {

//$name = $_FILES['classnotes']['name'];
$filename=$id.".jpg";

unlink(FILEREPOSITORY.$filename);
$result = move_uploaded_file($_FILES['pimage']['tmp_name'],
FILEREPOSITORY.$filename);

if ($result == 1) echo "<p>File successfully uploaded.</p>";
else echo "<p>There was a problem uploading the file.</p>";
}
}

header('location:h1.php');

?>