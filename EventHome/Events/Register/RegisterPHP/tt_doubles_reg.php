<?php
    
    session_start();
    if(isset($_POST) && !empty($_POST)) 
    {
        $con = new PDO("mysql:host=localhost;dbname=co_olympics","root","");//mysqli_connect("localhost","root","","co_olympics");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if(!$con)
        {
            die('could not connect: '.mysqli_connect_error());
        }
    
        $sql = "INSERT INTO tt_doubles (p1,p2,contact,year,shift) VALUES('".$_POST['p1']."','".$_POST['p2']."','".$_POST['phno']."',".$_POST['year'].",".$_POST['shift'].")";
        $con->exec($sql);

  
        $_SESSION['p1'] = $_POST['p1'];
        header('Location: '."congo_doubles.php");
    } 
    else 
    {
        echo "Sorry :(";
    }
?>