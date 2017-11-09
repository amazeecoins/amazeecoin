<?php  
include 'wallet/auth_log.php';
$user_id='';
if(isset($_GET['id'])){
    $user_id=  decoder($_GET['id']);
}
//echo $user_id; exit;    
updateActivationCodeById($user_id);
if(isset($_POST['submit_unicode'])){
    //echo $email; exit;
    if(isset($_POST['newpsw'])){ $newpsw= $_POST['newpsw']; }
    if(isset($_POST['confirmpsw'])){ $confirmpsw= $_POST['confirmpsw']; }
    insertUnicode($user_id,$newpsw);
    $email = getFieldVal(TBL__PREFIX1."create_wallet", 'Email', 'Id = '.$user_id);
    $walletid = getFieldVal(TBL__PREFIX1."create_wallet", 'WalletId', 'Id = '.$user_id);
    //$walletid = generateWalletId($user_id,$email);
    $link=__SITEPATH.'login.php?id='.encoder($user_id);
    
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
          Welcome to your AMAZEE COIN Wallet!
        </td>
      </tr>
      <tr>
        <td style="padding:20px 30px 20px 30px;line-height:1.8;text-align:center;color:#000;">
            <p>Thank you for creating a AMAZEE COIN Wallet. <br> Your Wallet Id is created.</p>
            <p></p>
        </td>
        <tr>
            <td style="padding:30px 30px 10px 30px;line-height:1.8;text-align:center">
              <strong>Your Wallet ID: <a href="'.$link.'" target="_blank" data-saferedirecturl="#">'. $walletid .'</a></strong>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;padding:0px 0px 30px 0px">Use your unique Wallet ID to login to your AMAZEE COIN wallet.</td>
        </tr>
      </tr>
    </tbody>
  </table>
  <br>
  <table style="table-layout:fixed;width:90%;width:600px;margin:0 auto;background:#fff;font-size:14px;border:2px solid #e8e8e8;text-align:left;table-layout:fixed;border-spacing:0">
    <tbody>
      
      
    </tbody>
  </table>
<div class="yj6qo"></div><div class="adL">
</div></div>');
    
   
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
    setSession("successalert", "<span style='color:green;'>Your password changed successfully<span>");  
    //echo '<script> location.replace("message_board.php"); </script>';
    header("location:".__SITEPATH."login.php?id=".encoder($user_id));
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
<style>
.strength_meter{
	height:7px;
	margin-top:6px;
	width:493px;
  div{
    display:flex;
    justify-content:center;
    line-height:35px;
    color:white;
    padding-left:20px;
  }
}

.weakest{
	background-color: #e60000;
	border-color: #F04040;
	color: #fff;    
}
.weak{
	background-color: #FF8000;
	border-color: #FF853C;
	color: #fff;
}
.good{
	background-color: #ffcc00;
	border-color: #ffff00;
	color: #000;
}
.great{
	background-color: #339933;
	border-color: #030;
	color: #fff;
}


</style>
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
	      <li><a href="wallet/signup.php">Create Wallet</a></li> 
	      <li><a href="wallet/login.php"> Login</a></li>
             
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
						    <h2  align="center" class="title"><span>Create Wallet</span></h2>
		<form name="mailcheck" method="post" action="mail_activation.php?id=<?php echo encoder($user_id); ?>">
			<div class="row	form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12" for='message'>Password :</label>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<input class="form-control" id="myPassword"  name="newpsw" onblur="checkPsw();" type="password" maxlength="12" required="" >
                        <span class="help-block">
                            <div class="ng-hide">
                                <p class="ng-hide"></p>
                            </div>
                        </span>
			 </div>
                          </div>
			<div class="row	form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12" for='message'>Confirm Password :</label>
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<input class="form-control" name="confirmpsw" onblur="checkConfirmPsw();"  type="password" required="" maxlength="12">
			 </div>
			
                          </div>
			
			    <div class="space"></div>
			    <div align="center">
                           <button class="width-35 btn btn-sm btn-primary" onclick="return checkValidation()" type="submit" name="submit_unicode" >
                            <span class="bigger-110" >Continue</span>
                            </button>
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
<script type="text/javascript"> 

function checkPsw()
{
if(document.mailcheck.newpsw.value =="")
{
alert("Enter Your Password");
 return false;;
}

if(document.mailcheck.newpsw.value !="" && document.mailcheck.newpsw.value.length < 8)
{

alert("Password Lenght Must 8 Characters");
//document.mailcheck.newpsw.value ="";
//document.mailcheck.newpsw.focus();
return false;;
}

} 

function checkConfirmPsw()
{
if(document.mailcheck.confirmpsw.value !="")
{
if(document.mailcheck.confirmpsw.value.length < 8)
{
alert("Passwords Not Match");
return false;;
}
 return false;;
}

} 

function checkValidation(){
if(document.mailcheck.newpsw.value =="")
{
alert("Enter Your Password");
 return false;;
}
if(document.mailcheck.confirmpsw.value =="")
{
alert("Enter Your Confirm Password");
 return false;;
}

if(document.mailcheck.newpsw.value == document.mailcheck.confirmpsw.value ==""){
alert("Passwords Not Match");
return false;;
}
}
</script>  
<script>
;(function ( $, window, document, undefined ) {
    var pluginName = "strength",
        defaults = {
            strengthClass: 'strength',
            strengthMeterClass: 'strength_meter'
        };
    function Plugin( element, options ) {
        this.element = element;
        this.$elem = $(this.element);
        this.options = $.extend( {}, defaults, options );
        this._defaults = defaults;
        this._name = pluginName;
        this.init();
    }
    Plugin.prototype = {
        init: function() {
            var characters = 0;
            var capitalletters = 0;
            var loweletters = 0;
            var number = 0;
            var special = 0;
            var upperCase= new RegExp('[A-Z]');
            var lowerCase= new RegExp('[a-z]');
            var numbers = new RegExp('[0-9]');
            var specialchars = new RegExp('([!,%,&,@,#,$,^,*,?,_,~])');
            function GetPercentage(a, b) {
                    return ((b / a) * 100);
                }
                function check_strength(thisval,thisid){
                    if (thisval.length > 2) { characters = 1; } else { characters = -1; };
                  
                    if (thisval.match(upperCase)) { capitalletters = 1} else { capitalletters = 0; };
                    if (thisval.match(lowerCase)) { loweletters = 1}  else { loweletters = 0; };
                    if (thisval.match(numbers)) { number = 1}  else { number = 0; };
                    var total = characters + capitalletters + loweletters + number + special;
                    var totalpercent = GetPercentage(7, total).toFixed(0);
                    if (!thisval.length) {total = -1;}
                    get_total(total,thisid);
                }
            function get_total(total,thisid){
                var thismeter = $('div[data-meter="'+thisid+'"]');
                    if (total <= 1) {
                   thismeter.removeClass();
                   thismeter.addClass('weakest').html('Password Strength: Very Weak');
                } else if (total == 2){
                    thismeter.removeClass();
                   thismeter.addClass('weak').html('Password Strength: Weak');
                } else if(total == 3){
                    thismeter.removeClass();
                   thismeter.addClass('good').html('Password Strength: Good');

                } else {
                     thismeter.removeClass();
                   thismeter.addClass('great').html('Password Strength: Great');
                }
                
                if (total == -1) { thismeter.removeClass().html('Password Strength:'); }
            }
            thisid = this.$elem.attr('id');
            this.$elem.addClass(this.options.strengthClass).attr('data-password',thisid).after('<input style="display:none" class="'+this.options.strengthClass+'" data-password="'+thisid+'" type="text" name="" value=""><a data-password-button="'+thisid+'" href="" class="'+this.options.strengthButtonClass+'">'+'</a><div class="'+this.options.strengthMeterClass+'"><div data-meter="'+thisid+'"></div></div>');

            this.$elem.bind('keyup keydown', function(event) {
                thisval = $('#'+thisid).val();
                $('input[type="text"][data-password="'+thisid+'"]').val(thisval);
                check_strength(thisval,thisid);

            });
             $('input[type="text"][data-password="'+thisid+'"]').bind('keyup keydown', function(event) {
                thisval = $('input[type="text"][data-password="'+thisid+'"]').val();
                console.log(thisval);
                $('input[type="password"][data-password="'+thisid+'"]').val(thisval);
                check_strength(thisval,thisid);
            });
            
        }
    };
    $.fn[pluginName] = function ( options ) {
        return this.each(function () {
            if (!$.data(this, "plugin_" + pluginName)) {
                $.data(this, "plugin_" + pluginName, new Plugin( this, options ));
            }
        });
    };

})( jQuery, window, document );
$(document).ready(function($) {
  $('#myPassword').strength({
    strengthClass: 'strength',
    strengthMeterClass: 'strength_meter'
  });
  $('#confirm-password').strength({
    strengthClass: 'strength',
    strengthMeterClass: 'strength_meter'
  });
});
//variant of Strength.js

</script>
</body>
</html>
