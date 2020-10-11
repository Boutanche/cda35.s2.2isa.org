<!-- TODO : BUGFIX : Modal "login_mod" ne s'affiche pas en affichage mobil -->
<!-- Vu que le plugin js slicknav génère un menuitem : <a id="myBtn"> n'existe plus et ne pas passer ma modale en display OK-->
<!-- Solution Rapido : créer une page connexion et retirer la connexion de la modale -->
<div id="login_mod">
    <div class="row">
        <div class="col-12 modal-content" id="myModal">
            <form class="hero-form" action="./index.php" method="post">
                <p><span class="close">&times;</span></p>
                <fieldset id="field_log">
                    <legend id="form_log">Formulaire de connexion</legend>
                    <input type="hidden" name="formulaire" value="login_mcmp"/>
                    <div class="row_login">
                        <div class="col-6">
                            <label for="login" class="label_log">Votre Pseudo :(Doc)</label>
                        </div>
                        <div class="col-6">
                            <input autofocus id="login" name="login_Log" placeholder="Login" required type="text">
                        </div>
                    </div>
                    <div class="row_login">
                        <div class="col-6">
                            <label for="password" class="label_log">Votre mot de passe :(Doc01)</label>
                        </div>
                        <div class="col-6">
                            <input id="password" name="password_Log" placeholder="Password" required type="password">
                        </div>
                    </div>
                    <p class="p_log"><?php echo $message_log;?></p>
                </fieldset>
                <fieldset>
                    <legend>Si vous n'êtes pas membre MCMP :</legend>
                    <!-- TODO : href null & SEO non-explicit value-->
                    <p class="p_log">vous inscrire en Prospect <a class="lien" href="#">: ICI :</a></p>
                </fieldset>
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <button class="btn" id="btn_log">Connexion</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>