<?php include './include/mcmp/module/breadcrumb.php'; ?>
<?php
$thisAdherent = array();
$post_ThisAdherent = $bdd->prepare('SELECT * FROM mcmp_adherent where Idadherent = :idAdherent');
$post_ThisAdherent->bindValue(':idAdherent', $_GET['id']);
$post_ThisAdherent->execute();
$thisAdherent = $post_ThisAdherent->fetch();
?>
<section class="wantToWork-area w-padding">
    <div class="container">
        <div class="row align-items-end justify-content-between">
            <div class="col-lg-6 col-md-9 col-sm-9">
                <div class="section-tittle">
                    <span>Numéro d'Adhérent : <?php echo $thisAdherent['IdAdherent']?></span>
                    <h2>Pseudo : <?php echo $thisAdherent['Login']?></h2>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3">
                <a href="#" class="btn wantToWork-btn f-right">Modifier</a>
            </div>
        </div>
    </div>
</section>
<!-- Want To work End -->
<!--? Team Ara Start -->
<div class="team-area pb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-team mb-30">
                    <div class="team-img">
                        <img src="https://via.placeholder.com/361x522" alt="<?php echo $thisAdherent['Nom'];?>">
                        <div class="team-caption">
                            <span>Role : <?php echo $thisAdherent['IdRole'];?></span>
                            <h3><?php echo $thisAdherent['Nom'];?></h3>
                            <p3><?php echo $thisAdherent['Prenom'];?></p3>
                            <!-- Blog Social -->
                            <div class="team-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Ara End -->

