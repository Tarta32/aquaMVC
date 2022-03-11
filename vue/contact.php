<?php

$title = "Contact";
include './vue/commun/header.php'
?>
<div class="container-fluid bg-white p-5">
    <div class="container border border-dark border-3 p-5 rounded-3">

        <div class="row">

            <div class="col-xl-8 offset-xl-2">

                <h2 class="text-center text-success"><u>CONTACT</u></h2>

                <p class="lead text-center">Si vous souhaitez nous contactez pour plus de renseignements</p>


                <form id="contact-form" method="post">

                    <div class="messages"></div>

                    <div class="controls">
                        <div class="row">
                            <div class="col-lg-6 my-1">
                                <div class="form-floating">
                                    <input id="floatingInput" type="text" name="prenom" class="form-control" placeholder="Entrez votre prénom *" required="required" data-error="Firstname is required.">
                                    <label for="floatingInput">Prénom *</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 my-1">
                                <div class="form-floating">
                                    <input id="floatingInput" type="text" name="nom" class="form-control" placeholder="Entrez votre nom *" required="required" data-error="Lastname is required.">
                                    <label for="floatingInput">Nom *</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row p1">
                            <div class="col-lg-6 my-1">
                                <div class="form-floating">
                                    <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" id="floatingInput" type="email" name="email" class="form-control" placeholder="Entrez votre e-mail *" required="required" data-error="Valid email is required.">
                                    <label for="floatingInput">Email *</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 my-1">
                                <div class="form-floating">
                                    <input id="floatingInput" type="tel" pattern="^\+?\d{3}?\d{3}?\d{3}?\d{3}$" name="phone" class="form-control" placeholder="Entrez votre numéro de telephone (optionnel)">
                                    <label for="floatingInput">Telephone</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating">
                            <textarea id="floatingInput" name="message" type='texte' style="height:100%;" class="form-control" placeholder="Votre message *" cols="30" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                            <label for="floatingInput">Message *</label>
                            <div class="help-block with-errors"></div>
                        </div>

                        <label class="remarque">Remarque</label>
                        <input class="remarque" name="remarque" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="nom@domaine.com">


                        <!-- <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                            <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                            <div class="help-block with-errors"></div>
                        </div> -->


                        <input type="submit" name="valider" class="btn btn-success btn-send m-1" value="Envoyer message">

                        <p class="text-muted">
                            <strong>*</strong> Champs obligatoires.
                        </p>

                    </div>

                </form>

            </div>
        </div>

    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<?php

include("./vue/commun/footer.php");
?>