<?php
    session_start();
?>
    
<html>
    <head>
        <title> Registration </title>
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <style>
            body
            {
                color:silver;
                font-family: josefin sans;
                background-color:#0d1a26;
                margin-top:200px;
            }

            button
            {
                background-color: rgba(217,217,217,0.5);
                height: 50px;
                width:120px;
                border-radius:5px;
                color: white;
                font-size:17px;
                font-family:josefin sans;
            }
        </style>
    </head>

    <body>
        <center>
            <?php
                echo "<h2> Congratulations ".$_SESSION['p1']."! You have been registered successfully. </h2>";
                session_destroy();    
            ?>
            <br> <br>
            <button type="button" onclick="elist();"> Event Home </button>
        </center>   
    </body>

    <script>
		function elist()
		{
			window.open("../../ev_main.html","_top");
		}
	</script>
</html>
