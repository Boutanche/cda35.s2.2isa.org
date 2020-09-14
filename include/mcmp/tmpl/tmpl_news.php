<?php include './include/mcmp/module/breadcrumb.php'; ?>
<?php
$thisNews = array();
$post_ThisNews = $bdd->prepare('SELECT * FROM mcmp_article where IdArticle = :idArticle');
$post_ThisNews->bindValue(':idArticle', $_GET['id']);
$post_ThisNews->execute();
$thisNews = $post_ThisNews->fetch();
?>
<section class="home-blog-area section-padding30">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9 col-sm-10">
                <div class="section-tittle text-center mb-100">
                    <span>Actualités</span>
                    <h2><?php echo $thisNews['Titre']?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="https://via.placeholder.com/555x366" alt="<?php echo $thisNews['Titre']?>">
                            <!-- Blog date -->
                            <div class="blog-date text-center">
                                <span><?php echo $thisNews['DPubli']?></span>
                            </div>
                        </div>
                        <div class="blog-cap">
                            <span><?php echo $thisNews['Titre']?></span>
                            <h3><?php echo $thisNews['Description'] ?></h3>
                            <p><?php echo $thisNews['Detail']?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
