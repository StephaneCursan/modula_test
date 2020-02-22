<div>

    <a href="backoffice.php?logout=ok"><span>Déconnexion</span></a>

    <!-- tester si l'utilisateur est connecté -->

    <?php

        session_start();

        if(isset($_GET['logout'])) {
            if($_GET['logout'] == true) {
                session_unset();
                header("location:login.php");
            }
        } elseif ($_SESSION['username'] !== "") {
            $user = $_SESSION['username'];
            // afficher un message
            echo "Bonjour $user, vous êtes connecté";
        }

        $server = "localhost";
        $db = "modula_test";
        $user = "root";
        $pwd = "root";

        try {

            $dbco = new PDO("mysql:host=$server;dbname=$db", $user, $pwd);
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        } catch (PDOException $e) {
        
            echo "Impossible de traiter les données. Erreur : " . $e->getMessage();
        
        }

        $sth = $dbco->prepare("
            SELECT
                id, mailing_date, mailing_time, email
            FROM
                emails
            ORDER BY
                mailing_date, mailing_time DESC
        ");

        $sth->execute();

        $count = $sth->rowCount();

        echo "<p></p>";
        echo "<div>";
            echo "Liste des " . $count . " e-mails reçus";
        echo "</div>";
        echo "<p></p>";

        echo "<table>";
            echo "<tr>";
                echo "<th scope='col'>Id</th>";
                echo "<th scope='col'>Date de réception</th>";
                echo "<th scope='col'>Heure de réception</th>";
                echo "<th scope='col'>E-mail de l'expéditeur</th>";
                echo "<th scope='col'>Voir</th>";
            echo "</tr>";
            while ($data = $sth->fetch()) {
                echo "<tr>";
                    echo "<td>" . $data['id'] . "</td>";
                    echo "<td>" . $data['mailing_date'] . "</td>";
                    echo "<td>" . $data['mailing_time'] . "</td>";
                    echo "<td>" . $data['email'] . "</td>";
                    echo "<td><a href='backoffice.php?id=".$data['id']."'> V </a></td>";
                echo "</tr>";
            }
        echo "</table>";

        $sth->closeCursor();

    ?>

</div>