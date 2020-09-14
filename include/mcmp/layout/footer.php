        <footer>
            <div class="footer-area section-bg" data-background="./img/galerie/section_bg03.png">
                <div class="container">
                    <div class="footer-top footer-padding">
                        <!-- Footer Menu -->
                        <div class="row d-flex justify-content-between">
                            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>MCMP Administration :</h4>
                                        <ul>
                                            <?php if ($user_level == 2){echo ('
                                            <li><a href="./page-admin">Gestion</a></li>
                                            ');}?>
                                            <li><a href="./index.php"><?php echo $message_log; ?></a></li>
                                            <li><a href="./index.php">Inscription Prospect</a></li>
                                            <li><a href="#">A propos de nous</a></li>
                                            <li><a href="#">Organisation</a></li>
                                            <li><a href="#">Blog & Articles</a></li>
                                            <li><a href="#">RGPD</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>HORAIRE</h4>
                                        <ul>
                                            <li><a href="#">Lundi : 12h_14h</a></li>
                                            <li><a href="#">Mardi // Vendredi : 16h_20h</a></li>
                                            <li><a href="#">Samedi : 10h_18h</a></li>
                                            <li><a href="#">Nous contacter</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>LE CLUB</h4>
                                        <ul>
                                            <li><a href="./index.php?page=chapitre">Le Chapitre</a></li>
                                            <li><a href="#">Le Garage</a></li>
                                            <li><a href="#">Le Bar</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">
                                <div class="single-footer-caption mb-50">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="./index.php"><img src="./img/logo/logo2_footer.png" alt="Logo MCMP"></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p class="info1">Moto Club Millau Passion est une association loi 1901.</p>
                                            <p class="info1">Club de sport : 95 rue Molière, 12100 Millau</p>
                                        </div>
                                    </div>
                                    <!-- Footer Social -->
                                    <div class="footer-social ">
                                        <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Bottom -->
                    <div class="footer-bottom">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-12">
                                <div class="footer-copy-right text-center">
                                    <!-- Link back to Colorlib can not be removed. Template is licensed under CC BY 3.0. -->
                                    <p>
                                        Template Bootstrap : Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                    </p>
                                </div>
                                <div class="footer-copy-right text-center">
                                    <p>
                                        Conception et Développement :Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This web-site is made with <i class="fa fa-anchor" aria-hidden="true"></i> by <a href="https://bbinformatique.fr" target="_blank">BiBi Informatique // Benoit CDA03</a>
                                    </p>
                                </div>
                                <div class="footer-copy-right text-center">
                                    <p>Pour ce site, nous avons utilisé les personnages et des images tirés de la série : Sons Of Anarchy.</p>
                                    <p>
                                        SOA : Copyright &copy; 2014 FX Networks, LLC All Rights Reserved  | This web-site is made with <i class="fa fa-ambulance" aria-hidden="true"></i> by <a href="" target="_blank">FX Network</a>
                                    </p>
                                    <p>
                                        Sons of Anarchy est une série télévisée américaine composée de 92 épisodes d’une durée de 42 à 81 minutes.<br>
                                        Cette série a été créée par Kurt Sutter et diffusée entre le 3 septembre 2008 et le 9 décembre 2014 sur FX aux États-Unis et sur Super Channel au Canada.
                                    </p>
                                </div>
                                <div class="footer-copy-right text-center">
                                    <p>Font generated by </p>
                                    <a href="https://www.flaticon.com">flaticon.com</a>.
                                    <p>Under <a href="http://creativecommons.org/licenses/by/3.0/">CC</a>: <a data-file="009-gloves" href="http://www.freepik.com">Freepik</a>, <a data-file="004-racing-flag" href="https://www.flaticon.com/authors/phatplus">phatplus</a>, <a data-file="007-3d-sensor" href="https://www.flaticon.com/authors/eucalyp">Eucalyp</a>, <a data-file="006-bellboy" href="https://www.flaticon.com/authors/good-ware">Good Ware</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div id="back-top" >
            <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
        </div>
        <!-- Footer End-->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <!-- Jquery, UPDATE TEMPLATE de .1.12.4 A .3.5.1 -->
        <!-- TODO : Replacer ici le lien vers jquery 1.12.4.min.js -->

        <script src="./assets/js/jquery-3.5.1.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
        <script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
        <!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js"></script>
        <script src="./assets/js/jquery.sticky.js"></script>

        <!-- counter , waypoint,Hover Direction -->
        <script src="./assets/js/jquery.counterup.min.js"></script>
        <!--
        <script src="./assets/js/waypoints.min.js"></script>
        -->
        <script src="./assets/js/jquery.countdown.min.js"></script>
        <script src="./assets/js/hover-direction-snake.min.js"></script>
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Jquery Plugins, main Jquery -->
        <script src="./assets/js/plugins.js"></script>
        <!-- WYSIWYG -->
        <!--
        <script src="./vendor/Trumbowyg-master/dist/trumbowyg.min.js"></script>
        <script src="./vendor/summernote-0.8.18-dist/summernote.min.js"></script>
        -->

        <!-- Mon Js Perso update template-->
        <script src="./assets/js/main.js?v=1.<?php echo time(); ?>"></script>

    </body>
</html>
