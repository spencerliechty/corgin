<?php

// When we unzipped PHPMailer, it unzipped to
// public_html/PHPMailer_5.2.0
require("lib/PHPMailer/PHPMailerAutoload.php");
require("PHPMailer_5.2.0/class.phpmailer.php");

$mail = new PHPMailer();

// set mailer to use SMTP
$mail->IsSMTP();

// As this email.php script lives on the same server as our email server
// we are setting the HOST to localhost
$mail->Host = "localhost";  // specify main and backup server

$mail->SMTPAuth = true;     // turn on SMTP authentication

// When sending email using PHPMailer, you need to send from a valid email address
// In this case, we setup a test email account with the following credentials:
// email: send_from_PHPMailer@bradm.inmotiontesting.com
// pass: password
$mail->Username = "submit@corgisncritters.org";  // SMTP username
$mail->Password = "TX4corgis"; // SMTP password

$mail->SetFrom('submit@corgisncritters.org', 'Corgi N Critters Rescue');

$mail->AddAddress("blumebb@yahoo.com", "Barbara Blume");
$mail->AddAddress("liechtywebdesign@gmail.com", "Liechty WebDesign");
$mail->AddAddress("info@corgisncritters.org", "Official info account");

// set email format to HTML
$mail->IsHTML(true);

$mail->Subject = "Contact Us Form Received";

// $message is the user's message they typed in
// on our contact us page. We set this variable at
// the top of this page with:
// $message = $_REQUEST['message'] ;
$message = nl2br(print_r($_REQUEST, true));
$mail->Body    = $message;
$mail->AltBody = $message;

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
header("Location: http://corgisncritters.org/confirmation.html");
exit;
?>
