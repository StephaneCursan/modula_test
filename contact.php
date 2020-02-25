<?php

    $active_page = "contact";

    include("head.php");

    include("header.php");

    include("breadcrumb.php");

    include("menu.php");

?>

<main class="container mt-5 pt-5 px-5">

    <section class="mb-5 p-5 contactForm">

        <div class="row">

            <div class="col-lg text-center">

                <h2 class="font-weight-bold text-uppercase">pour nous contacter</h2>

            </div>

        </div>

        <form action="contact_process.php" id="contact" method="post" class="p-5">

            <p><em>Merci de renseigner tous les champs.</em></p>

            <!-- Input fields -->

            <div class="row mb-3 mx-0">

                <div class="col-lg-6 pr-lg-3 pr-sm-0 pl-0 d-flex flex-column">

                    <label class="contactForm_label" for="name">Nom</label>
                    <input class="pr-0 pl-3 contactForm_textInput" type="text" id="name" name="name" placeholder="Nom" required>

                </div>

                <div class="col-lg-6 pt-lg-0 pt-sm-3 pr-0 pl-lg-3 pl-sm-0 d-flex flex-column">

                    <label class="contactForm_label" for="firstname">Prénom</label>
                    <input class="pr-0 pl-3 contactForm_textInput" type="text" id="firstname" name="firstname" placeholder="Prénom" required>

                </div>

            </div>

            <div class="row mb-3 mx-0">

                <label class="contactForm_label" for="email">Adresse électronique</label>
                <input class="pr-0 pl-3 contactForm_textInput" type="text" id="email" name="email" placeholder="Adresse électronique" required>

            </div>

            <div class="row mb-3 mx-0">

                <label class="contactForm_label" for="message">Message</label>
                <textarea class="contactForm_textarea" name="message" id="message" cols="30" rows="10" required></textarea>

            </div>

            <div class="row mb-3 mx-0 pt-2 d-flex flex-column">

                <input class="contactForm_checkbox" type="checkbox" id="RGPD_check" name="RGPD_check" value="RGPD_check" required>
                <label class="contactForm_chkboxLabel" for="RGPD_check">En cochant cette case et en soumettant ce formulaire, j'accepte que 
                mes données personnelles soient utilisées pour me recontacter dans le cadre de ma demande indiquée dans ce formulaire.
                Aucun autre traitement ne sera effectué avec mes informations.</label>

            </div>

            <!-- The following field is for robots only, invisible to humans -->

            <div class="row mx-0">

                <label class="contactForm_captcha mb-0" for="captcha">Veuillez laisser ce champ vide</label>
                <input class="contactForm_captcha" type="text" id="captcha" name="captcha">

            </div>

            <!-- Validation form button -->

            <div class="text-right">

                <input class="btn" type="submit" id="submit" value="Envoyer">

            </div>

        </form>

    </section>

</main>

<?php include("footer.php"); ?>