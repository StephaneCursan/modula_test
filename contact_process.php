<?php

    $active_page = "contact";

    include("head.php");

    include("header.php");

    include("breadcrumb.php");

    include("menu.php");

?>

<main class="container mt-5 pt-5 px-5"> 

    <section class="row">

        <div class="col-lg-6 offset-lg-3 mb-5 p-5 contactForm">

            <?php

                /* Form error handling */

                function isEmail($email) {
                    return filter_var($email, FILTER_VALIDATE_EMAIL);
                }

                if ($_POST) {

                    /* conversion of special characters to HTML entities */
                    /* to eliminate SQL and XSS injection attacks */
                    
                    $name = htmlspecialchars(addslashes($_POST['name']));
                    $firstname = htmlspecialchars(addslashes($_POST['firstname']));
                    $email = htmlspecialchars(addslashes($_POST['email']));
                    $message = htmlspecialchars(addslashes($_POST['message']));
                    $captcha = htmlspecialchars(addslashes($_POST['captcha']));

                    /*** Display messages ***/

                    /* Honeypot : an invisible field can only be filled in by a robot */
                    
                    if ($captcha != '') {
                        $alertClass = "contactWarning";
                        $alert = "SPAM détecté !";
                    }

                    if ($name != '' && $firstname != '' && isEmail($email) && $message != '' && $captcha == '') {
                        $alertClass = "contactSuccess";
                        $alert = "Votre message a été envoyé avec succès";
                    }

                    echo "<div class='mx-0 mb-5 px-5 text-center ".$alertClass."'>".$alert."</div>";

                    /* Validation form button */

                    echo "<div class='alert_backContact d-flex m-auto'>";
                    echo "<a href='contact.php' class='m-auto'>Retour</a>";
                    echo "</div>";

                }

                /* Data transmission to the database */

                $server = "localhost";
                $db = "modula_test";
                $user = "root";
                $pwd = "root";

                $ip = $_SERVER['REMOTE_ADDR'];
                $name = $_POST['name'];
                $firstname = $_POST['firstname'];
                $email = $_POST['email'];
                $message = $_POST['message'];
                $captcha = $_POST['captcha'];

                /* Error handling before data transmission (try and catch) */

                try {

                    /* Database connection */

                    $dbco = new PDO("mysql:host=$server;dbname=$db", $user, $pwd);
                    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    /* Prepared statement : add records to the "emails" table :
                    /* date and hour of the message was sent, and the name, firstname, electronic address of the sender
                    /* and his message */

                    $req = $dbco->prepare("
                        INSERT INTO
                            emails
                            (mailing_date, mailing_time, ip, name, firstname, email, message)
                        VALUES
                            (NOW(), NOW(), :ip, :name, :firstname, :email, :message)
                    ");

                    /* Linking query parameters to a specific variable */

                    $req->bindParam('ip', $ip);
                    $req->bindParam('name', $name);
                    $req->bindParam('firstname', $firstname);
                    $req->bindParam('email', $email);
                    $req->bindParam('message', $message);

                    /* The query is executed */

                    $req->execute();

                    /* Release the server connection */

                    $req->closeCursor();

                    /* ... */

                    /*unset($dbco);*/

                } catch (PDOException $e) {

                    echo "Impossible de traiter les données. Erreur : " . $e->getMessage();

                }

            ?>

        </div>

    </section>

</main>

<?php include("footer.php"); ?>