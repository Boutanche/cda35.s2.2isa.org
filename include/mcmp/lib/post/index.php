<?php
if(!empty($_POST)) {
    if (isset($_POST['formulaire'])) {
        //Gestion Sécurité By Pass :
        include('./include/mcmp/module/secu_bypass.php');
        if ($_POST['formulaire'] == 'add_member') {
            include './include/mcmp/lib/post/mcmp_formMember.php';
        } elseif ($_POST['formulaire'] == 'login_mcmp') {
            include './include/mcmp/lib/post/mcmp_login.php';
        } elseif ($_POST['formulaire'] == 'mod_article'){
            include './include/mcmp/lib/post/md-news.php';
        }
    }
    elseif (!empty($_POST['name_img']) && !empty($_FILES['news_img'])){
        include './include/mcmp/lib/post/upload_img.php';
    }
}
