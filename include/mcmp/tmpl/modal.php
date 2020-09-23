<div class="col-xl-6 col-lg-6 col-md-6">
    <div class="section-tittle text-center mb-100">
        <div class="row">
            <div class="col-2" id="modifier_news">
                <a id="link_modify:" onclick="$dialog.show()" href="#" class="btn wantToWork-btn f-right" data-id="<?php echo $thisNews['IdArticle'];?>">Modifier</a>
            </div>
        </div>
        <dialog id="mydialog">
            <div class="col-12">
                <!--Section Tittle  -->
                <div class="form-tittle">
                    <div class="row ">
                        <div class="col-lg-11 col-md-10 col-sm-10">
                            <div class="section-tittle">
                                <span>Modifier cette nouvelle</span>
                                <h2>Formulaire</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Section Tittle  -->
                <form id="modify_news" action="page-info-<?php echo $thisNews['IdArticle'];?>" method="post">
                    <input type="hidden" name="formulaire" value="mod_article"/>
                    <input type="hidden" name="IdArticle" value="<?php echo $thisNews['IdArticle'];?>">
                    <div class="row">
                        <fieldset>
                            <div class="col-12">
                                <div class="form-box user-icon mb-30">
                                    <label for="md_title" class="label_log">Modifier le titre</label>
                                    <input type="text" name="md_title" placeholder="<?php echo $thisNews['Titre']?>" value="<?php echo $thisNews['Titre']?>">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-box user-icon mb-30">
                                    <label for="md_description" class="label_log">Modifier la description</label>
                                    <input type="text" name="md_description" placeholder="<?php echo $thisNews['Description']?>" value="<?php echo $thisNews['Description']?>">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-box user-icon mb-30">
                                    <label for="md_detail" class="label_log">Modifier le texte</label>
                                    <textarea name="md_detail" placeholder="<?php echo $thisNews['Detail']?>"><?php echo $thisNews['Detail']?></textarea>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="col-12">
                                <!-- Je voulais faire une zone de glissé déposer dans cette partie : -->
                                <!--
                                <img src="image.jpg" id="depart" draggable="true"/>
                                <br/>
                                <div id="arrivee"></div>
                                -->
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="form-box mb-30">
                                                <label>Nom de l'image : </label>
                                                <input type="text" name="name_img_article" placeholder="Nom du Fichier">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div  class="form-box mb-30">
                                                <label>Téléverser une image : </label>
                                                <input type="file" name="news_img_article" id="this_img" placeholder="Votre image"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                            <!-- TODO : BUG affichage de la modale "OK" ne fonctionne pas-->
                            <!-- Attention les messages sont bien envoyés ... -->
                            <div class="row" id="md_article">
                                <div class="col-8">
                                    <div class="submit-info">
                                        <button class="btn" type="submit">
                                            Modif News
                                        </button>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="boutons">
                                        <a id="modif_news" class="btn wantToWork-btn f-left" onclick="$dialog.close()">Fermer</a>
                                    </div>
                                </div>
                            </div>
                    </div>

                </form>
            </div>
        </dialog>
    </div>
</div>
<script>
    var $dialog = document.getElementById('mydialog');
    if(!('show' in $dialog)){
        document.getElementById('promptCompat').className = 'no_dialog';
    }
    $dialog.addEventListener('close', function() {
        console.log('Fermeture. ', this.returnValue);
    });
</script>
