<div class="col-xl-6 col-lg-6 col-md-6">
    <div class="section-tittle text-center mb-100">
        <div class="row">
            <div class="col-2" id="modifier_news">
                <a id="link_modify:" onclick="$dialog.show()" href="#" class="btn wantToWork-btn f-right" data-id="<?php echo $thisNews['IdArticle'];?>">Modifier</a>
            </div>
        </div>
        <dialog id="mydialog">
            <!-- Je ne comprends pas ce que cette row change : "C'est Bootstrap" -->
            <div class="row ">
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
                <!-- TODO : BUG : Quand je post, il se déconnecte : modification prise en compte pourtant. -->
                <form id="modify_news" action="page-info" method="post">
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
