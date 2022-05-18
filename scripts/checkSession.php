<?php

    session_start();
            
    if((!isset($_SESSION['loggedin'])) || ($_SESSION['loggedin'] != true)) {
        header("location: ../../assets/pages/signIn.php");
        exit;
    }

?>