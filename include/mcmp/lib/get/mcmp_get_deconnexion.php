<?php
if(isset($_GET['deconnexion']) && $_GET['deconnexion'] == 1){
    session_destroy();
    unset($_COOKIE[ticket]);
    header("location:index.php");

}
