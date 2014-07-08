<?php

if(isset($_POST['mail'])) {     
    // CHANGE THE TWO LINES BELOW
    $email_to = "info@appstronauten.com";
     
    $email_subject = "[Nimple.de Web Form] ";
     
     
    function died($error) {
        header("Status: 301 Moved Permanently");
        header("Location: ./index.php?". $_SERVER['QUERY_STRING']);
        // your error code can go here
        echo "Sorry, there was probably an error durring the transmission. <br>";
        echo $error."<br><br>";
        echo "Please try it again.<br><br>";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['mail']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['message']) ) {
        died('Sorry, there was an error. Please try it again later.');
    }
     
    $name = $_POST['name']; // required
    $email_from = $_POST['mail']; // required
    $subject = $_POST['subject']; // required
    $message = $_POST['message']; // not required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'There is a problem with the entered e-mail address.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'Please enter a right name.<br />';
  }
  if(!preg_match($string_exp,$subject)) {
    $error_message .= 'Please enter a right subject.<br />';
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

<h1>Thank you for your message.</h1>

<?php
}
header("Location: http://www.appstronauten.com/contact");
die();
?>