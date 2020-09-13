<div class="container">
    <div class="col-lg-12" id="Form_add_member">
        <form class="contact-form" action="./page-admin" method="post">
            <fieldset>
                <legend>Formulaire Numéro 1 :</legend>
                <input type="hidden" name="formulaire" value="add_member"/>
                <p class="TitleForm">Ajouter un membre</p>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-box user-icon mb-30">
                            <input type="text" id="formMember_name" name="nom" value="" placeholder="Nom" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div  class="form-box mb-30">
                            <input type="text" id="formMember_firstname" name="prenom" value="" placeholder="Prénom" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div  class="form-box mb-30">
                            <input type="text" id="formMember_login" name="login" value="" placeholder="Pseudo" />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div  class="form-box mb-30">
                            <input type="text" id="formMember_password" name="user_password" value="" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div  class="form-box mb-30">
                            <input type="password" id="formMember_confirm" name="confirm_password" value="" placeholder="Confirm Password"/>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div  class="form-box mb-30">
                            <select id="formMember_role" name="role">
                                <?php include './include/page/module/selectRoleDynamique.php'?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div  class="form-box mb-30">
                            <label for="formMember_birth">Date de Naissance :</label>
                            <input type="date" id="formMember_birth" name="dnaiss" value="" placeholder="1980-01-22"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div  class="form-box mb-30">
                            <label for="formMember_adress">Adresse :</label>
                            <input type="text" id="formMember_adress" name="adresse1" value="" placeholder="Adresse"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div  class="form-box mb-30">
                            <input type="text" id="formMember_zip" name="cdpost" value="" placeholder="Cp"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div  class="form-box mb-30">
                            <input type="text" id="formMember_city" name="ville" value="" placeholder="Ville"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div  class="form-box mb-30">
                            <label for="formMember_email">E-mail : </label>
                            <input type="email" id="formMember_email" name="email" value="" placeholder="Test.test@test.com"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div  class="form-box mb-30">
                            <label for="formMember_mobile">Téléphone :</label>
                            <input type="number" id="formMember_mobile" name="tel" value="" required placeholder="00 00 00 00 00"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div  class="form-box mb-30">
                            <label>Date d'adhésion : </label>
                            <input type="date" id="formMember_dadhesion" name="dadhesion" value="" placeholder="1980-01-22"/>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div  class="form-box">
                        <p><?php echo $messageAdmin_FormMember; ?></p>
                </div>
                <div class="col-lg-12">
                    <div class="submit-info">
                        <button class="btn-toolbar" type="submit">Soumettre</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>