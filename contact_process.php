<?php

function isEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if ($_POST) {
    
    $name = addslashes(htmlspecialchars($_POST['name']));
    $firstname = addslashes(htmlspecialchars($_POST['firstname']));
    $email = addslashes(htmlspecialchars($_POST['email']));
    $message = addslashes(htmlspecialchars($_POST['message']));
    $captcha = addslashes(htmlspecialchars($_POST['captcha']));

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
        echo "Votre message a été envoyé avec succès \r\n";
        echo "<a href='contact.php'>Retour</a>";
    }

    /*echo json_encode($array);*/

}

$server = "localhost";
$db = "modula_test";
$user = "root";
$pwd = "root";

$ip = $_SERVER['REMOTE_ADDR'];
$name = $_POST['name'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$message = $_POST['message'];

try {

    $dbco = new PDO("mysql:host=$server;dbname=$db", $user, $pwd);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sth = $dbco->prepare("
        INSERT INTO
            emails
            (mailing_date, mailing_time, ip, name, firstname, email, message)
        VALUES
            (NOW(), NOW(), :ip, :name, :firstname, :email, :message)
    ");
    $sth->bindParam('ip', $ip);
    $sth->bindParam('name', $name);
    $sth->bindParam('firstname', $firstname);
    $sth->bindParam('email', $email);
    $sth->bindParam('message', $message);
    $sth->execute();

} catch (PDOException $e) {

    echo "Impossible de traiter les données. Erreur : " . $e->getMessage();

}

/*
    if ($_POST) {

        $name = $_POST['name'];
        $firstname = $_POST['firstname'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $robotest = $_POST['robotest'];

        if ($robotest) {
            $alert = "Vous êtes un robot !";
        } elseif ($name && $firstname && $email && $message) {
            $alert = "Votre message a été envoyé avec succès.";
            } else {
                $alert = "Un problème a été rencontré.";
            }

        echo '<div>'.$alert.'</div>';
    }
*/

?>