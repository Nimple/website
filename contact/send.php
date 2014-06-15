<?php

if(isset($_POST['mail'])) {
    echo "TEST";
     
    // CHANGE THE TWO LINES BELOW
    $email_to = "guido@appstronauten.com";
     
    $email_subject = "[Nimple.de Web Form] ";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['mail']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['message']) ) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $name = $_POST['name']; // required
    $email_from = $_POST['mail']; // required
    $subject = $_POST['subject']; // required
    $message = $_POST['message']; // not required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$subject)) {
    $error_message .= 'The Subject you entered does not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= $name . " schreibt:\n\n";
    $email_message .= clean_string($message);

    $email_subject .= clean_string($subject);


// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- place your own success html below -->

<h1>Thank you for contacting us. We will be in touch with you very soon.</h1>

<?php
}
die();
?>