<?php include './include/mcmp/module/breadcrumb.php'; ?>
    <section class="wantToWork-area w-padding">
        <div class="container">
            <div class="row align-items-end justify-content-between">
                <div class="col-lg-6 col-md-9 col-sm-9">
                    <div class="section-tittle">
                        <span>Page réservée aux adhérents :</span>
                        <h2>Les plus excpérimentés à votre service</h2>
                    </div>
                </div>
                <?php
                if ($user_level >= 1){ ?>
                <div class="col-xl-2 col-lg-2 col-md-3">
                    <div id="content">
                        <p>
                            <label for="recherche">Rechercher un membre : </label>
                            <input type="text" name="recherche" id="recherche"
                        </p>
                        <div id="">
                        </div>
                        <div id="result_recherche">
                            ICI LES RESULTATS :
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>
    <!-- Want To work End -->
    <!--? Team Ara Start -->
    <div class="team-area pb-150">
        <div class="container">
            <div class="row">
                <?php
                include ('./include/mcmp/lib/request/update_members.php');
                include ('./include/mcmp/lib/request/select_role.php');
                if ($user_level >= 1){
                    foreach ($ar_adherent as $key => $tb_adherent) {?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="https://via.placeholder.com/361x522" alt="<?php echo $tb_adherent['Nom'];?>">
                                <div class="team-caption">
                                    <span>
                                        <?php
                                        foreach ($ar_role as $key => $tb_role){
                                            if ($tb_role['IdRole'] == $tb_adherent['IdRole']){
                                                echo $tb_role['DesignRole'];
                                            }
                                        }?>
                                    </span>
                                    <h3><a href="page-membres-<?php echo $tb_adherent['IdAdherent'];?>"><?php echo $tb_adherent['Nom'];?></a></h3>
                                    <!-- Blog Social -->
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <?php if ($user_level == 2){echo ('
                                            <li><a href="#" <!--class="infobulle"--><i class="fa fa-bomb"></i><!--<span>Supprimer ce membre</span>--></a></li>
                                            ');}?>
                                        </ul>
                                    </div>
                                    <div>
                                        <?php if ($tb_adherent['IdAdherent'] == $idConnected ) { ?>
                                            <div class='tags'>
                                                <button class='btn btn_team' data-id='<?php echo $tb_adherent['IdAdherent'];?>'>Modifier mon profil</button>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }}?>
            </div>
        </div>
    </div>
