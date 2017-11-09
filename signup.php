<?php 
include "auth_site.php";
$name=$email=$mobile_code=$mobile=$alert="";
$ip=get_client_ip();
$addr=getLocationInfoByIp($ip); // country code
$country=code_to_country($addr['country']); // country name
$mobile_code=countrycode_to_mobile($addr['country']); //mobile code
  if(isset($_POST['register_submit'])){
    if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) == 0){ 
    if(isset($_POST['username'])){ $name=$_POST['username']; }
    if(isset($_POST['email'])){ $email=$_POST['email']; }
    if(isset($_POST['country'])){ $country=$_POST['country']; }
    if(isset($_POST['mobile'])){ $mobile=$_POST['mobile']; }
    if(isset($_POST['mobile_code'])){ $mobile_code=$_POST['mobile_code']; }

$check=checkMailId($email,$mobile);
$activation_code=activation_code( $length = 4 );
$link=__SITEPATH.'activation_form.php?activationcode='.encoder($activation_code).'&mail='.encoder($email);

if(mysqli_num_rows($check)==0){
    $insert_id=setUserRegistration($name,$email,$country,$mobile,$activation_code,$mobile_code);
    $walletid = generateWalletId($insert_id,$email);
    
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
            <p><strong>Your Wallet ID: '. $walletid .'</strong></p>
            <p></p>
        </td>
      </tr>
      <tr>
        <td style="padding:10px 10px 10px 10px;line-height:1.8;text-align:center">
          <strong>Your Acitvation Link is: <a href="'.$link.'" target="_blank" data-saferedirecturl="#">'.$link.'</a></strong>
        </td>
      </tr>
      <tr>
        <td style="padding:10px 10px 10px 10px;line-height:1.8;text-align:center;color:#000;">
            <p>Thank you for creating a AMAZEE COIN Account. <br> Verify your email to complete your setup. <br> Please Activate your Email activation Link, Below.</p>
        </td>
      </tr>
      
    </tbody>
  </table>
  <br>
  <table style="table-layout:fixed;width:90%;width:600px;margin:0 auto;background:#fff;font-size:14px;border:2px solid #e8e8e8;text-align:left;table-layout:fixed;border-spacing:0">
    <tbody>
      
      <tr>
        <td style="text-align:center;padding:0px 0px 30px 0px"></td>
      </tr>
    </tbody>
  </table>

  
  <table style="width:90%;width:600px;margin:0 auto;font-size:10px;table-layout:fixed;border-spacing:0">
    <tbody>
      <tr style="text-align:center">
        <td style="padding-top:20px">Copyright @ 2017 AMAZEE COIN. All rights reserved.</td>
      </tr>
      
    </tbody>
  </table><div class="yj6qo"></div><div class="adL">
</div></div>');
//------------------------------------------------------------------------------    
   
    
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
    
    
    
    
    setSession("wrong_alert", "<span style='color:blue;'>Successfully Registered Activation Mail sent your Email...  </span>");
    echo '<script> location.replace("wallet/message_board.php"); </script>';
}else{
    setSession("wrong_alert", "<span style='color:red;'>Already registered Email / Mobile number</span>");
    echo '<script> location.replace("wallet/message_board.php"); </script>';
    
}
}else{
    if(isset($_POST['username'])){ $name=$_POST['username']; }
    if(isset($_POST['email'])){ $email=$_POST['email']; }
    if(isset($_POST['country'])){ $country= $_POST['country']; }
    if(isset($_POST['mobile'])){ $mobile=$_POST['mobile']; }
    $alert="<span style='color:red'>Your Captcha code is not valid!</span>";// Captcha verification is incorrect.	
}
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
						    <h3  align="center"><span>Create Your Wallet</span></h3>
						    
                                                <form name="signupform" action="signup.php" method="post">
	    <?php if($alert!=''){ ?>
	    <div>
	    <?php echo $alert; ?>
	    </div>
	    <?php } ?>
			<div class="row	form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12" for='message'>Name :</label>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<input type="text" name="username" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" value="<?php  echo $name;  ?>" onblur="checkName();"  placeholder="Name" required="" maxlength="30" />
			 </div>
                          </div>
			<div class="row	form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12" for='message'>Email-Id :</label>
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<input type="email" value="<?php  echo $email;  ?>" name="email" class="form-control" placeholder="Email" required="" maxlength="60" />
			 </div>
			
                          </div>
			<div class="row	form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12" for='message'>Country :</label>
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<select class="form-control" onchange="showMobileCode(this.value)"  name="country" required="" id="country">
<?php  
$country_name=getCountry();
//print_r($country_name); exit;
while($count_name=  mysqli_fetch_array($country_name)){
?>
		    <option value="<?php  echo $count_name['CountryName'];  ?>" <?php  if($count_name['CountryName'] == $country) echo 'selected';  ?>><?php  echo $count_name['CountryName'];  ?></option>
<?php  
}
?>
                              </select>	
			 </div>
			
                          </div>
			<div class="row	form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12" for='message'>Mobile :</label>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			    <p id="mobilecode"><input class="form-control" value="<?php echo $mobile_code;  ?>" name="mobile_code" type="text" required="" maxlength="5" readonly="" id="mobile_code"></p>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<input class="form-control" value="<?php  echo $mobile;  ?>" name="mobile" type="text" maxlength="12" required="" oninput="this.value=this.value.replace(/[^0-9]/g,'');" placeholder="Mobile">
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
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px;"><div class="item check"><input name="agreement" type="checkbox" ng-model="fields.acceptedAgreement" required="" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"> <label class="em-300 mbn mls right-align" translate="ACCEPT_TOS"> &nbsp;I have read and agree to the <a href="terms.php" target="_blank" rel="noopener noreferrer">Terms of Service</a></label></div></div>
								     <div class="space"></div>
			
                          </div>
			    <div class="space"></div>
<!--			<div align="center">
                            <button type="submit" class="width-35 btn btn-sm btn-primary"  name="register_submit"  
                           onclick="return checkValidation();" >
                            Signup
                            </button>
			</div>-->
			<div class="row	col-lg-12 col-md-12 col-sm-12 col-xs-12">
			    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<a href="login.php"  ><b>Goto Login <i class="fa fa-arrow-right"></i></b></a>
                            <button type="submit" class="width-35 btn btn-sm btn-primary pull-right"  name="register_submit"  
                           onclick="return checkValidation();" >
                            Signup
                            </button>
			    </div>
			</div>
                      </form>
						
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
if(document.signupform.username.value =="")
{
alert("Enter Your Name");
//document.signupform.username.focus();
 return false;;
}
re =/^[A-Za-z ]+$/; 
        if(!re.test(signupform.username.value)) {
          alert("Name Not valid");
          //document.signupform.username.focus();
          return false;
    }
if(document.signupform.email.value =="")
{
alert("Enter Your Mail Id");
//document.signupform.username.focus();
 return false;;
}    
if(document.signupform.mobile.value =="")
{
alert("Enter Your Mobile");
//document.signupform.username.focus();
 return false;;
}  
}

function checkName()
{
if(document.signupform.username.value =="")
{
alert("Enter Your Name");
//document.signupform.username.focus();
 return false;
}
re =/^[A-Za-z ]+$/; 
        if(!re.test(signupform.username.value)) {
          alert("Name Not valid");
          return false;
    }
}

//function valEmail()
//{
//     re =/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//	if(!re.test(document.signupform.email.value)) {
//	  alert("Email Not Valid");
//	  return false;
//	}
//}

function showMobileCode(countryname){
var params="country="+countryname;
var xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if(this.readyState == 4 && this.status == 200) {
        document.getElementById("mobilecode").innerHTML = this.responseText;
    }else{
        //alert('Product added to cart');
    }
}; 
xmlhttp.open("GET", "country_code_ajax.php?"+params, true);
xmlhttp.send();
}
</script>
</body>
</html>
