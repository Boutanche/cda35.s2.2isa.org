<!-- Register Section Begin -->

<form id="contact-form" action="./index.php?page=authentifier" method="post" class="register-form">
    <input type="hidden" name="formulaire" value="register" />
    <p>La cotisation est de septembre à août</p>
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="form-box user-icon mb-30">
                <input type="text" id="firstname" name="prenom" value="" placeholder="test Prenom" />
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div  class="form-box mb-30">
            <input type="text" id="name" name="nom" value="" placeholder="test Nom" />
            </div>
        </div>
        <div class="col-lg-6">
            <div  class="form-box mb-30">
            <input type="date" id="birth" name="dnaiss" value="" placeholder="1980-01-22"/>
            </div>
        </div>
        <div class="col-lg-6">
            <div  class="form-box mb-30">
            <input type="text" id="adress" name="adresse1" value="" placeholder="test Adresse"/>
            </div>
        </div>
        <div class="col-lg-6">
            <div  class="form-box mb-30">
            <input type="text" id="zip" name="cdpost" value="" placeholder="Test cp"/>
            </div>
        </div>
        <div class="col-lg-6">
            <div  class="form-box mb-30">
            <input type="text" id="city" name="ville" value="" placeholder="test ville"/>
            </div>
        </div>
        <div class="col-lg-6">
            <div  class="form-box mb-30">
                <input type="email" id="email" name="email" value="" placeholder="test@test.com"/>
            </div>
        </div>
        <div class="col-lg-6">
            <div  class="form-box mb-30">
                <input type="text" id="mobile" name="tel" value="" required placeholder="test tel"/>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="submit-info">
            <button class="btn" type="submit">Soumettre</button>
        </div>
    </div>
</form>

<!-- Register Section End -->