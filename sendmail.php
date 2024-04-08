<?php
//print_r($_POST);exit;	
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST['name'];
$email_address = $_POST['email'];
$messagge = $_POST['message'];
$phone = $_POST['number'];
// $subject = $_POST['subject'];

// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
 
require 'phpmailer/Exception.php'; 
require 'phpmailer/PHPMailer.php'; 
require 'phpmailer/SMTP.php'; 
 
$mail = new PHPMailer; 

$mail->isSMTP();
$mail->Host = 'localhost';
$mail->SMTPAuth = false;
$mail->SMTPAutoTLS = false; 
$mail->Port = 25; 
 
// Sender info 
$mail->setFrom("vivek@srishtiindia.com", "Sapphire Contact"); 
//$mail->addReplyTo($email, $name); 
 
// Add a recipient 
$mail->addAddress('vivek@srishtiindia.com'); 
 
// Set email format to HTML 
$mail->isHTML(true); 
 
// Mail subject 
$mail->Subject = 'Contact Form - '.$name; 
 
// Mail body content 
$bodyContent = '<h2>Customer Details</h2>'; 
$bodyContent .= '<p>Name: '.$name.'</p>'; 
$bodyContent .= '<p>Email: '.$email_address.'</p>'; 
$bodyContent .= '<p>Phone Number:'.$phone.'</p>';
// $bodyContent .= '<p>Subject: '.$subject.'</p>';  
$bodyContent .= '<p>Message: '.$messagge.'</p>';
$mail->Body    = $bodyContent; 

$mail->send();

if(!$mail->send()) {
   header( "refresh:1; url=Contact.html" ); 
   echo '<script>
   alert("your Message not Sent please try again through mail. Thank you!");
</script>';  
} else {
  header( "refresh:1; url=Contact.html" ); 
  echo '<script>
  alert("your Message  Sent  succesfully.Thank you!");
</script>'; 
}
return true;		
// }	
?>