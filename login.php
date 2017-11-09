<?php 
//include "auth_site.php";
include 'wallet/auth_log.php';
$userid=$alert=$walletid= '';
if(isset($_REQUEST['id'])){
    $id =  decoder($_REQUEST['id']);
    setSession('consumerid', $id);
    //echo $id; exit;
}
//echo $_SESSION['captcha_code'] ; 
$log1 = getSession('consumerid');
//echo $log1; exit;
$log2 = getSession('loginid');
//echo $log2; exit;
if($log2!='') $userid = getSession('loginid');
elseif ($log1!='') $userid = getSession('consumerid');
else $userid='';
if($userid != ''){
    //echo $userid; exit;
    $walletid = getFieldVal(TBL__PREFIX1."create_wallet", 'WalletId', 'Id = '.$userid);
    //echo $walletid; exit;
}

$al = getSession('successalert');
if($al!=''){
    $alert = getSession('successalert');
    unsetSession('successalert');
    //echo $id; exit;
}

if(isset($_POST['submitforgot'])){
    if(isset($_POST['forgotpass'])){
	$forgot=$_POST['forgotpass'];
    }
    if($forgot == 1){
	header("location:".__SITEPATH."phrase_validate.php");
    }else{
	header("location:".__SITEPATH."image_auth_validate.php");
    }
}

if(isset($_POST['submitlogin'])){
    if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) == 0){ 
    if(isset($_POST['walletinput'])){ $walletid=mysqli_real_escape_string($con, $_POST['walletinput']); }
    if(isset($_POST['passinput'])){ $password=mysqli_real_escape_string($con, $_POST['passinput']); }
    $enc_pwd=  md5($password);
    $result = checkLogin($walletid,$enc_pwd);
    if(mysqli_num_rows($result)>0){
        $user = mysqli_fetch_array($result);
	//print_r($user); exit;
	setSession('consumerid', $user['Id']);
	if($user['TwoStepVerify']=='0'){
	
	if($user['DeviceId']!='' and $user['MobilePin']!='0'){
	    setSession('loginid', $user['Id']);
	    //echo "success"; exit;
	    updateLoginMobileUser($user['Id']);
	echo '<script> location.replace("wallet/index.php"); </script>';   
	 exit;
	}else{
	//echo "fail"; exit;
        authMember($user['Id']);   
	setSession('loginid', $user['Id']);
	updateLoginUser($user['Id']);
        //header("location:".__SITEPATH."wallet_index.php");
	echo '<script> location.replace("wallet/index.php"); </script>';
	}
	}elseif($user['TwoStepVerify']=='1'){
	    $email=$user['Email']; 
	    $mail_otp=activation_code( $length = 6 );
$link=__SITEPATH.'login_twostep1.php?id='.encoder($user['Id']);
//------------------------------------------------------------------------------
$content=urlencode('<div style="font-family:Arial,sans-serif;background-color:#f9f9f9;color:#424242;text-align:center">
  <table style="table-layout:fixed;width:90%;width:600px;margin:0 auto;background:#fff;font-size:14px;border:2px solid #e8e8e8;text-align:left;table-layout:fixed;padding-bottom:67px;border-spacing:0">
    <tbody>
      <tr>
        <td style="background-color:#153a62;height:75px;text-align:center;font-size:34px;font-weight:600">
            <span style="color: #fff; font-size: 50px;">AMAZEE COIN</span>
<!--            <img src="https://ci5.googleusercontent.com/proxy/eeKV_wRIn_9DTyRAlU6pFs2RWDlc4d2VPUVLRLgU3tHm7RxPLv_D_K0fgxrlGJyDUL9e8-e-wrWV01oj9ph41ldj7JDVE1JEvnE=s0-d-e1-ft#https://PMC Cloud.info/Resources/logo_txt_white.png" alt="" style="width:300px;height:auto" class="CToWUd a6T" tabindex="0">-->
            <div class="a6S" dir="ltr" style="opacity: 0.01; left: 510.5px; top: 4px;"><div id=":183" class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q" role="button" tabindex="0" aria-label="Download attachment " data-tooltip-class="a1V" data-tooltip="Download"><div class="aSK J-J5-Ji aYr"></div></div></div>
        </td>
      </tr>
      <tr>
        <td style="padding:50px 30px 0px 30px;text-align:center;color:#000;font-weight:bold;font-size:1.9em">
          Welcome to your AMAZEE COIN!
        </td>
      </tr>
      <tr>
        <td style="padding:20px 30px 40px 30px;line-height:1.8;text-align:center;color:#000;">
            <p>Your Account Enabled 2-Step Verification <br>Your E-Mail OTP is : <strong>'.$mail_otp.'</strong></p>
            <p></p>
        </td>
      </tr>
      <tr>
        <td style="padding:30px 30px 10px 30px;line-height:1.8;text-align:center">
          <strong>Please click <a href="'.$link.'" target="_blank" data-saferedirecturl="#">here</a> to verify your OTP Verification.</strong>
        </td>
      </tr>
    </tbody>
  </table>
  <br>
   
  <table style="width:90%;width:600px;margin:0 auto;font-size:10px;table-layout:fixed;border-spacing:0">
    <tbody>
      <tr style="text-align:center">
        <td style="padding-top:20px">Copyright @ 2017 AMAZEE COIN. All rights reserved.</td>
      </tr>
      
    </tbody>
  </table><div class="yj6qo"></div><div class="adL">
</div></div>');
//------------------------------------------------------------------------------
    setTwoStepMailOtp($mail_otp,$user['Id']);
	    if($user['DeviceId']!='' and $user['MobilePin']!='0'){
	    updateLoginMobileUser($user['Id']);
	    //Mail($email,'AmazeeCoin',$content,$headers,"-f info@amazeecoin.com" );
            
            
//-------start api connect values------------
$curl = curl_init();
$external_url="http://amazeecoin.com/phpmail/sendmail.php";
// Configure curl options
$opts = array(
    CURLOPT_URL             => $external_url,
    CURLOPT_RETURNTRANSFER  => true,
    CURLOPT_CUSTOMREQUEST   => 'POST',
    CURLOPT_POST            => 1,
    CURLOPT_POSTFIELDS      => '{"fromid": "info@amazeecoin.com","password": "Amazeecoin@123","toid": "'.$email.'","subject": "AmazeeCoin","mail": "'.$content.'"}'
);

// Set curl options

 curl_setopt_array($curl, $opts); 
//litecoin
// Get the results
$result = curl_exec($curl);
$code=  json_decode($result); // decode json values into arrays.
$message=$code->message; // store array value.
// Close resource
curl_close($curl);

//-------end api connect values------------            
            
            
            
	    setSession("wrong_alert", "<span style='color:blue;'>You are Activated Two-Step Email Verification, OTP Sent your Email, Verify and Login...</span>");
	    echo '<script> location.replace("wallet/message_board.php"); </script>';     
	}else{
	    // email otp code
	    authMember($user['Id']);
	    updateLoginUser($user['Id']);
	    //Mail($email,'AmazeeCoin',$content,$headers,"-f info@amazeecoin.com" );
            
            
//-------start api connect values------------
$curl = curl_init();
$external_url="http://amazeecoin.com/phpmail/sendmail.php";
// Configure curl options
$opts = array(
    CURLOPT_URL             => $external_url,
    CURLOPT_RETURNTRANSFER  => true,
    CURLOPT_CUSTOMREQUEST   => 'POST',
    CURLOPT_POST            => 1,
    CURLOPT_POSTFIELDS      => '{"fromid": "info@amazeecoin.com","password": "Amazeecoin@123","toid": "'.$email.'","subject": "AmazeeCoin","mail": "'.$content.'"}'
);

// Set curl options

 curl_setopt_array($curl, $opts); 
//litecoin
// Get the results
$result = curl_exec($curl);
$code=  json_decode($result); // decode json values into arrays.
$message=$code->message; // store array value.
// Close resource
curl_close($curl);

//-------end api connect values------------             
            
            
            
	    setSession("wrong_alert", "<span style='color:blue;'>You are Activated Two-Step Email Verification, OTP Sent your Email, Verify and Login...</span>");
	    echo '<script> location.replace("wallet/message_board.php"); </script>';    
	//header("location:".__SITEPATH."message_board.php");  
	}
	}else{
	    // mobile otp
	    $mobile_otp=  randomNum( $length = 6 );
	    setTwoStepMobileOtp($mobile_otp,$user['Id']);
            $mobile = getFieldVal(TBL__PREFIX1."create_wallet", 'Mobile', 'Id = '.$user['Id']);
//-------start sms api connect values------------  
$username = 'appkaart'; 
$password = 'appkaart123';  
$destination=$mobile;
$source    = 'AMAZEE'; 
$route='T';
$text = 'Your Amazeecoin 2-Step verification OTP '.$mobile_otp.' use this OTP to verify your mobile number.'; 
    $content =  'UserName='.rawurlencode($username). 
                '&password='.rawurlencode($password). 
                '&SenderID='.rawurlencode($source). 
                '&MobileNo='.rawurlencode($destination). 
    //'&CDMAHeader='.rawurlencode($SenderID).
                '&Message='.rawurlencode($text);
        //print_r($content); exit;
    $ch = curl_init('http://hapi.smsapi.org/SendSMS.aspx?'); 
        curl_setopt($ch, CURLOPT_POST, true); 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $content); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        $output = curl_exec ($ch); 
        curl_close ($ch);
//-------end sms api connect values------------             
            
	    if($user['DeviceId']!='' and $user['MobilePin']!='0'){
	    updateLoginMobileUser($user['Id']);
	    setSession("wrong_alert", "<span style='color:blue;'>You are Activated Two-Step Mobile Verification, OTP Sent your Mobile Number, Submit and Login...  </span>");
	    header("location:".__SITEPATH."login_twostep2.php?id=".encoder($user['Id'])); 
	    //echo '<script> location.replace("wallet/login_twostep2.php"); </script>'; 
	    }else{
	    authMember($user['Id']);
	    updateLoginUser($user['Id']);	    
	    setSession("wrong_alert", "<span style='color:blue;'>You are Activated Two-Step Mobile Verification, OTP Sent your Mobile Number, Submit and Login...  </span>");
	    echo '<script> location.replace("wallet/login_twostep2.php"); </script>'; 
	}}
    }else $alert="<span style='color:red'>Your Wallet Id or Password is Not valid</span>";
    }
    else $alert="<span style='color:red'>Your Captcha code is not valid</span>";
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>AmazeeCoin</title>



<link rel="stylesheet" href="css/css_U8H7bDpPfioW016oqIMs8ZyTAzmI7e8h3Xd2zh3y7Vw.css" media="all">
<link rel="stylesheet" href="css/css.css" media="all">
<link rel="stylesheet" href="css/bootstrap.css" media="all">
<link rel="stylesheet" href="css/responsive.css" media="all">
<link rel="stylesheet" href="css/bootstrap.min.css" media="all">
<link rel="stylesheet" href="css/css_002.css" media="all">
<link rel="stylesheet" href="css/css_C0htNv3Z50atxNRzxhTS1U_sp_Yi2mNXy2aV7OdkmLw.css" media="all">
<link rel="stylesheet" crossorigin="anonymous" href="css/main.css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<script src="js/js_oFhNSLnK1LveIObedR8UVD6ehpITVeIRXCtmNNq5Y_M.js"></script>
<link rel="stylesheet" href="css/custom.css" media="screen">
<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>

<!-- MENU -->

<link href="Menu/style.css" rel="stylesheet" type="text/css" />
<script type='text/javascript'>
function refreshCaptcha(){
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
<!-- MENU -->
<style media="screen">
.container {
	max-width:100%
}
.container .container {
	width:100%!important
}
ul {
	padding-left:10px
}
ul li {
	list-style:inherit
}
.nav-tabs, .block-builder-main ul, .topbar ul, ul.contact-info, ul.menu {
	list-style:none!important;
	padding-left:0
}
.node--view-mode-full p {
	margin-bottom:10px
}
body div.body-page {
	background-color:#fff
}
.sidebar nav.block {
	display:table
}
.sidebar nav.block ul.gva_menu>li {
	width:100%
}
.sidebar nav.block ul.gva_menu>li>a {
	padding:10px 0!important;
	border-bottom:1px solid rgba(0, 0, 0, .1);
	display:block;
	width:100%
}
.sidebar nav.block ul.gva_menu .sub-menu {
	border-top:none;
	box-shadow:none;
	display:block!important;
	opacity:1!important;
	position:static;
	visibility:visible!important
}
.sidebar nav.block ul.gva_menu .sub-menu a {
	padding-right:0!important;
	font-size:11px;
	color:#696969;
	padding-left:20px
}
.site-branding-logo {
	max-height:inherit
}
.site-branding-logo img {
	width:auto
}
</style>
<style class="customize"></style>
</head>
<body class="layout-no-sidebars page-node-142 page-node_142 node_142 js-preloader footer-fixed frontpage node--type-page preloader-done" style="display: block;">

<div class="body-page gva-body-page" style="margin-bottom: 90px;">
  <div></div>
  <header id="header" class="header-v4">
    <div class="topbar">
      <div class="topbar-inner">
        <div class="container">
          <div class="content">
            <div>
              <div id="block-gavias-foxin-topbar" class="block block-block-content block-block-content2f07e2c8-0b1d-4520-8201-4ba62df533c2 no-title">
                <div class="content block-content">
                  <div>
                    
                    <div class="pull-left text-left">
                      <ul class="inline">
                        <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="#"> <i class="fa fa-youtube"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-bitcoin"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-reddit"></i></a></li>
                      </ul>
                    </div>
                    <div class="pull-right text-right">
                      <ul class="inline">
                        <li><span><i class="fa fa-line-chart"> Live  Price: <strong><span id="digibytevalue">1.0000000</span></strong> BTC </i></span></li>
                        <li><span><i class="fa fa-usd"><strong><span ><?php

$url = "https://api.bitfinex.com/v1/ticker/btcusd";
$json = json_decode(file_get_contents($url), true);
$price = $json["last_price"];
echo $price;
?></span></strong></i></span></li>
                        <li><span><i class="fa fa-clock-o"> 24hr USD Vol. $<strong><span ><?php

$urlal2 = "http://amazeepay.net/mobileAPI/get_balance_all.php";
$json = json_decode(file_get_contents($urlal2), true);
$al2 = $json["al2"];
echo $al2/100;
?></span></strong></i></span></li>
                        <li><span><i class="fa fa-money"> 100= $<strong><span >1.00</span></strong></i></span></li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-main">
      <div class="container">
        <div class="header-inner clearfix">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12 branding">
              <div> <a href="index.php" title="Home" rel="home" class="site-branding-logo"> <img src="images/logo.jpg" alt="Home" class=" logohgt"> </a> </div>
            </div>
            <div class="col-md-4 col-sm-9 col-xs-12">
              <div>
                <div id="block-headerright" class="block block-block-content block-block-content8bf81961-2b78-48bd-878e-036532153a7e no-title">
                  <div class="content block-content">
                    <div>
                      <div class="row">
                        <div class="col-sm-12 col-xs-12">
                          <div class="widget gsc-icon-box left text-dark">
                            <div class="highlight-icon"><span class="fa fa-cloud-download"></span></div>
                            <div class="highlight_content">
                              <h4>Get Started Today</h4>
                              <div class="desc"> <a href="https://play.google.com/store/apps/details?id=com.btc2amazeecoin" target="_blank">Download your first AmazeeCoin wallet</a> <br>
                                </div>
                            </div>
                          </div>
                        </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="bar-menu">
      <p><i class="fa fa-bars"></i>Menu</p>
    </div>
    
    <div class="menubar">
      <div class="container">
			
            <ul class="top-menu">
              <li><a href="index.php">Home</a></li>
              <li><a href="technology.php">Technology</a>
                
              </li>
              <li><a href="#">Markets</a><i class="fa fa-caret-down"></i>
              	 <ul class="submenu">
                  
                  <li><a href="Exchanges.php">Exchanges</a></li>
                  <li><a href="globalchart.php">Global Chart</a></li>
                  
                </ul>
              </li>
             <li><a href="wallet.php">Wallets</a></li>
			 <li><a href="#">Services</a></li>
			
              <li><a href="#">Merchant</a>
              <li><a href="#">Network</a><i class="fa fa-caret-down"></i>
              	<ul class="submenu">
                  
                  <li><a href="Blockchain.php">Block Chain</a></li>
                  <li><a href="#">Mining</a></li>
                  <li><a href="#">Forum</a></li>
                  
                </ul>
              </li>
              <li><a href="#">Resources</a><i class="fa fa-caret-down"></i>
              	<ul class="submenu">
                  
                  <li><a href="News.php">News</a></li>
                  <li><a href="Events.php">Events</a></li>
                  
                  
                </ul>
              </li>
              <li><a href="blog.php">Blog</a></li>
              <li><a href="contacts.php">Contacts</a></li>
             
            </ul>

   </div>
    </div>
    
    
  </header>
  

  
  <div role="main" class="main main-page">
    <div class="clearfix"></div>
    
    <div class="help show">
      <div class="container">
        <div class="control-panel"><i class="fa fa-cogs"></i></div>
        <div class="content-inner">
          <div> </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="clearfix"></div>
    <div id="content" class="content content-full">
      <div class="container-full">
        <div class="content-main-inner">
          <div id="page-main-content" class="main-content">
            <div class="main-content-inner">
              <div class="content-main">
                <div>
                  <article data-history-node-id="142" role="article" typeof="schema:WebPage" class="node node--type-page node--view-mode-full">
                    <header> </header>
                    <div class="node__content clearfix">
                      <div property="schema:text">
                        <div class="block-builder-main" id="blockbulider-5vee1">
                          <div class="gavias-blockbuilder-content">
                            <div class="gbb-row-wrapper">
                              <div class=" gbb-row bg-size-cover" style="">
                                <div class="bb-inner default">
                                  <div class="bb-container container">
                                    <div class="row">
                                      <div class="row-wrapper clearfix">
                                        <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="column-inner  bg-size-cover">
                                            <div class="column-content-inner">
                                              <div class="widget gsc-heading  style-1 text-dark  wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                                
                                                
                                                
						<div class="col-lg-3 col-md-3 col-sm-0 col-xs-0"></div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						    <h3  align="center" ><span>Enter Your Wallet Information</span></h3>
<?php if($alert!=''){ ?>
<div>
<?php echo $alert; ?>
</div>
<?php } ?>						    
                                                <form name="loginform" action="login.php" method="post">
			<div class="row	form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12" for='message'>Wallet Id :</label>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<input type="text" class="form-control" value="<?php echo $walletid; ?>" name="walletinput" required="" maxlength="36" placeholder="Wallet Id">
			 </div>
                          </div>
			<div class="row	form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12" for='message'>Password :</label>
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<input class="form-control"  id="pass_input" type="password" name="passinput"  required="" maxlength="10" onpaste="return false"  placeholder="*****">
			 </div>
			
                          </div>
			
			
			<div class="row	form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br>
                                      <label for='message'>Enter the code above here :</label>
                                      <br>
                                      <input class="form-control" id="captcha_code" name="captcha_code" type="text" required="" maxlength="10">
                                     
                                      Can't read the image?<a href='javascript: refreshCaptcha();' style="color: #09c; "> click here</a> to refresh.
			</div>
			
								     <div class="space"></div>
			
                          </div>
			    <div class="space"></div>
			    <div>
				
			    </div>
			<div class="row	col-lg-12 col-md-12 col-sm-12 col-xs-12">
			    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<a href="javascript:void('0');" onclick="showForgot();" style="color: #09c;">Forgot Your Password?</a>
                            <button type="submit" class="width-35 btn btn-sm btn-primary pull-right" onclick="return checkValidation()" name="submitlogin" >
                            <i class="ace-icon fa fa-key"></i>
                            <span class="bigger-110" >Login</span>
                            </button>
			    </div>
			</div>
			    <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
			    </div>
                      </form>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display: none;" id='forget'>
<form name="forgot" action="login.php" method="post">
<div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
    <input type="radio" class="" value="1" name="forgotpass" checked=""> Phrase Code
</label>
</div>  
<div class="row	form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
    <input type="radio" class="" value="2" name="forgotpass"> Image Authentication
</label>
</div>
<div align="center">
<button type="submit" class="width-35 btn btn-sm btn-primary" onclick="return checkForgotValidation()" name="submitforgot" >
<span class="bigger-110" >Submit</span>
</button>
</div>    
</form>
</div>
                                              </div>
                                              <div class="clearfix"></div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="column-inner  bg-size-cover">
                                            <div class="column-content-inner">
                                              
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
  
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer id="footer" class="footer">
   <div class="footer-btm">
    <p class="footcont"><a href="terms.php">Term and Conditions</a>
    <a href="privacy.php">Privacy Policy</a>
    <a href="#">Disclaimer</a>
    <a href="#">Accessibility</a>
    <a href="#">Sitemap</a>
    </p>
  </div>
  <div class="copyright">
    <div class="container">
      <div class="copyright-inner">
        <div>
          <div id="block-gavias-foxin-copyright" class="block block-block-content block-block-content6a74724d-d485-4216-a560-962e52758fde no-title">
            <div class="content block-content">
              <div>
                <div class="text-center"> © Copyright AmazeeCoin 2017. All Rights Reserved. </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="gva-drupal-message-status">
    <div> </div>
  </div>
</footer>
<script src="js/js_BZMzE0qjUPfFRu-RMIb1G3N0sVKKng_t6hWKWEaloHs.js"></script>

<script>
  $(document).ready(function(){
    $(".bar-menu").click(function(){
	  $(".top-menu").slideToggle();
	});
	
	$(".topup").click(function(){
	 $(".popup").not($(this).next('.popup')).hide();
	   $(this).children(".popup").toggle();
	});
	
	
	
	$(".clspup").click(function(){
	  $(".popup").hide();
	});
	
  });
</script>
<script> 
function checkValidation()
{
if(document.loginForm.walletinput.value =="")
{
alert("Enter wallet id");
//document.signupForm.username.focus();
 return false;;
}
if(document.loginForm.passinput.value =="")
{
alert("Enter Password");
//document.signupForm.username.focus();
 return false;;
}

if(document.loginForm.captcha_code.value =="")
{
alert("Enter Captcha code");
//document.signupForm.username.focus();
 return false;;
}
}

function checkForgotValidation()
{
if(document.loginForm.walletinput.value =="")
{
alert("Enter wallet id");
//document.signupForm.username.focus();
 return false;;
}
}

function showForgot()
{
    if(document.getElementById("forget").style.display=="block"){
	document.getElementById("forget").style.display="none";
    }else{
	document.getElementById("forget").style.display="block";
    }
}
</script>
</body>
</html>
