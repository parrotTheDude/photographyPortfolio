<?php
  //Start the session
  session_start();

  //Create a empty session variable
  $_SESSION['result'] = "";

  // Import the Postmark Client Class:
  require_once('./vendor/autoload.php');
  require_once('inc/variables.php');

  use Postmark\PostmarkClient;
  use Postmark\Models\PostmarkAttachment;

  if(isset($_POST['submit'])) {
    $name = ucwords(strtolower($_POST['name']));
    $email = str_replace(' ', '', strtolower($_POST['email']));
    $message = $_POST['message'];

    $postmarkToken = POSTMARK_TOKEN;

    if (preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $client = new PostmarkClient($postmarkToken);

        $fromEmail = "hello@bowermandigital.com";
        $toEmail = "eviebowerman@proton.me";
        $subject = $name . " wants to get in contact from your website eviebowerman.com";
        $htmlBody = "<strong>Hello!</strong> My name is " . $name . ". <br /><br />Email: " . $email . "<br />Message:<br />" . $message;
        $textBody = "Hello! My name is " . $name  . ".Email: " . $email . "Message:" . $message;;
        $tag = "evie-enquiry";
        $trackOpens = false;
        $trackLinks = "None";
        $messageStream = "outbound";

        // Send an email to me about contact information
        $sendResult = $client->sendEmail(
          $fromEmail,
          $toEmail,
          $subject,
          $htmlBody,
          $textBody,
          $tag,
          $trackOpens,
          NULL, // Reply To
          NULL, // CC
          NULL, // BCC
          NULL, // Header array
          NULL, // Attachment array
          $trackLinks,
          NULL, // Metadata array
          $messageStream
        );
        // Redirect browser
        $_SESSION['result'] = "sent";
        header("Location: https://eviebowerman.com/contact");
 
        exit;
      }
    } else {
      // Redirect browser
      $_SESSION['result'] = "failed";
      header("Location: https://eviebowerman.com/contact");

      exit;
    }
  }