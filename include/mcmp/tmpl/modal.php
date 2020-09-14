<div class="col-1">
    <a id="link_modify" onclick="$dialog.show()" href="#" class="btn wantToWork-btn f-right" data-id="<?php echo $thisNews['IdArticle'];?>">Modifier</a>
</div>
<div class="col-4">
    <dialog id="mydialog">
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
        <form id="modify_news" action="#">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="form-box user-icon mb-30">
                        <input type="text" name="name" placeholder="Your name">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="form-box user-icon mb-30">
                        <input type="text" name="email" placeholder="Your email">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="form-box user-icon mb-30">
                        <textarea name="message" placeholder="Your messages"></textarea>
                    </div>
                </div>
                <!-- TODO : BUG affichage de la modale "OK" ne fonctionne pas-->
                <!-- Attention les messages sont bien envoyés ... -->
                <div class="row" id="sendmail">
                    <div class="col-lg-6 col-md-6">
                        <div class="submit-info">
                            <button class="btn">
                                <a href="" class="primary-btn signup-btn">Message</a>
                            </button>
                            <p id="#maTraceModalito">Attention</p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="boutons">
            <a class="btn wantToWork-btn f-left" onclick="$dialog.close()">Fermer</a>
        </div>
    </dialog>
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
<!--
<div id="my-modalito" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><?php //echo $message_modal; ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="primary-btn membership-btn" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
-->