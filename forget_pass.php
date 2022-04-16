<?php
    session_start();
    if($_POST['fp'] == 8)
    {
        $_SESSION['un'] = $_POST['un'];
        header("Location: new_pass.html");
    }
    else
    {
        echo "<script> alert(\"Incorrect Answer!\");";
        echo "window.document.href='login.html'; </script>";
        session_unset();
        session_destroy();
    }
?>