<section class="contact-form-main">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-7 col-lg-7">
                <div class="form-wrapper">
                    <!--Section Tittle  -->
                    <div class="form-tittle">
                        <div class="row ">
                            <div class="col-lg-11 col-md-10 col-sm-10">
                                <div class="section-tittle">
                                    <span>Formulaire de contact</span>
                                    <h2>Vous sentir libre de nous contacter</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Section Tittle  -->
                    <form id="contact-form" action="#">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-box user-icon mb-30">
                                    <input type="text" name="name" placeholder="Your name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-box user-icon mb-30">
                                    <input type="text" name="email" placeholder="Your email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-box user-icon mb-30">
                                    <textarea name="message" placeholder="Your messages"></textarea>
                                </div>
                            </div>
                            <!-- TODO : BUG affichage de la modale "OK" ne fonctionne pas-->
                            <!-- Attention les messages sont bien envoyés ... -->
                            <div class="row" id="sendmail">
                                <div class="col-lg-6 col-md-6">
                                    <div class="submit-info">
                                        <button class="btn">
                                        <a href="" class="primary-btn signup-btn">Message</a>
                                        </button>
                                        <div id="#maTraceModalito">Attention : BUG "Afficher OK!"</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact left Img-->
    <div class="from-left d-none d-lg-block">
        <img src="./img/galerie/contact_form.png" alt="Les membres du MC">
    </div>
</section>