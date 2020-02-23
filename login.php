<?php

    include("head.php");

    include("header.php");

?>

<main class="container mt-5 pt-5 px-5">

    <section class="mb-5 p-5 loginForm">

        <!-- Login form -->

        <div class="row">

            <div class="col-lg text-center">

                <h2 class="font-weight-bold text-uppercase formTitle">identifiez-vous</h2>

            </div>

        </div>

        <form action="login_process.php" id="login" method="post" class="p-5">

            <!-- Input fields -->

            <div class="row mb-3 mx-0">

                <div class="col-lg-6 offset-lg-3">

                    <label class="loginForm_label" for="username">Identifiant</label>
                    <input class="pr-0 pl-3 loginForm_textInput" type="text" id="username" name="username" placeholder="Identifiant" required>

                </div>

            </div>

            <div class="row mb-2 mx-0">

                <div class="col-lg-6 offset-lg-3">

                    <label class="loginForm_label" for="password">Mot de passe</label>
                    <input class="pr-0 pl-3 loginForm_textInput" type="password" id="password" name="password" placeholder="Mot de passe" required>

                </div>

            </div>

            <!-- Validation form button -->

            <div class="row mb-4 mx-0">

                <div class="col-lg-6 offset-lg-3 text-right">

                    <input class="btn" type="submit" id='submit' value='Se connecter'>

                </div>

            </div>

            <?php

                /* Errors handling */

                if (isset($_GET['erreur'])){

                    $err = $_GET['erreur'];

                    if ($err==1 || $err==2) {

                        echo "<div class='row mx-0'>";
                        echo "<div class='col-lg-6 offset-lg-3'>";
                        echo "<p class='loginForm_alert'>L'identifiant ou le mot de passe est incorrect</p>";
                        echo "</div>";
                        echo "</div>";

                    }
                }

            ?>

        </form>

    </section>

</main>

<?php include("footer.php"); ?>