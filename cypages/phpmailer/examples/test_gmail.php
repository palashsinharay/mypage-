<?php

include("../class.phpmailer.php");
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             = $mail->getFile('contents.html');
$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP();
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server

$mail->Username   = "devops@indusnetlabs.com";  // GMAIL username
$mail->Password   = "d3v0ps123";            // GMAIL password

$mail->AddReplyTo("devops@indusnetlabs.com","palash sinha ray");

$mail->From       = "palash@cypage.deploy.loc";
$mail->FromName   = "palash sinha ray";

$mail->Subject    = "PHPMailer Test Subject via gmail";

//$mail->Body       = "Hi,<br>This is the HTML BODY<br>";                      //HTML Body
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
$mail->WordWrap   = 50; // set word wrap

$mail->MsgHTML($body);

$mail->AddAddress("palash.sinharay@indusnet.co.in", "pala");

$mail->AddAttachment("images/phpmailer.gif");             // attachment

$mail->IsHTML(true); // send as HTML

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}

?>
