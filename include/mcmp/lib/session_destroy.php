<?php
if(isset($_GET['deconnexion']) && $_GET['deconnexion'] == 1){
    session_destroy();
    header("location:index.php");
}

