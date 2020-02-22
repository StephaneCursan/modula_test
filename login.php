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

        <div>
            <!-- zone de connexion -->
            
            <form action="login_process.php" method="POST">

                <h1>Connexion</h1>
                
                <div>

                    <label><b>Nom d'utilisateur</b></label>
                    <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                </div>

                <div>

                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                </div>

                <input type="submit" id='submit' value='Se connecter'>

                <?php

                    if (isset($_GET['erreur'])){

                        $err = $_GET['erreur'];

                        if ($err==1 || $err==2) {
                            echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                        }
                    }

                ?>

            </form>

        </div>

    </body>

</html>