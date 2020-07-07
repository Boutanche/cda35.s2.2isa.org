<main>
    <!--? Hero Start -->
    <div class="slider-area2">

        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center pt-70">
                            <h1 style="color: #fcf8e3">Gestion des membres</h1>
                            <h2>Cette page est réservée à l'administration du site</h2>
                            <h3><?php echo $message_modal; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="members" class="trainer-section spad">
        <div class="container">
            <div class="row">
                <div class="team-area pb-150">
                    <div class="container">
                        <div class="row">
                            <?php
                            //la requete
                            //boucle les données récupérées
                            foreach ($ar_adh_var as $idAdh =>$tb_Adh)
                            {
                                include('./include/layout/unMembre.php');
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>