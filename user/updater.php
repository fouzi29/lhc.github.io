<?php
include('database.php');
$id=$_GET['id'];
$name=$_POST['name'];
$expertfield=$_POST['expertfield'];
$address=$_POST['address'];
$eb=$_POST['eb'];
$designation=$_POST['designation'];
$workplace=$_POST['workplace'];
$idno=$_POST['idno'];
$password=$_POST['password'];
$mysqli->query("update requests set name='$name', designation='$designation', 
address='$address', eb='$eb', expertfield='$expertfield', workplace='$workplace',password='$password',idno='$idno' where id=$id");
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
$filename=$idno.".jpg";

unlink(FILEREPOSITORY.$filename);
$result = move_uploaded_file($_FILES['pimage']['tmp_name'],
FILEREPOSITORY.$filename);

if ($result == 1) echo "<p>File successfully uploaded.</p>";
else echo "<p>There was a problem uploading the file.</p>";
}
}

header('location:aindex.php');

?>