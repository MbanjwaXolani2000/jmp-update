<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $message = $_POST['message'];
  

  $to = 'info@jmpsolutions.co.za'; 
  $headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n";
  $headers .= 'Reply-To: ' . $email . "\r\n";
  $headers .= 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-Type: multipart/mixed; boundary="boundary1"' . "\r\n";
  
  $message_body = "--boundary1\r\n";
  $message_body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
  $message_body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
  $message_body .= "Name: " . $name . "\r\n";
  $message_body .= "Email: " . $email . "\r\n";
  $message_body .= "Message: " . $message . "\r\n\r\n";
  

  if (mail($to, $subject, $message_body, $headers)) {
    echo "Message sent successfully";
  } else {
    echo "There was an error sending your message. Please try again later.";
  }
}
?>
