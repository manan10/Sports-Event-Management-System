<?php
	session_start();
	//https://stackoverflow.com/questions/21396905/create-login-and-logout-session-in-php-and-database
	if(strcmp($_SESSION['uid'],"") == 0)
	{	
		header('Location: login.html');
	}
?>

<html lang="en">
	<head>
		<title> CO-Olympics | Dashboard </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|ZCOOL+XiaoWei" rel="stylesheet">
		<style>
            body
            {
                color: silver;
                font-family: josefin sans;
            }
        </style>
	</head>
    
	<body style="background-color: #0d1a26;">
		<nav class="navbar navbar-default" style="font-size:18px; border-radius:0px; background-color:rgba(0,0,0,0); border-width:0px; font-family: josefin sans;">
			<div class="container-fluid">
				<div class="navbar-header">
			  		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					  	<span class="icon-bar"></span>
					  	<span class="icon-bar"></span>
					  	<span class="icon-bar"></span>                        
			  		</button>
				  	<a class="navbar-brand" href="home.html" style="font-family:snap itc;">CO-Olympics</a>
			 	</div>
			  
				<div class="collapse navbar-collapse" id="myNavbar">
			  		<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="#">Dashboard</a></li>
				  		<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
			  		</ul>
	  			</div>
	  		</div>
        </nav>

        <center>
			<div class="container-fluid">
				<div class="container col-md-2 col-lg-2 bor" style="background-color:#0d1a26;border-color: white;border-radius: 2px;">
					<h3 style="color: white;font-family: josefin sans">Events</h3>
					<hr>
					<ul class="nav nav-pills nav-stacked" id="el" style="text-align:left">
						<li><a style="color: white;font-size: 20px;" href="EventHome/Data/cricket.php">Cricket</a></li>
						<li><a style="color: white;font-size: 20px;" href="EventHome/Data/football.php">Football</a></li>
						<li><a style="color: white;font-size: 20px;" href="EventHome/Data/badminton.html">Badminton</a></li>
						<li><a style="color: white;font-size: 20px;" href="EventHome/Data/volleyball.php">Volleyball</a></li>
						<li><a style="color: white;font-size: 20px;" href="EventHome/Data/tt.html">Table Tennis</a></li>
						<li><a style="color: white;font-size: 20px;" href="EventHome/Data/chess.php">Chess</a></li>
						<li><a style="color: white;font-size: 20px;" href="EventHome/Data/relay.php">Relay race</a></li>
						<li><a style="color: white;font-size: 20px;" href="EventHome/Data/3legged.php">Three-Legged race</a></li>
						<li><a style="color: white;font-size: 20px;" href="EventHome/Data/sack.php">Sack race</a></li>
						<li><a style="color: white;font-size: 20px;" href="EventHome/Data/tow.php">Tug of War</a></li>
						<li><a style="color: white;font-size: 20px;" href="EventHome/Data/lemon.php">Lemon-Spoon race</a></li>
					</ul>
				</div>

				<div>
					<h2> <br><br> Welcome <?php echo $_SESSION['un']; 
					//https://stackoverflow.com/questions/21396905/create-login-and-logout-session-in-php-and-database
					?> !!! </h2>
				</div>

			</div>

        </center>
    </body>
</html>