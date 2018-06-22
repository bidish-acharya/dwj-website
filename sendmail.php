<?php
/**
 * Created by PhpStorm.
 * User: Bidish Acharya
 * Date: 14/09/2017
 * Time: 9:17
 */
ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	session_start();
	require 'google_captcha.php';
	require_once('recaptchalib.php');


if(isset($_POST['register-submit'])) {
    $userEmail = $_POST['email'];
    $fullName = $_POST['fullName'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
	
	
	/* if(isset($_POST['g-recaptcha-response']))
          $captcha=$_POST['g-recaptcha-response'];
        if(!$captcha){
       	 header("location:contact.php?status=failed&&fname=$fname&&lname=$lname&&contact=$cnumber&&email=$userEmail&&subject=$subject&&message=$message");
          exit;
        }*/
require "phpmailer/phpmailerautoload.php";
require 'form.php';
    $mail = new PHPMailer;
    $mail->isSMTP();                                   // Set mailer to use SMTP
    $mail->Host = 'smtp.zoho.com';                    // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                            // Enable SMTP authentication
   $mail->Username = 'contact@deerwalkgroup.com';          // SMTP username
    $mail->Password = 'Deerwalk_Group1'; // SMTP password
    $mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                 // TCP port to connect to
    $mail->setFrom('contact@deerwalkgroup.com', 'Deerwalk Japan');
    $mail->addAddress($userEmail);
	$mail->addAddress('contact@deerwalkgroup.com');
	$mail->addBCC('krpandey@deerwalk.com');
	$mail->addBCC('mogasawara@system.deerwalk.com');
	$mail->addBCC('biacharya@deerwalk.com');
	$mail->isHTML(true);  // Set email format to HTMLs
	
	$mail->Subject    = 'Message from '. $fname .'';
  	$mail->Body    = $bodyContent;
	
	$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
	
	
	
	 if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                @header('location: index.php?success=true');
            }
			
			
    /*$mail->Send();
     echo "<script>  swal(
           'Confirmed!!',
           'Email has been sent',
           'success'
       );
    </script>";*/
    
        /*header("location:contact.php?status=success");*/
}