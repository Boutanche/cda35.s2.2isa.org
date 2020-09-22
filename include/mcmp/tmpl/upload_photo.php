
<section class="wantToWork-area w-padding">
    <div class="container">
        <div class="col-12">
            <div class="section-tittle text-center mb-100">
                    <a id="link_modify:" onclick="$dialog.show()" class="btn wantToWork-btn f-right">Add Photo</a>
                <dialog id="photo_dialog">
                    <div class="col-10">
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
                        <!-- START : Formulaire : Poster une photo sous un article : -->
                        <form class="form-contact comment_form" action="./index.php?page=galerie" id="Post_Img_Form" enctype="multipart/form-data" method="post">
                            <input type="hidden" name="post_img" value="add_img"/>
                            <input type="hidden" name="news_id" value="" id="newsfrId"/>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="form-box mb-30">
                                            <input type="text" name="name_img" placeholder="Nom du Fichier">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div  class="form-box mb-30">
                                            <label>Téléverser une image : </label>
                                            <input type="file" name="news_img" id="this_img" placeholder="Votre image"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Poster une Photo</button>
                                </div>
                                <div class="col-2">
                                    <div class="boutons">
                                        <a id="modif_news" class="btn wantToWork-btn f-left" onclick="$dialog.close()">Fermer</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- END : Formulaire : Poster une Photo sous un article -->
                        </div>
                    </div>
                </form>
            </div>
        </dialog>
    </div>
</div>
<script>
    //TODO ? DEPLACE ça :
    var $dialog = document.getElementById('photo_dialog');
    if(!('show' in $dialog)){
        document.getElementById('promptCompat').className = 'no_dialog';
    }
    $dialog.addEventListener('close', function() {
        console.log('Fermeture. ', this.returnValue);
    });
</script>
</section>