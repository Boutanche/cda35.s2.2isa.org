<?php
//Gestion Sécurité By Pass :
include ('./include/mcmp/module/secu_bypass.php');
?>
<main>
    <?php if(isset($_GET['id']) && !empty($_GET['id'])){
        include './include/mcmp/tmpl/team.php';
    }
    else{
        include './include/mcmp/tmpl/team_all.php';
    }
    ?>
</main>