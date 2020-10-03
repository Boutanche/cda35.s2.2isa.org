<ul id = "navigation" class="main-menu">
    <?php
    include('./include/mcmp/lib/request/session_destroy.php');

    foreach ($ar_page as $key => $tb_page){
        if ($tb_page['KeyFile'] == $ar_page) {
            $active ='active';
        }
        else {$active ='';}
        if($tb_page['Navbar'] == 1){
            echo '<li><a  class="'.$active.'" href="page-'.$tb_page['KeyFile'].'">'.$tb_page['Menu'].'</a></li>';
        }
    }
    ?>
    <li class="header-right">
        <?php if($user_level > 0) { ?>
            <a class="dropdown-item" href="./index.php?deconnexion=1">Deconnexion <span class="flaticon-007-house"></span></a>
        <?php } else if ($user_level < 1){ ?>
            <a id="myBtn" href="#" class="hr-btn hr-btn myBtn"><i class="flaticon-002-woman"></i>Se Connecter</a>
        <?php }?>
    </li>
</ul>

