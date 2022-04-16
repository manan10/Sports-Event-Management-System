<?php
	session_start();
	//https://stackoverflow.com/questions/21396905/create-login-and-logout-session-in-php-and-database
?>

<html lang="en">
	<head>
		<title> CO-Olympics | Football-Data </title>
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

			#el li a:hover
      		{
       			 background-color:#3385ff;
     		}
      
     		#el
      		{
       			font-family: josefin sans;
        		text-align: left;
      		}

            th,tr,td
            {
                height: 50px;
                width: 600px;
                text-align:center;
                border-width:0px;
                border-style:solid;
            }

            tr
            {
                background-color: white;
                color:black;
            }

            th
            {
                background-color:black;
                color:white;
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
						<li><a href="../../login_home.php">Dashboard</a></li>
				  		<li><a href="../../logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
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
						<li><a style="color: white;font-size: 20px;" href="cricket.php">Cricket</a></li>
						<li class="active"><a style="color: white;font-size: 20px;" href="#">Football</a></li>
						<li><a style="color: white;font-size: 20px;" href="badminton.html">Badminton</a></li>
						<li><a style="color: white;font-size: 20px;" href="volleyball.php">Volleyball</a></li>
						<li><a style="color: white;font-size: 20px;" href="tt.html">Table Tennis</a></li>
						<li><a style="color: white;font-size: 20px;" href="chess.php">Chess</a></li>
						<li><a style="color: white;font-size: 20px;" href="relay.php">Relay race</a></li>
						<li><a style="color: white;font-size: 20px;" href="3legged.php">Three-Legged race</a></li>
						<li><a style="color: white;font-size: 20px;" href="sack.php">Sack race</a></li>
						<li><a style="color: white;font-size: 20px;" href="tow.php">Tug of War</a></li>
						<li><a style="color: white;font-size: 20px;" href="lemon.php">Lemon-Spoon race</a></li>
					</ul>
				</div>
				<div>
                    <?php   
                        $con = new PDO("mysql:host=localhost;dbname=co_olympics","root","");
                        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $stmt = $con->prepare("SELECT * FROM football");
                        $stmt->execute();
                        $rows = $stmt->fetchAll();

                        echo "<h1 style=\"font-family:zcool xiaowei;color:white;\"> Football </h1>  <br><br>";
                        echo "<table>";
                        echo "<tr> <th> ID </th> <th> Team </th> <th> Captain Name </th> <th> Contact No. </th> <th> Year </th> <th> Shift </th> </tr>"; 

                        if(count($rows) > 0)
                        {
                            foreach($rows as $row)
                            {
                                echo "<tr> <td> ".$row['id']." </td> <td> ".$row['team']." </td> <td> ".$row['p1']." </td> <td> ".$row['contact']." </td> <td> ".$row['year']." </td> <td> ".$row['shift']."</td>";
                            }
                        }

                        echo "</table>";
                    ?>
				</div>
			</div>
        </center>
    </body>
</html>
