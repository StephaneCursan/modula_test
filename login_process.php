<?php

    /* Starts a new session or resumes an existing session */

    session_start();

    /* Data management */

    if (isset($_POST['username']) && isset($_POST['password'])) {

        /* Data transmission to the database */

        $server = 'localhost';
        $db = 'modula_test';
        $userdb = 'root';
        $pwddb = 'root';
        
        /* Database connection */

        $dbco = mysqli_connect($server, $userdb, $pwddb, $db)
            or die('could not connect to database');

        /* conversion of special characters to HTML entities
        to eliminate SQL and XSS injection attacks */
        
        $username = addslashes(htmlspecialchars($_POST['username'])); 
        $password = addslashes(htmlspecialchars($_POST['password']));

        if ($username !== "" && $password !== "") {

            /* Verification of username and password with those stored in the database */

            $req = "SELECT count(*) FROM users where 
                nom_utilisateur = '".$username."' and mot_de_passe = '".$password."' ";
            $exec_req = mysqli_query($dbco, $req);
            $answer = mysqli_fetch_array($exec_req);
            $count = $answer['count(*)'];
            
            /* Username and password are correct */

            if ($count != 0) {

                $_SESSION['username'] = $username;
                header('Location: backoffice.php');

            } else {

                /* Username and password are incorrect */

                header('Location: login.php?erreur=1');

            }

        } else {

            /* Username or password has not been entered */

            header('Location: login.php?erreur=2');

        }

    } else {

        header('Location: login.php');

    }

    /* Database logout */

    mysqli_close($dbco);

?>