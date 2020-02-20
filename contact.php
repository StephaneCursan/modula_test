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

            <form action="process.php" id="contact" method="post">

                <div>

                    <p>Merci de renseigner tous les champs.</p>

                    <div>

                        <div>

                            <label for="name">Nom</label>
                            <input type="text" id="name" name="name" placeholder="Nom">

                        </div>

                        <div>

                            <label for="firstname">Prénom</label>
                            <input type="text" id="firstname" name="firstname" placeholder="Prénom">

                        </div>

                    </div>

                    <div>

                        <label for="email">Adresse électronique</label>
                        <input type="text" id="email" name="email" placeholder="Adresse électronique">

                    </div>

                    <div>

                        <label for="message">Message</label>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>

                    </div>

                    <div>

                        <input type="checkbox" id="RGPD_Accept" name="RGPD_Accept" value="RGPD_Accept">
                        <label for="RGPD_Accept">J'accepte les RGPD</label>

                    </div>

                    <div>

                        <button type="submit">Envoyer</button>

                    </div>

                </div>

            </form>

        </main>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
                integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>

</html>