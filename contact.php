<!DOCTYPE html>

<html lang="fr">

    <head>

        <!-- Character encoding for the HTML document -->
        <meta charset="UTF-8">
        <!-- Gives the browser instructions on how to control the page's dimensions and scaling -->
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0">
        <!-- Defines which Internet Explorer version the webpage should be rendered as -->
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Title of the webpage -->
        <title>L'AAGEF-FFI | Les Résistants espagnols en Gironde 1939-1945</title>

        <!-- Favicon management -->
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Main CSS -->
        <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>

    <body>

        <header>

            <nav>

                <ul>

                    <li>
                        <a href="index.php">Accueil</a>
                    </li>

                    <li>
                        <p>Contact</p>
                    </li>

                </ul>

            </nav>

        </header>

        <main>

            <div class="form-bottom contact-form"></div>

                <form action="contact.php" id="contact" method="post">

                    <div>

                        <div>

                            <?php

                                function isEmail($email) {
                                    return filter_var($email, FILTER_VALIDATE_EMAIL);
                                }

                                if ($_POST) {
                                    
                                    $name = htmlspecialchars(addslashes($_POST['name']));
                                    $firstname = htmlspecialchars(addslashes($_POST['firstname']));
                                    $email = htmlspecialchars(addslashes($_POST['email']));
                                    $message = htmlspecialchars(addslashes($_POST['message']));
                                    $captcha = htmlspecialchars(addslashes($_POST['captcha']));

                                    $array = array('nameForm' => '', 'firstnameForm' => '', 'emailForm' => '', 'messageForm' => '', 'captchaForm' => '');

                                    if ($name == '') {
                                        $array['nameForm'] = 'Veuillez saisir votre nom';
                                    }
                                    if ($firstname == '') {
                                        $array['firstnameForm'] = 'Veuillez saisir votre prénom';
                                    }
                                    if (!isEmail($email)) {
                                        $array['emailForm'] = 'L\'adresse électronique est invalide';
                                    }
                                    if ($message == '') {
                                        $array['messageForm'] = 'Veuillez rédiger votre message';
                                    }
                                    if ($captcha != '') {
                                        $array['captchaForm'] = 'SPAM détecté';
                                    }
                                    if ($name != '' && $firstname != '' && isEmail($email) && $message != '' && $captcha == '') {
                                        echo "<script type='text/javascript'>" . "alert('Votre message a été envoyé avec succès');" . "</script>";
                                    }

                                    // echo json_encode($array);

                                }

                            ?>

                        </div>

                        <p>Merci de renseigner tous les champs.</p>

                        <!-- Input fields -->
                        <div>

                            <div class="form-group">

                                <label class="sr-only" for="name">Nom</label>
                                <input class="contact-name form-control" type="text" id="name" name="name" placeholder="Nom">

                            </div>

                            <div class="form-group">

                                <label class="sr-only" for="firstname">Prénom</label>
                                <input class="contact-firstname form-control" type="text" id="firstname" name="firstname" placeholder="Prénom">

                            </div>

                        </div>

                        <div class="form-group">

                            <label class="sr-only" for="email">Adresse électronique</label>
                            <input class="contact-email form-control" type="text" id="email" name="email" placeholder="Adresse électronique">

                        </div>

                        <div class="form-group">

                            <label class="sr-only" for="message">Message</label>
                            <textarea class="contact-message form-control" name="message" id="message" cols="30" rows="10"></textarea>

                        </div>

                        <div class="form-group">

                            <input type="checkbox" id="RGPD_Accept" name="RGPD_Accept" value="RGPD_Accept" required>
                            <label for="RGPD_Accept">J'accepte les RGPD</label>

                        </div>

                        <!-- The following field is for robots only, invisible to humans -->

                        <div class="form-group">

                            <label class="contact-captcha" for="captcha">Veuillez laisser ce champ vide</label>
                            <input class="contact-captcha form-control" type="text" id="captcha" name="captcha">

                        </div>

                        <div>

                            <input class="btn" type="submit" id="submit" value="Envoyer">

                        </div>

                    </div>

                </form>

            </div>

        </main>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
                integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <!-- ... -->

        <script src="js/contact.js"></script>

    </body>

</html>