<!DOCTYPE html>

<html>
<head>

<title>Users Handle</title>
<script src="../js/jquery.min.js"></script>
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<script src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/jquery.dataTables.min.css">
</style>
<script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/2.1.0/bootstrap-filestyle.min.js" integrity="sha512-HfRdzrvve5p31VKjxBhIaDhBqreRXt4SX3i3Iv7bhuoeJY47gJtFTRWKUpjk8RUkLtKZUhf87ONcKONAROhvIw==" crossorigin="anonymous"></script>
<link href="fonts.css" rel="stylesheet">
<script>

$(document).ready(function(){
$('#empTable').dataTable();
$('.file-upload').file_upload();
});

</script>
</head>

<body style="margin:20px auto; background-color:#348F50;">
<div style="margin-left: 15px;">
<a href="../admin/index/index.php" class="btn btn-primary my-2">Admin-Home</a>
</div>
<center>
<h2><span style="font-size:25px; color:blue">
User Handle</span>
</h2></center>

<div class="container">
<br/><br/>
<div class="row header col-sm-12" style="text-align:center;color:green">
<span class="pull-left">

<div style="height:50px;"></div>
<table class="table table-striped table-bordered table-responsive table-hover" 
id="empTable" >
<thead>
<th><center>Picture</center></th>
<th><center>Name</center></th>
<th><center>Email</center></th>
<th><center>Phone No</center></th>
<th><center>Action</center></th>
</thead>
<tbody>
<?php
include('database.php');
error_reporting(0);
$result=$mysqli->query("select * from users");
while($row=$result->fetch_assoc()){
$img = "http://localhost:8080/LHC/u1/profile_images/".$row['id']. ".jpg";
?>
<tr>
<td> <img src='<?php echo $img ?>' height="50px" width="70px" /></td>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone_no']; ?></td>
<td>

<a href="#del<?php echo $row['id']; ?>" 
data-toggle="modal" class="btn btn-danger btn-sm">
<span class="glyphicon glyphicon-trash">
</span> Delete</a>

<!-- include delete modal -->
<?php include('index/u_delete_modal.php'); ?>
<!-- End -->
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</body>
</html>

