
<?php
    session_start(); //we need session for the log in thingy XD 
    include("functions.php");
    include("database.php");
    $n=$_SESSION['username'];
   
    $query= "select * from `users` where `username` = '$n'; ";

    foreach(fetchAll($query) as $row) {
        $id=$row['id'] ;
        $name=$row['username'];
        $Email=$row['email'];
        $address=$row['phone_no'];
        $password=$row['password'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="../css/jquery.dataTables.min.css">

<style>

    span{
        font-weight: bold;
        color: black;
        font-size: 20px;
        text-align: left !important;
    
    }
</style>


</head>
<body style="background-color:#348F50;">
 
<div class="container" style="margin-top:15px;">
  <h2 style=" text-align: center;background-color:white; font-weight:bold;color:black;"><?php  echo $n;?></h2>
  
  <div class="card"  style="width:400px;margin:0 auto;margin-top:15px;background-color:#348F50;width:60%;"  >
  <?php $img = "http://localhost:8080/LHC/u1/profile_images/".$row['id']. ".jpg";?>
  <img src='<?php echo $img ?>' height="150px" width="170px" style="margin:0 auto; "/>
    <div class="card-body" >
      <h4 class="card-title" style=" text-align: center;"><?php echo $name;?></h4>
    
       <span> Name:  <?php echo $name ?> </span><br>
       <div style="height:10px;"></div>
       <span>Email: <?php echo $Email ?>  </span><br>
       <div style="height:10px;"></div>
       <span>Phone_no:<?php echo $address ?> </span><br>
       <div style="height:10px;"></div>
       
       <span>password: <?php echo $password ?>  </span><br>
       <a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-edit"></span> Edit Info</a>&nbsp;
      <a href="h1.php" class="btn btn-primary">Back to main page</a>
    </div>
  </div>
  <br>
  <?php include('show_edit_modal.php'); ?>
</body>
</html>


