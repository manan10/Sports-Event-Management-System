<html>
    <?php
        session_start();
        $con = new PDO("mysql:host=localhost;dbname=co_olympics","root","");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $sql = "UPDATE admin SET pword='".$_POST['pwd']."' WHERE uname='".$_SESSION['un']."'";
        $con->exec($sql);

        session_unset();
        session_destroy();

        echo "<script> alert(\"Your Password has updated successfully!\");";
        echo "window.location.href='login.html'; </script>";
    ?>     
</html>