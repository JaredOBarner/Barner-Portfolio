<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $to = "jobarner45@yahoo.com";
  $subject = "New Contact Form Submission";

  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-Type: text/html\r\n";

  $mailBody = "Name: $name<br>Email: $email<br>Message:<br>$message";

  if (mail($to, $subject, $mailBody, $headers)) {
    echo "Thank you for your message!";
  } else {
    echo "Sorry, something went wrong. Please try again.";
  }
}
?>
