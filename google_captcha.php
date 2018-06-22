<?php

	/*
	//if(isset($_POST['g-recaptcha-response'])){
//          $captcha=$_POST['g-recaptcha-response'];
//        }
//        if(!$captcha && !isset($_GET['wrong_code'])){
//        	 //header("Location:".$_SERVER['HTTP_ORIGIN'] . $_SERVER['REQUEST_URI']."?wrong_code=true");
//			 header("Location:".$_SERVER['HTTP_REFERER']."?wrong_code=true");
//          die();
//        }	
//		else{
//			//$secretKey = "6Lc26hcUAAAAADshHxGUi3boxbfBeoOcSc1QvDEN";
//			// lIVE
//			 $secretKey = "6LcqXTEUAAAAANIyQC9V3jdzIgK094zMQ8kbFXyP";
//			$ip = $_SERVER['REMOTE_ADDR'];
//			$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
//			$responseKeys = json_decode($response,true);
//			if(intval($responseKeys["success"]) !== 1 && !isset($_GET['wrong_code'])) {
//			  //header("Location:".$_SERVER['HTTP_ORIGIN'] . $_SERVER['REQUEST_URI']."?wrong_code=true");
//			  header("Location:".$_SERVER['HTTP_REFERER']."?wrong_code=true");
//			  die();
//			}	
//		}

*/

// grab recaptcha library
require_once "recaptchalib.php";

// your secret key
$secret = "6LcuYTEUAAAAAI_3OrkMwk-XXgN6t_rDITIKwk2M";
 
// empty response
$response = null;
 
// check secret key
$reCaptcha = new ReCaptcha($secret);

// if submitted check response
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
?>