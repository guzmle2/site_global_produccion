<?php


$name=$_POST['name'];
$company=$_POST['company'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$city=$_POST['city'];
$message=$_POST['message'];


$to='ronoel54@gmail.com';
$copia="leonor.guzman@trascend.com.ve";


$headers = 'From: '.$name."\r\n" ;
$headers .='Reply-To: '.$email."\r\n";
$headers .=	'X-Mailer: PHP/' . phpversion();
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

$subject = '- Web global -';

// Retrieve the email template required
$body = file_get_contents('templateMail.html');

// Replace the % with the actual information
$body = str_replace('%name%', $name, $body);
$body = str_replace('%company%', $company, $body);
$body = str_replace('%phone%', $phone, $body);
$body = str_replace('%email%', $email, $body);
$body = str_replace('%city%', $city, $body);
$body = str_replace('%mensaje%', $message, $body);

/*if(mail("$to,$copia", $subject, $body, $headers)) {*/

if(mail($to, $subject, $body, $headers)) {
	die('Message sent.');
} else {
	die('Error: Mail failed');
}

?>