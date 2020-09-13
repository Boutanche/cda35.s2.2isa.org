<?php include './include/mcmp/module/breadcrumb.php'; ?>
<section class="home-blog-area section-padding30">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9 col-sm-10">
                <div class="section-tittle text-center mb-100">
                    <span>Actualités</span>
                    <h2>Les informations que nous avons sélectionné pour vous</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php include './include/mcmp/lib/request/all_news.php'?>
            <?php foreach ($ar_News as $key => $tb_news) {
            if ($tb_news['Code'] == 1) {?>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="./img/galerie/blog1.png" alt="Anniversaire">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span><?php echo $tb_news['DPubli'] ?></span>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <span><?php echo $tb_news['Titre'] ?></span>
                                <h3><a href="blog_details.html" data-id='<?php echo $tb_news['IdArticle'];?>'> <?php echo $tb_news['Description'] ?></a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
            }
            ?>
        </div>
    </div>
</section>
<!--
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="./img/galerie/blog2.png" alt="Jax et Tara"> -->
                            <!-- Blog date -->
<!--
                            <div class="blog-date text-center">
                                <span>12</span>
                                <p>Mai</p>
                            </div>
                        </div>
                        <div class="blog-cap">
                            <span>Mariage</span>
                            <h3><a href="blog_details.html">Jax et Tara ont l'honneur de vous annoncer leur mariage</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
-->