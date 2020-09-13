<?php
if(!empty($_POST)) {
    if (isset($_POST['formulaire'])) {
        if ($_POST['formulaire'] == 'add_member') {
            include './include/mcmp/lib/post/mcmp_formMember.php';
        } elseif ($_POST['formulaire'] == 'login_mcmp') {
            include './include/mcmp/lib/post/mcmp_login.php';
        }
    }
}
