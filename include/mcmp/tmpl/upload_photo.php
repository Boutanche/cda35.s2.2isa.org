<section class="wantToWork-area w-padding">
    <div class="container">
        <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="section-tittle text-center mb-100">
                    <a id="link_modify:" onclick="$dialog.show()" class="btn wantToWork-btn f-right">Add Photo</a>
                <dialog id="photo_dialog">
                    <div class="col-12">
                        <!--Section Tittle  -->
                        <div class="form-tittle">
                            <div class="row ">
                                <div class="col-lg-11 col-md-10 col-sm-10">
                                    <div class="section-tittle">
                                        <span>Ajouter une photo</span>
                                        <h2>Formulaire</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Section Tittle  -->
                        <form id="modify_news" action="#">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-box user-icon mb-30">
                                        <input type="text" name="addPhoto_Title" placeholder="Titre de la Photo">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-box user-icon mb-30">
                                        <input type="text" name="md_description" placeholder="Modifier la description">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-box user-icon mb-30">
                                        <textarea name="md_detail" placeholder="Modifier le texte"></textarea>
                                    </div>
                                </div>
                                <!-- TODO : BUG affichage de la modale "OK" ne fonctionne pas-->
                                <!-- Attention les messages sont bien envoyés ... -->
                                <div class="row" id="md_article">
                                    <div class="col-8">
                                        <div class="submit-info">
                                            <button class="btn">
                                                <a href="" class="primary-btn signup-btn">Modif News</a>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="boutons">
                                            <button id="modif_news" class="btn wantToWork-btn f-left" onclick="$dialog.close()">Fermer</button>
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
            var $dialog = document.getElementById('photo_dialog');
            if(!('show' in $dialog)){
                document.getElementById('promptCompat').className = 'no_dialog';
            }
            $dialog.addEventListener('close', function() {
                console.log('Fermeture. ', this.returnValue);
            });
        </script>
    </div>
</section>