 <?php
include('config.php');

if(empty($_SESSION['uid']))
{
	header("Location: index.php");
}

include('class/userClass.php');
$userClass = new userClass();
$userDetails=$userClass->userDetails($_SESSION['uid']);
$secret=$userDetails->google_auth_code;
$email=$userDetails->email;

require_once 'googleLib/GoogleAuthenticator.php';

$ga = new GoogleAuthenticator();

$qrCodeUrl = $ga->getQRCodeGoogleUrl($email, $secret,'9lessons Demos');


?>
<!DOCTYPE html>
<html>
<head>
    <title>2-Step Verification using Google Authenticator</title>
    <link rel="stylesheet" type="text/css" href="style.css" charset="utf-8" />
</head>
<body>
	<div id="container">
		<h1>2-Step Verification using Google Authenticator</h1>
		<div id='device'>

<p>Enter the verification code generated by Google Authenticator app on your phone.</p>
<div id="img">
<img src='<?php echo $qrCodeUrl; ?>' />
</div>

<form method="post" action="home.php">
<label>Enter Google Authenticator Code</label>
<input type="text" name="code" />
<input type="submit" class="button"/>
</form>
</div>

</div>
</body>
</html>
