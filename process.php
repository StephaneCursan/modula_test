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
    }

    echo json_encode($array);

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