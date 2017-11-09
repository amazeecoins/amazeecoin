<?php  
include "auth_site.php";
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
<link rel="stylesheet" href="css/css_002.css" media="all">
<link rel="stylesheet" href="css/css_C0htNv3Z50atxNRzxhTS1U_sp_Yi2mNXy2aV7OdkmLw.css" media="all">
<link rel="stylesheet" crossorigin="anonymous" href="css/main.css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<script src="js/js_oFhNSLnK1LveIObedR8UVD6ehpITVeIRXCtmNNq5Y_M.js"></script>
<link rel="stylesheet" href="css/custom.css" media="screen">
<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>

<!-- MENU -->

<link href="Menu/style.css" rel="stylesheet" type="text/css" />

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
.content-top-header1{
    display: inline-block; margin-right: 50px; border: 1px solid #ffffff; padding: 10px; border-radius: 5px;
}
.content-top-header2{
    display: inline-block; border: 1px solid #ffffff; padding: 10px; border-radius: 5px;
}
.content-top-header1:hover{
    background: #4785f2;
    border: 1px solid #4785f2;
}

.content-top-header2:hover{
    background: #4785f2;
    border: 1px solid #4785f2;
}


</style>
<style class="customize"></style>
</head>
<body class="layout-no-sidebars page-node-142 page-node_142 node_142 js-preloader footer-fixed frontpage node--type-page preloader-done" style="display: block;">

<div class="body-page gva-body-page" style="margin-bottom: 100px;">
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
  
<div class="breadcrumbs">
    <div>
      <div class="form-group" style="padding-top: 50px; height: 750px;">
            <div class="container container--medium">
                <p>
                    
                    
                    
                <h3>PRIVACY POLICY</h3>
                <b>	Who is the site/app owner?</b><br>
M/S Amazee Coin<br><br>

<b>	What data is being collected? How is that data being collected?</b>
<br>
No, we are not collecting any data. Camera is only used for scanning the QR Code.<br><br>

<b>	For which purposes is the data collected? Analytics? Email Marketing?</b><br>
No, we are doing any marketing. We are collecting data for KYC purpose.<br><br>

<b>	What third parties will have access to the information? Will any third party collect data through widgets (e.g. social buttons) and integrations (e.g. facebook connect)?</b><br>
ZXING Library (It is used to QR Code Generation)<br>
Mobile Vision API (It is used to Scan QR Code)<br><br>

<b>	What rights do users have? Can they request to see the data you have on them, can they request to rectify, erase or block their data (under European regulations most of this is mandatory)?</b><br>
Yes, the user can see or modify their data at any time.<br><br>

	Description of process for notifying users and visitors of material changes to the privacy policy
Yes, we are sending popup messages to the user.<br><br>

<b>	Effective date of the privacy policy</b><br>
              13th July 2017<br>

                </p>
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
  });
</script>

</body>
</html>
