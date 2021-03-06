<?php include './include/mcmp/module/breadcrumb.php'; ?>
<section class="contact-form-main" id="admin_form">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-7 col-lg-7">
                <div class="form-wrapper">
                    <!--Section Tittle  -->
                    <div class="form-tittle" id="form_title">
                        <div class="row ">
                            <div class="col-lg-11 col-md-10 col-sm-10">
                                <div class="section-tittle">
                                    <span>Formulaire ajouter un membre</span>
                                    <h2>Création d'un nouveau membre</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Section Tittle  -->
                    <form id="contact-form" action="#" method="POST">
                        <input type="hidden" name="formulaire" value="add_member"/>
                        <fieldset>
                            <legend>Formulaire Numéro 1 :</legend>
                            <div class="row">
                                <!-- Nom + Prénom-->
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box user-icon mb-30">
                                        <input type="text" id="formMember_name" name="nom" value="" placeholder="Nom" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box email-icon mb-30">
                                        <input type="text" id="formMember_firstname" name="prenom" value="" placeholder="Prénom" />
                                    </div>
                                </div>
                                <!-- Login + Role -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box email-icon mb-30">
                                        <input type="text" id="formMember_login" name="login" value="" placeholder="Pseudo" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="select-itms">
                                        <select name="select" id="select2">
                                            <?php include './include/mcmp/module/selectRoleDynamique.php'?>
                                        </select>
                                    </div>
                                </div>
                                <!-- Password -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box email-icon mb-30">
                                        <input type="text" id="formMember_password" name="user_password" value="" placeholder="Password"/>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box email-icon mb-30">
                                        <input type="password" id="formMember_confirm" name="confirm_password" value="" placeholder="Confirm Password"/>
                                    </div>
                                </div>
                                <!-- Date de naissance -->
                                <div class="col-lg-6">
                                    <div  class="form-box datepicker mb-30">
                                        <label for="formMember_birth">Date de Naissance :</label>
                                        <input type="date" id="formMember_birth" name="dnaiss" value="" placeholder="1980-01-22"/>
                                    </div>
                                </div>
                                <!-- Date d'adhesion -->
                                <div class="col-lg-6">
                                    <div  class="form-box datepicker mb-30">
                                        <label>Date d'adhésion : </label>
                                        <input type="date" id="formMember_dadhesion" name="dadhesion" value="" placeholder="1980-01-22"/>
                                    </div>
                                </div>
                                <!-- Adresse -->
                                <div class="col-lg-6">
                                    <div  class="form-box mb-30">
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
                                    <div class="submit-info">
                                        <button class="btn" type="submit">Créer</button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div  class="form-box">
                                        <p><?php echo $messageAdmin_FormMember; ?></p>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact left Img-->
    <div class="from-left d-none d-lg-block" id="img_form">
        <img src="./img/galerie/contact_form.png" alt="Les membres du MC">
    </div>
</section>
