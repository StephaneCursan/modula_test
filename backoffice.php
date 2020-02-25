<?php

    include("head.php");

    include("header.php");

?>

<!-- Breadcrumb management -->

<div class="row mx-0 headerBreadcrumb py-4 pl-2">

    <div class="col-lg-1 col-md-1 px-0">

        <!-- Logout session button -->

        <a class="logoutSession_button" href="backoffice.php?logout=ok">Déconnexion</a>

    </div>

    <div class="col-lg-11 col-md col-sm px-0">

        <?php

            session_start();

            /* Test if the user is logged in */

            if(isset($_GET['logout'])) {

                /* Back to login form after logout */

                if($_GET['logout'] == true) {
                    session_unset();
                    header("location:login.php");
                }

            } elseif ($_SESSION['username'] !== "") {

                /* Display a message informing of the connection */

                $user = $_SESSION['username'];
                echo "<div class='pl-lg-1 ml-md-5 pl-md-5 pl-sm-4'><strong>".$user."</strong> est connecté</div>";

            }

        ?>

    </div>

</div>

<main class="container mt-5 pt-5 px-5">

    <section class="mb-5 p-5 text-justify homeText">

        <div class="row">

            <div class="col-lg text-center">

                <h2 class="font-weight-bold text-uppercase">interface d'administration</h2>

            </div>

        </div>

        <?php

            /* Data transmission to the database */

            $server = "localhost";
            $db = "modula_test";
            $user = "root";
            $pwd = "root";

            /* Error handling before data transmission (try and catch) */

            try {

                /* Database connection */

                $dbco = new PDO("mysql:host=$server;dbname=$db", $user, $pwd);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {

                echo "Impossible de traiter les données. Erreur : " . $e->getMessage();

            }

            /* Prepared statement : read records from the "emails" table :
            /* date and hour of the message was sent, and the electronic address of the sender
            /* sorted by date sent (from the most recent to the oldest) */

            $req = $dbco->prepare("
                SELECT
                    id, mailing_date, mailing_time, email
                FROM
                    emails
                ORDER BY
                    mailing_date DESC, mailing_time DESC
            ");

            /* The query is executed */

            $req->execute();

            /* Count the number of records */

            $count = $req->rowCount();

            /* Display the number of results */

            echo "<div class='mt-5 mb-4 text-center'>";
                echo "<strong>".$count." </strong>e-mails sont enregistrés";
            echo "</div>";

            /* Tabular display of results */

            echo "<article class='table-responsive'>";

                echo "<table class='table table-dark table-bordered table-striped table-hover>";

                    echo "<thead class='thead-dark font-weight-bold'>";

                        echo "<tr>";

                            echo "<th scope='col'>Date de réception</th>";
                            echo "<th scope='col'>Heure de réception</th>";
                            echo "<th scope='col'>E-mail de l'expéditeur</th>";
                            echo "<th scope='col' class='text-center'>
                                <i class='fas fa-eye' title='voir les messages'></i></th>";

                        echo "</tr>";

                    echo "</thead>";

                    echo "<tbody>";

                        /* Display data */

                        while ($data = $req->fetch()) {
                            echo "<tr>";

                                echo "<td>".$data['mailing_date']."</td>";
                                echo "<td>".$data['mailing_time']."</td>";
                                echo "<td>".$data['email']."</td>";
                                echo "<td class='text-center'><a href='backoffice.php?id=".$data['id']."'>
                                    <i class='text-warning fas fa-eye' title='voir le message'></i></td>";

                            echo "</tr>";
                        }

                    echo "</tbody>";

                echo "</table>";

            echo "</article>";

            /* Release the server connection */

            $req->closeCursor();

        ?>

    </section>

</main>

<?php include("footer.php"); ?>