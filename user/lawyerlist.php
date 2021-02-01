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
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">
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
        
        #foot0 {
            position: fixed;
            color: white;
            height: 50px;
            background: #043927;
            opacity: 0.7;
            text-align: center;
            padding-top: 10px;
            margin-top: 2px;
            margin-left: 82px;
            width: 1200px;
        }
     #search_text{

         width: 10px !important;
     }
        
        #wrapper {
            margin-top: -38px;
            height: 480px;
        }
        
        ul {
            list-style-type: none;
        }
               
        .headers {
            background-color: #041904;
            width: 100%;
            height: 15%;
            margin-left: -15px;
            padding: 8px;
            margin-top: 1px;
        }
    </style>
</head>

<body>

    <div id="bd0">
        <header>
            <br>
            <div class="mydiv">
                <img src="img/lppicon.png" style="border-radius:30%" height="100" alt="mdb logo">
            </div>
            <div class="mydiv2">
                <nav class="navbar navbar-expand-lg navbar-dark  ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="h1.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="constitutebd.php">Constitute</a></li>
                            <li class="nav-item"><a class="nav-link" href="lawyerlist.php">Find Lawyer</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Ask Lawyer</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Community</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Career</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Profile</a></li>

                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <br>
 <div class="input-group input-group-sm mb-3 w-50">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Search</span> </div>
  <input type="text" class="form-control" name="search_text" id="search_text" placeholder="Search by expert Field or name" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>

        <footer>
            <div id="foot0">
                <p>&copy;Copyright 2020 Lawyer help care | Developed By Femous</p>
            </div>
        </footer>
    </div>
    </div>
    

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/2.1.0/bootstrap-filestyle.min.js" integrity="sha512-HfRdzrvve5p31VKjxBhIaDhBqreRXt4SX3i3Iv7bhuoeJY47gJtFTRWKUpjk8RUkLtKZUhf87ONcKONAROhvIw==" crossorigin="anonymous"></script>


    <script type="text/javascript" src="js/jquery.min.js"></script>

</body>

</html>

<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"fetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>