<?php
    session_start(); //we need session for the log in thingy XD 
    include("functions.php");
    if($_SESSION['login']!==true){
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOMEPAGE</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="BOOTSTRAP/css/style.css.">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href=".img/m.png">

    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

    <style>
        body {
            background-image: radial-gradient(#2bc95a, #00693E, #348f50);
        }
        
        .navbar {
            border-bottom: 1px solid #fff;
            background: #292b2c;
            opacity: 0.7;
            height: 45px;
        }
        
        .container {
            margin-right: 200px;
            width: 500px;
        }
        
        .container-fluid {
            margin: auto;
        }
        
        #bd0 {
            width: 1200px;
            margin: 0 auto;
            background-image: linear-gradient(to right, #3EB489, #077e4c, #3EB489);
        }
        
        .mydiv {
            background-image: linear-gradient(#348f50, #3EB489, #348f50);
            height: 110px;
            margin-top: -10px;
        }
        
        .mydiv2 {
            height: 59px;
        }
        
        .mydiv2 ul {
            margin-left: -16px;
        }
        
        .mydiv2 ul li {
            float: left;
            border-right: 1px solid red;
            padding-left: 10px;
            padding-right: 5px;
        }
        
        .mydiv2 ul li:last-child {
            border-right: none;
        }
        
        .mydiv2 ul li a {
            display: block;
            padding: 10px 20px;
            color: white;
        }
        
        .mydiv2 ul li:hover {
            background-color: #3457D5;
            color: white;
            transition: 0.5s;
        }
        
        .section-main {
            border-bottom: 1px solid #fff;
        }
        
        #foot0 {
            color: white;
            height: 50px;
            background: #043927;
            opacity: 0.7;
            text-align: center;
            padding-top: 10px;
            margin-top: 2px;
            margin-left: 0px;
        }
        
        #wrapper {
            margin-top: -38px;
            height: 480px;
        }
        
        .row {
            margin-top: 45px;
            background-color: #348f50;
            width: 1200px;
            margin-left: 0px;
        }
        
        ul {
            list-style-type: none;
        }
        
        .implink h3 {
            color: red;
        }
        
        .implink ul li a {
            margin-left: 10px;
            color: white;
            padding: 0px;
            text-decoration: none;
        }
        
        .implink ul li :hover {
            background-color: red;
            color: white;
            transition: 0.5s;
        }
        
        .headers {
            background-color: #041904;
            width: 100%;
            height: 17%;
            margin-left: -15px;
          
        }
    </style>




</head>

<body>

    <div id="bd0">
        <header>
            <br>
            <div class="mydiv">
                <img src="img/lppicon.png" style="border-radius:30%" height="100" alt="mdb logo">

                <strong>Hi, <?php echo $_SESSION['username'] ?></strong>

            </div>


            <div class="mydiv2">
                <nav class="navbar navbar-expand-lg navbar-dark  ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="constitutebd.php">Constitute</a></li>
                            <li class="nav-item"><a class="nav-link" href="../user/lawyerlist.php">Find Lawyer</a></li>
                            <li class="nav-item"><a class="nav-link" href="forum.php">Community</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Career</a></li>
                            <li class="nav-item"><a class="nav-link" href="userprofile.php">Profile</a></li>
                           
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <br>
        <section>
            <div id="wrapper">
                <div class="slider-wrapper theme-default">
                    <div id="slider" class="nivoSlider">
                        <img src="img/1.jpg" data-thumb="img/1.jpg" alt="" />
                        <img src="img/2.jpg" data-thumb="img/2.jpg" alt="" />
                        <img src="img/3.jpg" data-thumb="img/3.jpg" alt="" data-transition="slideInLeft" />


                    </div>
                </div>
            </div>
        </section>

        <div class="row">

            <div class="col-12 col-lg-8 col-md-9 col-sm-12" style="background-color:#348f50;border-right:2px solid black;color:white">
                <div class="headers" style="margin-top: -5px;">Important Notice </div>

                <p style="padding-top:10px;">একাদশ জাতীয় সংসদের ১১ তম অধিবেশন চলাকালীন লেজিসলেটিভ ও সংসদ বিষয়ক বিভাগের সংসদ বিষযক দায়িত্ব সম্পর্কিত অফিস আদেশ।
                <a href="http://bdlaws.minlaw.gov.bd/" style="color: whitesmoke;">view more</a>
                </p>
            </div>

            <div class="col-12 col-lg-4 col-md-3 col-sm-12">
                <div class="implink">
                    <h3>Important link</h3>

                    <ul>
                       
                         <li> <a href="https://www.rmp.gov.bd/"> Rajshahi Metropolitan Police</a> </li>
                        <li> <a href="https://www.legalzoom.com/articles/types-of-lawyers">Lawyers Type</a> </li>
                        <li> <a href="http://bdlaws.minlaw.gov.bd/">Law Of Bangladesh</a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <footer>
            <div id="foot0" class="row">
                <p class="Footer col-12 col-lg-12 ">&copy;Copyright 2020 Lawyer help care | Developed By Femous</p>
            </div>
        </footer>

    </div>
    </div>


    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider();
        });
    </script>


</body>

</html>