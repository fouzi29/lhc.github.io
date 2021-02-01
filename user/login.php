<?php
    session_start(); //we need session for the log in thingy XD 
    include("functions.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">
    <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/2.1.0/bootstrap-filestyle.min.js" integrity="sha512-HfRdzrvve5p31VKjxBhIaDhBqreRXt4SX3i3Iv7bhuoeJY47gJtFTRWKUpjk8RUkLtKZUhf87ONcKONAROhvIw==" crossorigin="anonymous"></script>

  </head>

  <body class="text-center" style="background-color:#348F50;>
      <?php
      
        if(isset($_POST['signin'])){
            $password = $_POST['password'];
            $idno = $_POST['idno'];
            $query = "SELECT * from `lawyer`;";
            if(count(fetchAll($query)) > 0){ //this is to catch unknown error.
                  foreach(fetchAll($query) as $row){
                    if($row['idno']==$idno&&$row['password']==$password){
                        $_SESSION['login'] = true;
                        $_SESSION['name'] = $row['name'];
                        header('location:h1.php');
                    }else{
                        echo "<script>alert('Wrong login details.')</script>";
                    }
                }
            }else{
                echo "<script>alert('Error.')</script>";
            }

        }
      
      ?>
      <div class="container">
            <form method="post" class="form-signin" style="margin-left:30%;">
            
              <h1 class="h3 mb-3 font-weight-normal" style="margin-top: 50px;margin-left:-400px;">Please sign in</h1>
                
              <div class="row" > 
              <div class="col-md-6" >
              <label for="inputEmail" class="sr-only">Email address</label>
              <input name="idno" type="text" id="inputEmail" class="form-control" placeholder="Identification No" required autofocus>
              <div style="height: 10px;"></div>
              <label for="inputPassword" class="sr-only">Password</label>
              <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
              <div style="height: 10px;"></div>
              <button name="signin" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
              </div>
              </div>
              <div style="height: 10px;"></div>
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm" style="margin-right: 480px;">
            <span class="glyphicon glyphicon-plus"></span> Sign Up Here
              </a></span>
            </form>
          </div>
      
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php include('show_add_modal.php'); ?>