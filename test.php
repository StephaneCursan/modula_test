<?php
  if($_POST){
    $to = 'your-email-here@gmail.com';
    $subject = 'Contact Form Submission';
    $from_name = $_POST['name'];
    $from_email = $_POST['email'];
    $message = $_POST['message'];
    $robotest = $_POST['robotest'];
    if($robotest)
      $error = "You are a gutless robot.";
    else{
      if($from_name && $from_email && $message){
        $header = "From: $from_name <$from_email>";
        if(mail($to, $subject, $message, $header))
          $success = "You are human and your message was sent!";
        else
          $error = "You are human but there was a problem sending the e-mail.";
      }else
        $error = "All fields are required.";
    }
    if($error)
      echo '<div class="msg error">'.$error.'</div>';
    elseif($success)
      echo '<div class="msg success">'.$success.'</div>';
  }
?>

<?php
if ($robotest) {
            $error = "Vous êtes un robot !";
        } else {
            if ($name && $firstname && $email && $message) {
                $success = "Votre message a été envoyé avec succès.";
            } else {
                $error = "Un problème a été rencontré.";
            } else {
                $error = "Tous les champs sont requis.";
            }
        }

        if ($error) {
            echo "<div".$error."</div>";
        } elseif ($success) {
            echo "<div".$success."</div>";
        }
?>