<ul id = "navigation" class="main-menu">
    <?php
    include('./include/mcmp/lib/session_destroy.php');
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
<!-- BUG -->
<!-- TODO : BUGFIX : Modal "login_mod" ne s'affiche pas en affichage mobil -->
<div id="login_mod">
    <div class="col-12 modal-content" id="myModal">
        <form class="hero-form" action="./index.php" method="post">
            <p><span class="close">&times;</span></p>
            <fieldset id="field_log">
                <legend id="form_log">Formulaire de connexion</legend>
                <input type="hidden" name="formulaire" value="login_mcmp"/>
                <div class="row_login">
                    <div class="col-6">
                        <label for="login" class="label_log">Votre Pseudo :</label>
                    </div>
                    <div class="col-6">
                        <input type="text" id="login" name="login_Log" placeholder="Login" required autofocus>
                    </div>
                </div>
                <div class="row_login">
                    <div class="col-6">
                        <label for="password" class="label_log">Votre mot de passe :</label>
                    </div>
                    <div class="col-6">
                        <input type="password" id="password" name="password_Log" placeholder="Password" required>
                    </div>
                </div>
                <p class="p_log"><?php echo $message_log;?></p>
                <p class="p_log">Si vous n'êtes pas membre MCMP :</p>
                <p class="p_log">vous inscrire en Prospect <a class="lien" href="#">: ICI :</a></p>
                <button class="btn" id="btn_log">Se connecter</button>
            </fieldset>
        </form>
    </div>
</div>
<!-- BUG -->
