<?php
    session_start();
    //https://stackoverflow.com/questions/13183579/pdo-get-data-from-database
    $con = new PDO("mysql:host=localhost;dbname=co_olympics","root","");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $con->prepare("SELECT * FROM admin1");
    $stmt->execute();
    $rows = $stmt->fetchAll();
    $cnt = 0;

    if(count($rows) > 0)
    {
        foreach($rows as $row)
        {
            if(strcmp($row['username'],$_POST['un']) == 0)
            {
                if(strcmp($row['password'],$_POST['pwd']) == 0)
                {
                    $_SESSION['un'] = $_POST['un'];
                    header('Location: login_home.php');
                }

                else if(strcmp($row['password'],$_POST['pwd']) != 0)
                    header('Location: login.html');
            }
            else    
                $cnt++;
        }
        if($cnt == count($rows))
            header('Location: home.html');
    }
?>