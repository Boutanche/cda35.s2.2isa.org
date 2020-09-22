<?php include './include/mcmp/module/breadcrumb.php'; ?>
<div class="gallery-area" id="gallery">
    <div class="row">
        <div class="col-10">
            <div class="container-fluid p-0 fix">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img big-img" style="background-image: url(img/galerie/gallery1.png);"></div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <a href="gallery.html"><i class="ti-arrow-top-right"></i></a>
                                    <h3>Sortie Solex</h3>
                                    <p>Le 23/05/2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="box snake mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(img/galerie/gallery2.png);"></div>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="gallery.html"><i class="ti-arrow-top-right"></i></a>
                                            <h3>Le Larzac</h3>
                                            <p>Le 12/01/2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="box snake mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(img/galerie/gallery3.png);"></div>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="gallery.html"><i class="ti-arrow-top-right"></i></a>
                                            <h3>Sortie en moto</h3>
                                            <p>Le 04/05/2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="box snake mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(img/galerie/gallery4.png);"></div>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="gallery.html"><i class="ti-arrow-top-right"></i></a>
                                            <h3>Expédition Chalusset</h3>
                                            <p>Le 19/01/2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="box snake mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(img/galerie/gallery5.png);"></div>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="gallery.html"><i class="ti-arrow-top-right"></i></a>
                                            <h3>Pic de Dante</h3>
                                            <p>Le 04/02/2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Test Galery Dynamique :-->
    <!-- Appel d'un la requête sur les images de la galerie -->
    <?php include './include/mcmp/lib/request/all_photo_galerie.php'?>
    <?php foreach ($ar_Galerie as $key => $tb_Galerie) {?>
        <!-- TODO : FINIR le foreach des photos : -->
        <!-- TODO : Gérer les extensions .img : -->
    <div class="row">
        <div class="col-10">
            <div class="container-fluid p-0 fix">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img big-img" style="background-image: url(<?php echo $tb_Galerie['Adresse'].$tb_Galerie['Titre'].'.jpg';?>);"></div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <a href="gallery.html"><i class="ti-arrow-top-right"></i></a>
                                    <h3>Sortie Solex</h3>
                                    <p>Le 23/05/2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="box snake mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(img/galerie/gallery2.png);"></div>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="gallery.html"><i class="ti-arrow-top-right"></i></a>
                                            <h3>Le Larzac</h3>
                                            <p>Le 12/01/2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="box snake mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(img/galerie/gallery3.png);"></div>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="gallery.html"><i class="ti-arrow-top-right"></i></a>
                                            <h3>Sortie en moto</h3>
                                            <p>Le 04/05/2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="box snake mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(img/galerie/gallery4.png);"></div>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="gallery.html"><i class="ti-arrow-top-right"></i></a>
                                            <h3>Expédition Chalusset</h3>
                                            <p>Le 19/01/2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="box snake mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(img/galerie/gallery5.png);"></div>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="gallery.html"><i class="ti-arrow-top-right"></i></a>
                                            <h3>Pic de Dante</h3>
                                            <p>Le 04/02/2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Galery Dynamique :-->
    </div>
    <?php }
    ?>
    <div class="row">
        <div class="col-10">
            <div class="container-fluid p-0 fix">
                <div class="row">
                    <div class="col-8">
                        <?php if($user_level >= 2){
                            include './include/mcmp/tmpl/upload_photo.php';
                        }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
