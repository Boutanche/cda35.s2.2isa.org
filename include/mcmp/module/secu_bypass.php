<?php
if(isset($_SESSION['nom'])){
    if (isset($_COOKIE['ticket']) AND $_COOKIE['ticket'] == $_SESSION['ticket'])
    {

    }
    else
    {
        // On détruit la session
        //$_SESSION = array();
        session_destroy();
        unset($_COOKIE['ticket']);
        header('location:index.php');
    }
}