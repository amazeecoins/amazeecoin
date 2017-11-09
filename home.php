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

<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/jssor.slider-23.1.5.mini.js" type="text/javascript"></script>

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
	width:100%;
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
              <li><a href="#">Wallet</a><i class="fa fa-caret-down"></i>
              	 <ul class="submenu">
                  <li><a href="Exchanges.php">Exchanges</a></li>
                  <li><a href="globalchart.php">Global Chart</a></li>
                </ul>
              </li>
            </ul>

   </div>
    </div>
    
    
  </header>
  
<div class="banner">
  <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1000,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
              {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1000,x:-1,y:2,$Rows:2,$Zoom:11,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Row:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.85}},
              {$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1000,x:4,y:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
              {$Duration:1500,x:0.3,y:-0.3,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}},
              {$Duration:1000,x:-3,y:1,$Rows:2,$Zoom:11,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
              {$Duration:1200,y:-1,$Cols:8,$Rows:4,$Clip:15,$During:{$Top:[0.5,0.5],$Clip:[0,0.5]},$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12},$ScaleClip:0.5},
              {$Duration:1000,x:0.5,y:0.5,$Zoom:1,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1200,x:-0.6,y:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1500,y:-0.5,$Delay:60,$Cols:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationCircle,$Easing:$Jease$.$InWave,$Round:{$Top:1.5}},
              {$Duration:1000,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2050,$Easing:$Jease$.$InQuad},
              {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-1},{b:0,d:1200,y:300,o:1,e:{y:24,o:6}},{b:5600,d:800,y:-200,o:-1,e:{y:5}}],
              [{b:-1,d:1,o:-1},{b:400,d:800,x:200,o:1,e:{x:27,o:6}},{b:5600,d:800,x:-200,o:-1,e:{x:5}}],
              [{b:-1,d:1,o:-1},{b:400,d:800,x:-200,o:1,e:{x:27,o:6}},{b:5600,d:800,x:200,o:-1,e:{x:5}}],
              [{b:-1,d:1,o:-1},{b:1600,d:600,x:200,y:-200,o:1,e:{x:3,y:3}},{b:5600,d:800,o:-1}],
              [{b:4600,d:960,x:-204,e:{x:1}}],
              [{b:-1,d:1,sX:-1,sY:-1},{b:3400,d:400,sX:1,sY:1},{b:3800,d:300,o:-1,sX:0.1,sY:0.1}],
              [{b:-1,d:1,sX:-1,sY:-1},{b:3520,d:400,sX:1,sY:1},{b:3920,d:300,o:-1,sX:0.1,sY:0.1}],
              [{b:-1,d:1,o:-1},{b:2200,d:1200,x:-135,y:-24,o:1,e:{x:7,y:7}},{b:4600,d:640,x:-130,e:{x:1}}],
              [{b:-1,d:1,o:-1},{b:4600,d:240,x:-75,o:1},{b:4840,d:480,x:-150},{b:5320,d:240,x:-75,o:-1}],
              [{b:2800,d:600,y:70,sX:-0.5,sY:-0.5,e:{y:5}},{b:6000,d:600,y:50,r:-10},{b:7000,d:400,o:-1,rX:10,rY:-10}],
              [{b:0,d:600,x:-742,sX:4,sY:4,e:{x:6}},{b:900,d:600,sX:-4,sY:-4}],
              [{b:-1,d:1,o:-1},{b:400,d:500,o:1,e:{o:5}}],
              [{b:-1,d:1,o:-1,r:-180},{b:1500,d:500,o:1,r:180,e:{r:27}}],
              [{b:-1,d:1,o:-1,r:180},{b:2000,d:500,o:1,r:-180,e:{r:27}}],
              [{b:2800,d:600,y:-270,e:{y:6}}],
              [{b:6000,d:600,y:-100,r:-10,e:{y:6}},{b:7000,d:400,o:-1,rX:-10,rY:10}],
              [{b:-1,d:1,sX:-1,sY:-1},{b:3400,d:400,sX:1.33,sY:1.33,e:{sX:7,sY:7}},{b:3800,d:200,sX:-0.33,sY:-0.33,e:{sX:16,sY:16}}],
              [{b:-1,d:1,o:-1},{b:3400,d:600,o:1},{b:4000,d:1000,r:360,e:{r:1}}],
              [{b:-1,d:1,o:-1},{b:3400,d:600,y:-70,o:1,e:{y:27}}],
              [{b:-1,d:1,sX:-1,sY:-1},{b:3700,d:400,sX:1.33,sY:1.33,e:{sX:7,sY:7}},{b:4100,d:200,sX:-0.33,sY:-0.33,e:{sX:16,sY:16}}],
              [{b:-1,d:1,o:-1},{b:3700,d:600,o:1},{b:4300,d:1000,r:360}],
              [{b:-1,d:1,o:-1},{b:3700,d:600,x:-150,o:1,e:{x:27}}],
              [{b:-1,d:1,sX:-1,sY:-1},{b:4000,d:400,sX:1.33,sY:1.33,e:{sX:7,sY:7}},{b:4400,d:200,sX:-0.33,sY:-0.33,e:{sX:16,sY:16}}],
              [{b:-1,d:1,o:-1},{b:4000,d:600,o:1},{b:4600,d:1000,r:360}],
              [{b:-1,d:1,o:-1},{b:4000,d:600,x:150,o:1,e:{x:27}}],
              [{b:9300,d:600,o:-1,r:540,sX:-0.5,sY:-0.5,e:{r:5}}],
              [{b:-1,d:1,o:-1,sX:2,sY:2},{b:6880,d:20,o:1},{b:6900,d:300,sX:-2.08,sY:-2.08,e:{sX:27,sY:27}},{b:7200,d:240,sX:0.08,sY:0.08}],
              [{b:-1,d:1,o:-1,sX:5,sY:5},{b:6300,d:600,o:1,sX:-5,sY:-5}],
              [{b:-1,d:1,o:-1},{b:7200,d:440,o:1}],
              [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:7420,d:20,o:1},{b:7440,d:200,r:180,sX:0.4,sY:0.4},{b:7640,d:200,r:180,sX:0.5,sY:0.5}],
              [{b:-1,d:1,o:-1,r:-60,sX:-0.9,sY:-0.9},{b:7620,d:20,o:1},{b:7640,d:300,r:60,sX:1.1,sY:1.1},{b:7940,d:160,sX:-0.2,sY:-0.2}],
              [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:7920,d:20,o:1},{b:7940,d:300,sX:1.4,sY:1.4},{b:8240,d:160,sX:-0.5,sY:-0.5}],
              [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:7620,d:20,o:1},{b:7640,d:200,r:180,sX:0.4,sY:0.4},{b:7840,d:200,r:180,sX:0.5,sY:0.5}],
              [{b:-1,d:1,o:-1,r:-60,sX:-0.9,sY:-0.9},{b:7820,d:20,o:1},{b:7840,d:300,r:60,sX:1.1,sY:1.1},{b:8140,d:160,sX:-0.2,sY:-0.2}],
              [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8120,d:20,o:1},{b:8140,d:300,sX:1.4,sY:1.4},{b:8440,d:160,sX:-0.5,sY:-0.5}],
              [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:7820,d:20,o:1},{b:7840,d:200,r:180,sX:0.4,sY:0.4},{b:8040,d:200,r:180,sX:0.5,sY:0.5}],
              [{b:-1,d:1,o:-1,r:-60,sX:-0.9,sY:-0.9},{b:8020,d:20,o:1},{b:8040,d:300,r:60,sX:1.1,sY:1.1},{b:8340,d:160,sX:-0.2,sY:-0.2}],
              [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8320,d:20,o:1},{b:8340,d:300,sX:1.4,sY:1.4},{b:8640,d:160,sX:-0.5,sY:-0.5}],
              [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8020,d:20,o:1},{b:8040,d:200,r:180,sX:0.4,sY:0.4},{b:8240,d:200,r:180,sX:0.5,sY:0.5}],
              [{b:-1,d:1,o:-1,r:-60,sX:-0.9,sY:-0.9},{b:8220,d:20,o:1},{b:8240,d:300,r:60,sX:1.1,sY:1.1},{b:8540,d:160,sX:-0.2,sY:-0.2}],
              [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8520,d:20,o:1},{b:8540,d:300,sX:1.4,sY:1.4},{b:8840,d:160,sX:-0.5,sY:-0.5}],
              [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8220,d:20,o:1},{b:8240,d:200,r:180,sX:0.4,sY:0.4},{b:8440,d:200,r:180,sX:0.5,sY:0.5}],
              [{b:-1,d:1,o:-1,r:-60,sX:-0.9,sY:-0.9},{b:8420,d:20,o:1},{b:8440,d:300,r:60,sX:1.1,sY:1.1},{b:8740,d:160,sX:-0.2,sY:-0.2}],
              [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8720,d:20,o:1},{b:8740,d:300,sX:1.4,sY:1.4},{b:9040,d:160,sX:-0.5,sY:-0.5}],
              [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8220,d:20,o:1},{b:8240,d:200,r:180,sX:0.4,sY:0.4},{b:8440,d:200,r:180,sX:0.5,sY:0.5}],
              [{b:-1,d:1,o:-1,r:-60,sX:-0.9,sY:-0.9},{b:8420,d:20,o:1},{b:8440,d:300,r:60,sX:1.1,sY:1.1},{b:8740,d:160,sX:-0.2,sY:-0.2}],
              [{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8720,d:20,o:1},{b:8740,d:300,sX:1.4,sY:1.4},{b:9040,d:160,sX:-0.5,sY:-0.5}],
              [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:0,d:400,y:330,e:{y:1}},{b:900,d:400,y:50,rX:80,e:{y:1,rX:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
              [{b:-1,d:1,o:-0.5},{b:900,d:400,o:-0.5}],
              [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:1700,d:400,y:310,e:{y:1}},{b:2600,d:400,y:50,rX:80,e:{y:1,rX:1}},{b:19700,d:1000,y:20,e:{y:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
              [{b:19700,d:1000,o:-1}],
              [{b:-1,d:1,o:-0.5},{b:2600,d:400,o:-0.5}],
              [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:3400,d:400,y:290,e:{y:1}},{b:4800,d:400,y:50,rX:80,e:{y:1,rX:1}},{b:19700,d:1000,y:40,e:{y:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
              [{b:19700,d:1000,o:-1}],
              [{b:-1,d:1,c:{t:-280}},{b:3800,d:100,c:{t:50.40},e:{c:{t:32}}},{b:3900,d:100,c:{t:33.60},e:{c:{t:32}}},{b:4000,d:100,c:{t:30.80},e:{c:{t:32}}},{b:4100,d:100,c:{t:30.80},e:{c:{t:32}}},{b:4200,d:100,c:{t:33.60},e:{c:{t:32}}},{b:4300,d:100,c:{t:22.40},e:{c:{t:32}}},{b:4400,d:100,c:{t:28.00},e:{c:{t:32}}},{b:4500,d:100,c:{t:50.40},e:{c:{t:32}}}],
              [{b:-1,d:1,o:-0.5},{b:4800,d:400,o:-0.5}],
              [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:5700,d:400,y:270,e:{y:1}},{b:6600,d:400,y:50,rX:40,e:{y:1,rX:1}},{b:14700,d:500,rX:40,e:{rX:1}},{b:19700,d:1000,y:60,e:{y:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
              [{b:19700,d:1000,o:-1}],
              [{b:6600,d:400,o:-0.2},{b:14700,d:500,o:-0.8}],
              [{b:-1,d:1,o:-0.5},{b:14700,d:500,o:-0.5}],
              [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:7500,d:400,y:270,e:{y:1}},{b:8400,d:400,y:50,rX:40,e:{y:1,rX:1}},{b:14700,d:500,rX:40,e:{rX:1}},{b:19700,d:1000,y:60,e:{y:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
              [{b:8400,d:400,o:-1}],
              [{b:-1,d:1,o:-0.5},{b:8400,d:400,o:-0.5}],
              [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:9300,d:400,y:270,e:{y:1}},{b:10200,d:400,y:50,rX:40,e:{y:1}},{b:14700,d:500,rX:40,e:{rX:1}},{b:19700,d:1000,y:60,e:{y:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
              [{b:10200,d:400,o:-1}],
              [{b:-1,d:1,o:-0.5},{b:10200,d:400,o:-0.5}],
              [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:11100,d:400,y:270,e:{y:1}},{b:12000,d:400,y:50,rX:40,e:{y:1,rX:1}},{b:14700,d:500,rX:40,e:{rX:1}},{b:19700,d:1000,y:60,e:{y:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
              [{b:12000,d:400,o:-1}],
              [{b:-1,d:1,o:-0.5},{b:12000,d:400,o:-0.5}],
              [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:12900,d:400,y:270,e:{y:1}},{b:13800,d:400,y:50,rX:40,e:{y:1,rX:1}},{b:14700,d:500,rX:40,e:{rX:1}},{b:19700,d:1000,y:60,e:{y:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
              [{b:13800,d:400,o:-1}],
              [{b:-1,d:1,o:-0.5},{b:13800,d:400,o:-0.5}],
              [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:15700,d:400,y:270,e:{y:1}},{b:18800,d:400,y:30,rX:80,e:{y:1,rX:1}},{b:19700,d:1000,y:80,e:{y:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
              [{b:19700,d:1000,o:-1}],
              [{b:-1,d:1,o:-0.5},{b:18800,d:400,o:-0.5}],
              [{b:-1,d:1,o:-1},{b:16100,d:300,o:1},{b:16400,d:500,x:-238,e:{x:6}}],
              [{b:-1,d:1,o:-1},{b:16100,d:300,o:1},{b:16400,d:500,x:238,e:{x:6}}],
              [{b:-1,d:1,o:-1},{b:16700,d:400,y:200,o:1,e:{y:2,o:6}},{b:17100,d:300,y:-28,e:{y:3}},{b:17400,d:300,y:28,e:{y:2}}],
              [{b:-1,d:1,o:-1},{b:16900,d:400,y:200,o:1,e:{y:2,o:6}},{b:17300,d:300,y:-28,e:{y:3}},{b:17600,d:300,y:28,e:{y:2}}],
              [{b:-1,d:1,o:-1},{b:17100,d:400,y:200,o:1,e:{y:2,o:6}},{b:17500,d:300,y:-28,e:{y:3}},{b:17800,d:300,y:28,e:{y:2}}],
              [{b:-1,d:1,o:-1},{b:17300,d:400,y:200,o:1,e:{y:2,o:6}},{b:17700,d:300,y:-28,e:{y:3}},{b:18000,d:300,y:28,e:{y:2}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions,
                $Breaks: [
                  [{d:2000,b:5600,t:2}],
                  [{d:2000,b:9300,t:2}],
                  [{d:2000,b:22700}]
                ]
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1950);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
    </script>
    <style>
        /* jssor slider loading skin oval css */

        .jssorl-oval img {
            animation-name: jssorl-oval;
            animation-duration: 1.2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-oval {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        .jssora22l.jssora22lds      (disabled)
        .jssora22r.jssora22rds      (disabled)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
        .jssora22l.jssora22lds { background-position: -10px -31px; opacity: .3; pointer-events: none; }
        .jssora22r.jssora22rds { background-position: -70px -31px; opacity: .3; pointer-events: none; }
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1650px;height:580px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-oval" style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19.0px;position:relative;top:50%;width:38px;height:38px;" src="img/oval.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1650px;height:580px;overflow:hidden;">
            <div data-b="0">
                <img data-u="image" src="img/04.jpg" />
                <div style="position:absolute;top:107px;left:460px;width:860px;height:410px;z-index:0;">
                    <img data-u="caption" data-t="0" style="position:absolute;top:-300px;left:89px;width:210px;height:178px;z-index:0;" src="img/mock-pc.png" />
                    <img data-u="caption" data-t="1" style="position:absolute;top:55px;left:-200px;width:200px;height:144px;z-index:0;" src="img/mock-ipad.png" />
                    <img data-u="caption" data-t="2" style="position:absolute;top:88px;left:420px;width:320px;height:320px;z-index:0;" src="img/mock-laptop.png" />
                </div>
                <div data-u="caption" data-t="3" data-to="0% 100%" style="position:absolute;top:385px;left:-100px;width:257px;height:127px;z-index:0;">
                    <div style="position:absolute;top:4px;left:34px;width:198px;height:112px;z-index:0; overflow:hidden;">
                        <img data-u="caption" data-t="4" style="position:absolute;top:-2px;left:-2px;width:408px;height:116px;z-index:0;" src="img/mock-phone-slider-flat.jpg" />
                    </div>
                    <img style="position:absolute;top:0px;left:0px;width:257px;height:127px;z-index:0;" src="img/mock-phone.png" />
                    <img data-u="caption" data-t="5" style="position:absolute;top:22px;left:139px;width:108px;height:108px;z-index:0;" src="img/circle-hollow.png" />
                    <img data-u="caption" data-t="6" style="position:absolute;top:31px;left:148px;width:90px;height:90px;z-index:0;" src="img/circle-solid.png" />
                    <img data-u="caption" data-t="7" style="position:absolute;top:100px;left:300px;width:63px;height:77px;z-index:0;" src="img/hand.png" />
                    <img data-u="caption" data-t="8" style="position:absolute;top:-44px;left:255px;width:75px;height:20px;z-index:0;" src="img/swipe-arrow.png" />
                </div>
                <!--<a href="http://www.jssor.com/help/slideshow-transitions.php" target="_blank" style="display:block; position:absolute;top:22px;left:600px;width:320px;height:36px;z-index:0;font-size:22px;color:#ffffff;line-height:36px;">300+ Slideshow Transitions</a>-->
            </div>
            <div data-b="1" data-p="170.00">
                <img data-u="image" src="img/02.jpg" />
                <div data-u="caption" data-t="9" data-3d="1" style="position:absolute;top:150px;left:-36px;width:1053px;height:150px;z-index:0;">
                    <div data-u="caption" data-t="10" data-to="100% 50%" style="position:absolute;top:0px;left:1030px;width:72px;height:72px;z-index:0;background-color:#eb9434;">
                        <div data-u="caption" data-t="11" style="position:absolute;top:0px;left:0px;width:72px;height:72px;z-index:0;font-size:46px;color:#ffffff;line-height:72px;text-align:center;">All

                        </div>
                    </div>
                    <div data-u="caption" data-t="12" data-to="0% 50%" style="position:absolute;top:0px;left:360px;width:175px;height:72px;z-index:0;background-color:#eb9434;font-size:45px;color:#ffffff;line-height:72px;text-align:center;">Wallets

                    </div>
                    <div data-u="caption" data-t="13" data-to="0% 50%" style="position:absolute;top:0px;left:535px;width:230px;height:72px;z-index:0;background-color:#eb9434;font-size:45px;color:#ffffff;line-height:72px;text-align:center;">Available

                    </div>
                    <!--<div data-u="caption" data-t="14" style="position:absolute;top:360px;left:238px;width:577px;height:30px;z-index:0;font-size:24px;color:#ffffff;line-height:30px;text-align:center;">Jssor Slider is one of the most reliable sliders</div>-->
                </div>
                <div data-u="caption" data-t="15" data-3d="1" style="position:absolute;top:70px;left:182px;width:616px;height:150px;z-index:0;">
                    <img data-u="caption" data-t="16" style="position:absolute;top:22px;left:266px;width:84px;height:84px;z-index:0;" src="img/ios.png" />
                    <img data-u="caption" data-t="17" style="position:absolute;top:16px;left:260px;width:96px;height:96px;z-index:0;" src="img/circle.png" />
                    <div data-u="caption" data-t="18" style="position:absolute;top:195px;left:260px;width:96px;height:30px;z-index:0;font-size:18px;color:#ffffff;line-height:30px;text-align:center;">IOS</div>
                    <img data-u="caption" data-t="19" style="position:absolute;top:22px;left:22px;width:84px;height:84px;z-index:0;" src="img/android.png" />
                    <img data-u="caption" data-t="20" style="position:absolute;top:16px;left:16px;width:96px;height:96px;z-index:0;" src="img/circle.png" />
                    <div data-u="caption" data-t="21" style="position:absolute;top:125px;left:166px;width:96px;height:30px;z-index:0;font-size:18px;color:#ffffff;line-height:30px;text-align:center;">Android</div>
                    <img data-u="caption" data-t="22" style="position:absolute;top:22px;left:510px;width:84px;height:84px;z-index:0;" src="img/windows.png" />
                    <img data-u="caption" data-t="23" style="position:absolute;top:16px;left:504px;width:96px;height:96px;z-index:0;" src="img/circle.png" />
                    <div data-u="caption" data-t="24" style="position:absolute;top:125px;left:354px;width:96px;height:30px;z-index:0;font-size:18px;color:#ffffff;line-height:30px;text-align:center;">Windows</div>
                </div>
                <!--<div style="position:absolute;top:20px;left:327px;width:336px;height:312px;z-index:0;">
                    <div data-u="caption" data-t="25" style="position:absolute;top:82px;left:104px;width:128px;height:147px;z-index:0;">
                        <img data-u="caption" data-t="26" style="position:absolute;top:0px;left:0px;width:128px;height:147px;z-index:0;" src="img/hexagon-hollow-big.png" />
                        <img data-u="caption" data-t="27" style="position:absolute;top:9px;left:8px;width:112px;height:129px;z-index:0;" src="img/hexagon-solid-yellow.png" />
                        <div data-u="caption" data-t="28" style="position:absolute;top:20px;left:0px;width:128px;height:90px;z-index:0;font-size:20px;line-height:30px;text-align:center;">All
<br />
                            Browsers
<br />
                            Supported
                        </div>
                    </div>
                    <div style="position:absolute;top:0px;left:187px;width:90px;height:104px;z-index:0;">
                        <img data-u="caption" data-t="29" style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;" src="img/hexagon-hollow.png" />
                        <img data-u="caption" data-t="30" style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;" src="img/hexagon-solid.png" />
                        <img data-u="caption" data-t="31" style="position:absolute;top:33px;left:26px;width:38px;height:38px;z-index:0;" src="img/opera.png" />
                    </div>
                    <div style="position:absolute;top:104px;left:246px;width:90px;height:104px;z-index:0;">
                        <img data-u="caption" data-t="32" style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;" src="img/hexagon-hollow.png" />
                        <img data-u="caption" data-t="33" style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;" src="img/hexagon-solid.png" />
                        <img data-u="caption" data-t="34" style="position:absolute;top:33px;left:26px;width:38px;height:38px;z-index:0;" src="img/firefox.png" />
                    </div>
                    <div style="position:absolute;top:208px;left:187px;width:90px;height:104px;z-index:0;">
                        <img data-u="caption" data-t="35" style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;" src="img/hexagon-hollow.png" />
                        <img data-u="caption" data-t="36" style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;" src="img/hexagon-solid.png" />
                        <img data-u="caption" data-t="37" style="position:absolute;top:33px;left:26px;width:38px;height:38px;z-index:0;" src="img/ie.png" />
                    </div>
                    <div style="position:absolute;top:208px;left:59px;width:90px;height:104px;z-index:0;">
                        <img data-u="caption" data-t="38" style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;" src="img/hexagon-hollow.png" />
                        <img data-u="caption" data-t="39" style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;" src="img/hexagon-solid.png" />
                        <img data-u="caption" data-t="40" style="position:absolute;top:33px;left:26px;width:38px;height:38px;z-index:0;" src="img/edge.png" />
                    </div>
                    <div style="position:absolute;top:104px;left:0px;width:90px;height:104px;z-index:0;">
                        <img data-u="caption" data-t="41" style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;" src="img/hexagon-hollow.png" />
                        <img data-u="caption" data-t="42" style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;" src="img/hexagon-solid.png" />
                        <img data-u="caption" data-t="43" style="position:absolute;top:33px;left:26px;width:38px;height:38px;z-index:0;" src="img/safari.png" />
                    </div>
                    <div style="position:absolute;top:0px;left:59px;width:90px;height:104px;z-index:0;">
                        <img data-u="caption" data-t="44" style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;" src="img/hexagon-hollow.png" />
                        <img data-u="caption" data-t="45" style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;" src="img/hexagon-solid.png" />
                        <img data-u="caption" data-t="46" style="position:absolute;top:33px;left:28px;width:38px;height:38px;z-index:0;" src="img/chrome.png" />
                    </div>
                </div>-->
            </div>
            <!--<div data-b="2" data-p="816.0">
                <img data-u="image" src="img/01.jpg" />
                <div data-u="caption" data-t="47" data-3d="1" style="position:absolute;top:-210px;left:200px;width:580px;height:225px;z-index:0;">
                    <img style="position:absolute;top:0px;left:0px;width:580px;height:225px;z-index:0;" src="img/main.jpg" />
                    <div data-u="caption" data-t="48" style="position:absolute;top:30px;left:30px;width:180px;height:40px;z-index:0;background-color:#000000;font-size:22px;color:#ffffff;line-height:40px;text-align:center;">Main Image</div>
                </div>
                <div data-u="caption" data-t="49" data-3d="1" style="position:absolute;top:-210px;left:200px;width:580px;height:225px;z-index:0;">
                    <img data-u="caption" data-t="50" style="position:absolute;top:0px;left:0px;width:580px;height:225px;z-index:0;" src="img/layer-blurred-white.png" />
                    <img style="position:absolute;top:140px;left:170px;width:55px;height:51px;z-index:0;" src="img/butterfly-light-yellow.png" />
                    <div data-u="caption" data-t="51" style="position:absolute;top:30px;left:30px;width:180px;height:40px;z-index:0;background-color:#000000;font-size:22px;color:#ffffff;line-height:40px;text-align:center;">Image Layer</div>
                </div>
                <div data-u="caption" data-t="52" data-3d="1" style="position:absolute;top:-210px;left:200px;width:580px;height:225px;z-index:0;">
                    <img data-u="caption" data-t="53" style="position:absolute;top:0px;left:0px;width:580px;height:225px;z-index:0;" src="img/layer-blurred-white.png" />
                    <div data-u="caption" data-t="54" style="position:absolute;top:100px;left:30px;width:280px;height:50px;z-index:0;font-size:40px;line-height:50px;text-align:center;">SOME TEXT</div>
                    <div data-u="caption" data-t="55" style="position:absolute;top:30px;left:30px;width:180px;height:40px;z-index:0;background-color:#000000;font-size:22px;color:#ffffff;line-height:40px;text-align:center;">Text layer</div>
                </div>
                <div data-u="caption" data-t="56" data-3d="1" style="position:absolute;top:-210px;left:200px;width:580px;height:225px;z-index:0;">
                    <img data-u="caption" data-t="57" style="position:absolute;top:0px;left:0px;width:580px;height:225px;z-index:0;" src="img/layer-blurred-white.png" />
                    <div data-u="caption" data-t="58" style="position:absolute;top:25px;left:240px;width:300px;height:175px;z-index:0;background-color:#ffff8c;"></div>
                    <div data-u="caption" data-t="59" style="position:absolute;top:30px;left:30px;width:180px;height:40px;z-index:0;background-color:#000000;font-size:22px;color:#ffffff;line-height:40px;text-align:center;">Panel Layer</div>
                </div>
                <div data-u="caption" data-t="60" data-3d="1" style="position:absolute;top:-210px;left:200px;width:580px;height:225px;z-index:0;">
                    <img data-u="caption" data-t="61" style="position:absolute;top:0px;left:0px;width:580px;height:225px;z-index:0;" src="img/layer-blurred-white.png" />
                    <div data-u="caption" data-t="62" style="position:absolute;top:30px;left:30px;width:250px;height:40px;z-index:0;background-color:#000000;font-size:22px;color:#ffffff;line-height:40px;text-align:center;">Nested Text Layer</div>
                    <div style="position:absolute;top:40px;left:320px;width:200px;height:50px;z-index:0;font-size:26px;line-height:50px;text-align:center;">Nested Text</div>
                </div>
                <div data-u="caption" data-t="63" data-3d="1" style="position:absolute;top:-210px;left:200px;width:580px;height:225px;z-index:0;">
                    <img data-u="caption" data-t="64" style="position:absolute;top:0px;left:0px;width:580px;height:225px;z-index:0;" src="img/layer-blurred-white.png" />
                    <div data-u="caption" data-t="65" style="position:absolute;top:30px;left:30px;width:250px;height:40px;z-index:0;background-color:#000000;font-size:22px;color:#ffffff;line-height:40px;text-align:center;">Nested Image Layer</div>
                    <img style="position:absolute;top:78px;left:249px;width:87px;height:92px;z-index:0;" src="img/butterfly-blue.png" />
                </div>
                <div data-u="caption" data-t="66" data-3d="1" style="position:absolute;top:-210px;left:200px;width:580px;height:225px;z-index:0;">
                    <img data-u="caption" data-t="67" style="position:absolute;top:0px;left:0px;width:580px;height:225px;z-index:0;" src="img/layer-blurred-white.png" />
                    <div data-u="caption" data-t="68" style="position:absolute;top:30px;left:30px;width:250px;height:40px;z-index:0;background-color:#000000;font-size:22px;color:#ffffff;line-height:40px;text-align:center;">Nested Image Layer</div>
                    <img style="position:absolute;top:126px;left:364px;width:66px;height:66px;z-index:0;" src="img/butterfly-dark-yellow.png" />
                </div>
                <div data-u="caption" data-t="69" data-3d="1" style="position:absolute;top:-210px;left:200px;width:580px;height:225px;z-index:0;">
                    <img data-u="caption" data-t="70" style="position:absolute;top:0px;left:0px;width:580px;height:225px;z-index:0;" src="img/layer-blurred-white.png" />
                    <div data-u="caption" data-t="71" style="position:absolute;top:30px;left:30px;width:250px;height:40px;z-index:0;background-color:#000000;font-size:22px;color:#ffffff;line-height:40px;text-align:center;">Nested Image Layer</div>
                    <img style="position:absolute;top:113px;left:463px;width:48px;height:49px;z-index:0;" src="img/butterfly-red.png" />
                </div>
                <div data-u="caption" data-t="72" data-3d="1" style="position:absolute;top:-210px;left:200px;width:580px;height:225px;z-index:0;">
                    <img data-u="caption" data-t="73" style="position:absolute;top:0px;left:0px;width:580px;height:225px;z-index:0;" src="img/layer-blurred-white.png" />
                    <div data-u="caption" data-t="74" style="position:absolute;top:30px;left:30px;width:200px;height:40px;z-index:0;background-color:#000000;font-size:22px;color:#ffffff;line-height:40px;text-align:center;">Arrow/Bullets</div>
                    <img data-u="caption" data-t="75" style="position:absolute;top:93px;left:250px;width:18px;height:38px;z-index:0;" src="img/arrow-left.png" />
                    <img data-u="caption" data-t="76" style="position:absolute;top:93px;left:312px;width:18px;height:38px;z-index:0;" src="img/arrow-right.png" />
                    <img data-u="caption" data-t="77" style="position:absolute;top:0px;left:259px;width:8px;height:8px;z-index:0;" src="img/dot.png" />
                    <img data-u="caption" data-t="78" style="position:absolute;top:0px;left:277px;width:8px;height:8px;z-index:0;" src="img/dot.png" />
                    <img data-u="caption" data-t="79" style="position:absolute;top:0px;left:295px;width:8px;height:8px;z-index:0;" src="img/dot.png" />
                    <img data-u="caption" data-t="80" style="position:absolute;top:0px;left:313px;width:8px;height:8px;z-index:0;" src="img/dot.png" />
                </div>
               <!-- <a href="http://www.jssor.com/demos/introduction-slider.slider/=edit" target="_blank" style="display:block; position:absolute;top:22px;left:500px;width:220px;height:36px;z-index:0;font-size:22px;color:#ffffff;line-height:36px;text-align:center;">Edit This Slider</a>
                <a href="https://www.jssor.com/action/sign_up.aspx" target="_blank" style="display:block; position:absolute;top:22px;left:720px;width:220px;height:36px;z-index:0;font-size:22px;color:#ffffff;line-height:36px;text-align:center;">Sign up Now!</a>
            </div>-->
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:10px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:10px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
</div>
  
  
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
                                              <div class="widget gsc-heading  align-center style-1 text-dark  wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="title-icon"><span><i class="fa fa-money"></i></span></div>
                                                <h2 class="title"><span>Getting Started with Amazeecoin</span></h2>
                                                <div class="line"></div>
                                                <div class="title-desc">Amazeecoin is a decentralized platform that run accurately as programmed without any peril of downtime, restriction, deceit or third party intervention.</div>
                                              </div>
                                              <div class="clearfix"></div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="gsc-column col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                          <div class="column-inner  bg-size-cover">
                                            <div class="column-content-inner">
                                              <div class="widget gsc-icon-box box-card-left text-dark wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                                                <div class="highlight-icon"><span class="icon fa fa-building"></span></div>
                                                <div class="highlight_content"> <a href="#">
                                                  <h4>
About</h4>
                                                  </a>
                                                  <div class="desc">Amazeecoin is a distinctive fully-incentivized peer-to-peer set-up. Miners are pleased</div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="gsc-column col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                          <div class="column-inner  bg-size-cover">
                                            <div class="column-content-inner">
                                              <div class="widget gsc-icon-box box-card-left text-dark wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="highlight-icon"><span class="icon fa fa-users "></span></div>
                                                <div class="highlight_content"> <a href="#">
                                                  <h4>Management</h4>
                                                  </a>
                                                  <div class="desc">A team of professionally qualified engineers with vast experience in design and delivering the product. </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="gsc-column col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                          <div class="column-inner  bg-size-cover">
                                            <div class="column-content-inner">
                                              <div class="widget gsc-icon-box box-card-left text-dark wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                                                <div class="highlight-icon"><span class="icon fa fa-life-ring"></span></div>
                                                <div class="highlight_content"> <a href="#">
                                                  <h4>Technology</h4>
                                                  </a>
                                                  <div class="desc">Amazeecoin is decentralized cryptocurrency that provides transparent transaction </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        
                                        <div class="gsc-column col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                          <div class="column-inner  bg-size-cover">
                                            <div class="column-content-inner">
                                              <div class="widget gsc-icon-box box-card-left text-dark wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                                                <div class="highlight-icon"><span class="icon fa fa-database"></span></div>
                                                <div class="highlight_content"> <a href="#">
                                                  <h4>Investors</h4>
                                                  </a>
                                                  <div class="desc">Top techno peoples, with focus on the future of the technology are back bone of Amazeecoin</div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        
                                        <div class="gsc-column col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                          <div class="column-inner  bg-size-cover">
                                            <div class="column-content-inner">
                                              <div class="widget gsc-icon-box box-card-left text-dark wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                                                <div class="highlight-icon"><span class="icon fa fa-code"></span></div>
                                                <div class="highlight_content"> <a href="#">
                                                  <h4>Developers</h4>
                                                  </a>
                                                  <div class="desc">Our engineers are the pioneer of the fundamental technical ideology who designs the procedure.</div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        
                                        <div class="gsc-column col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                          <div class="column-inner  bg-size-cover">
                                            <div class="column-content-inner">
                                              <div class="widget gsc-icon-box box-card-left text-dark wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                                                <div class="highlight-icon"><span class="icon fa fa-sun-o"></span></div>
                                                <div class="highlight_content"> <a href="#">
                                                  <h4>Regulators</h4>
                                                  </a>
                                                  <div class="desc">Amazeecoin is getting regulated with respect to the local government regulation in most of the countries</div>
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
                            
                            <div class="update">
                              <div class="container">
                                <div class="widget gsc-heading  align-center style-1 text-dark  wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="title-icon"><span><i class="fa fa-money"></i></span></div>
                                                <h2 class="title"><span>Bitcoin Updated</span></h2>
                                                <div class="line"></div>
                                                <div class="title-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </div>
                                              </div>
                                              
                                              
                                              <p><img src="images/update.png" /></p>
                                              
                              </div>
                            </div>
                            
                            
                            
                            <div class="gbb-row-wrapper">
                              <div class=" gbb-row bg-size-cover" style="background-color:#F6F9FC">
                                <div class="bb-inner default">
                                  <div class="bb-container container">
                                    <div class="row">
                                      <div class="row-wrapper clearfix">
                                        <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="column-inner  bg-size-cover">
                                            <div class="column-content-inner">
                                              <div class="widget gsc-heading  align-center style-1 text-dark  wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                                <p class="title-sub">What Is Next For AmazeeCoin</p>
                                                <h2 class="title"><span>Markets</span></h2>
                                                <div class="line"></div>
                                                <div class="title-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</div>
                                              </div>
                                              <div class="clearfix"></div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="column-inner  bg-size-cover">
                                            <div class="column-content-inner">
                                              <div class="gsc-workprocess  wow fadeInUp" id="workprocess-xqbvm" style="visibility: visible; animation-name: fadeInUp;">
                                                <ul class="service-timeline post-area">
                                                  <li class="entry-timeline clearfix">
                                                    <div class="hentry skrollable skrollable-between" data-bottom-top="opacity: 0;" data-center-bottom="opacity: 1;" data-top-bottom="opacity: 0;" style="opacity: 0.358696;">
                                                      <div class="icon"><span class="fa fa-chain"></span></div>
                                                      <div class="hentry-box clearfix">
                                                        <div class="content-inner">
                                                          <div class="title">Coin Markets</div>
                                                          <div class="content">To understand the significance of a capitalization to a market, one must understand what a market capitalization is and how it is</div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="entry-timeline clearfix">
                                                    <div class="hentry skrollable skrollable-before" data-bottom-top="opacity: 0;" data-center-bottom="opacity: 1;" data-top-bottom="opacity: 0;" style="opacity: 0;">
                                                      <div class="icon"><span class="fa fa-pencil"></span></div>
                                                      <div class="hentry-box clearfix">
                                                        <div class="content-inner">
                                                          <div class="title">Exchanges</div>
                                                          <div class="content">Open, organized marketplace (such as a stock exchange) where buyers and sellers negotiate prices. Exchanges require an almost instant... </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="entry-timeline clearfix">
                                                    <div class="hentry skrollable skrollable-before" data-bottom-top="opacity: 0;" data-center-bottom="opacity: 1;" data-top-bottom="opacity: 0;" style="opacity: 0;">
                                                      <div class="icon"><span class="fa fa-gamepad"></span></div>
                                                      <div class="hentry-box clearfix">
                                                        <div class="content-inner">
                                                          <div class="title">Global Charts</div>
                                                          <div class="content">Provides the various growth rates of Amazeecoin in different countries based on the demand and supply of the users buy and sell needs. </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="entry-timeline clearfix">
                                                    <div class="hentry skrollable skrollable-before" data-bottom-top="opacity: 0;" data-center-bottom="opacity: 1;" data-top-bottom="opacity: 0;" style="opacity: 0;">
                                                      <div class="icon"><span class="fa fa-gift"></span></div>
                                                      <div class="hentry-box clearfix">
                                                        <div class="content-inner">
                                                          <div class="title">Trade</div>
                                                          <div class="content">Trade is a basic economic concept involving the buying and selling of goods and services, or the exchange of goods or services between </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
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
                            </div>
							
							<div class="service bb-inner" style="padding:60px 0;">
							  <div class="container">
							    <div class="widget gsc-heading  align-center style-1 text-dark  wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                                <p class="title-sub">Services For For AmazeeCoin</p>
                                                <h2 class="title"><span>Our Services</span></h2>
                                                <div class="line"></div>
                                                <div class="title-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</div>
                                              </div>
											  
											  
											  
											  <div class="serve col-md-4">
											  
												<div class="icnnt col-md-12">
												 <p align="center"><img src="images/cloud.png" class="img-responsive" /></p>
												  <h5>Bitcoin Cloud Mining</h5>
												   <p>Cloud mining is a brand new concept allowing you to get Bitcoins instantly without hardware dependence and other offline issues.</P>
												</div>
												
											  </div>
											  
											   <div class="serve col-md-4">
											   
												<div class="icnnt col-md-12">
												 <p align="center"><img src="images/money-bag.png" class="img-responsive" /></p>
												  <h5>Other Coins Mining</h5>
												   <p>Cloud mining is a brand new concept allowing you to get Bitcoins instantly without hardware dependence and other offline issues.</P>
												</div>
												
											  </div>
											  
											   <div class="serve col-md-4">
											    
												
												<div class="icnnt col-md-12">
												 <p align="center"><img src="images/actions.png" class="img-responsive" /></p>
												  <h5>Bitcoin Trade Services</h5>
												   <p>Cloud mining is a brand new concept allowing you to get Bitcoins instantly without hardware dependence and other offline issues.</P>
												</div>
												
											  </div>
											  
											   <div class="serve col-md-4">
											    
												
												<div class="icnnt col-md-12">
												 <p align="center"><img src="images/cable.png" class="img-responsive" /></p>
												  <h5>INSTANT CONNECT</h5>
												   <p>Cloud mining is a brand new concept allowing you to get Bitcoins instantly without hardware dependence and other offline issues.</P>
												</div>
												
											  </div>
											  
											   <div class="serve col-md-4">
											   
												<div class="icnnt col-md-12">
												 <p align="center"><img src="images/money.png" class="img-responsive" /></p>
												  <h5>DIRECT WITHDRAWAL</h5>
												   <p>Cloud mining is a brand new concept allowing you to get Bitcoins instantly without hardware dependence and other offline issues.</P>
												</div>
												
											  </div>
											  
											   <div class="serve col-md-4">
											   
												<div class="icnnt col-md-12">
												 <p align="center"><img src="images/cloud.png" class="img-responsive" /></p>
												  <h5>DETAILED STATISTICS</h5>
												   <p>Cloud mining is a brand new concept allowing you to get Bitcoins instantly without hardware dependence and other offline issues.</P>
												</div>
												
											  </div>
											  
							  </div>
							</div>
							
                            <div class="gbb-row-wrapper" style="background: #f6f9fc;">
                              <div class=" gbb-row gva-parallax-background  bg-size-cover" style="padding-top:30px;padding-bottom:30px;background-image:url(/sites/default/files/gbb-uploads/xAmazeeCoin_Worldwide_2-mw00ky.jpg.pagespeed.ic.YevghwvWRf.jpg);background-repeat:no-repeat;background-position:center center">
                                <div class="bb-inner default">
                                  <div class="bb-container container">
                                    <div class="row">
                                      <div class="row-wrapper clearfix">
                                        <div class="gsc-column col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                          <div class="column-inner  bg-size-cover">
                                            <div class="column-content-inner">
                                              <div class="widget milestone-block  icon-top text-dark wow fadeInUp" style="visibility: hidden; animation-name: none;">
                                                <div class="milestone-icon"><span class="fa fa-clock-o"></span></div>
                                                <div class="milestone-right">
                                                  <div class="milestone-number">3</div>
                                                  <div class="milestone-text">Development Years</div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="gsc-column col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                          <div class="column-inner  bg-size-cover">
                                            <div class="column-content-inner">
                                              <div class="widget milestone-block  icon-top text-dark wow fadeInUp" style="visibility: hidden; animation-name: none;">
                                                <div class="milestone-icon"><span class="fa fa-globe"></span></div>
                                                <div class="milestone-right">
                                                  <div class="milestone-number">82</div>
                                                  <div class="milestone-text">Countries</div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="gsc-column col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                          <div class="column-inner  bg-size-cover">
                                            <div class="column-content-inner">
                                              <div class="widget milestone-block  icon-top text-dark wow fadeInUp" style="visibility: hidden; animation-name: none;">
                                                <div class="milestone-icon"><span class="fa fa-signal"></span></div>
                                                <div class="milestone-right">
                                                  <div class="milestone-number">3456</div>
                                                  <div class="milestone-text">Global Nodes</div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="gsc-column col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                          <div class="column-inner  bg-size-cover">
                                            <div class="column-content-inner">
                                              <div class="widget milestone-block  icon-top text-dark wow fadeInUp" style="visibility: hidden; animation-name: none;">
                                                <div class="milestone-icon"><span class="fa fa-cubes"></span></div>
                                                <div class="milestone-right">
                                                  <div class="milestone-number">3354832</div>
                                                  <div class="milestone-text">Blocks</div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div style="background-repeat: no-repeat; background-position: center center; top: -50%;" class="gva-parallax-inner skrollable bg-size-cover skrollable-before" data-bottom-top="top: -50%;" data-top-bottom="top: 0%;"></div>
                              </div>
                            </div>
							
							
							<div class="why" style="padding:60px 0;">
							  <div class="container">
							      <div class="widget gsc-heading  align-center style-1 text-dark  wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                                <p class="title-sub">Why Choose AmazeeCoin</p>
                                                <h2 class="title"><span>Why Choose Us</span></h2>
                                                <div class="line"></div>
                                                <div class="title-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</div>
                                              </div>
								 
								   <div class="enterpre col-md-3">
								     <img src="images/selection.png" />
									   <h5 class="ent">EASY START</h5>
									     <p>Very easy to start and no headache of maintenance.</p>
								   </div>
								   
								   <div class="enterpre col-md-3">
								     <img src="images/get-money.png" />
									   <h5 class="ent">MAXIMUM PROFIT</h5>
									     <p>Very easy to start and no headache of maintenance.</p>
								   </div>
								   
								   <div class="enterpre col-md-3">
								     <img src="images/tag.png" />
									   <h5 class="ent">LOWEST PRICES</h5>
									     <p>Very easy to start and no headache of maintenance.</p>
								   </div>
								   
								   <div class="enterpre col-md-3">
								     <img src="images/support.png" />
									   <h5 class="ent">24X7 SUPPORT</h5>
									     <p>Very easy to start and no headache of maintenance.</p>
								   </div>
								   
								   <div class="enterpre col-md-3">
								     <img src="images/budget.png" />
									   <h5 class="ent">Cost</h5>
									     <p>Lowest total cost of settlement</p>
								   </div>
								   
								   <div class="enterpre col-md-3">
								     <img src="images/search.png" />
									   <h5 class="ent">Certainty </h5>
									     <p>Real-time traceability of funds</p>
								   </div>
								   
								   <div class="enterpre col-md-3">
								     <img src="images/races.png" />
									   <h5 class="ent">Speed</h5>
									     <p>Instant settlement</p>
								   </div>
								   
								   <div class="enterpre col-md-3">
								     <img src="images/key.png" />
									   <h5 class="ent">Access</h5>
									     <p>Direct bank to bank settlement</p>
								   </div>
								 
							  </div>
							</div>
							
                            <div class="gbb-row-wrapper">
                              <div class=" gbb-row bg-size-cover" style="background-color:#f5f5f5">
                                <div class="bb-inner default">
                                  <div class="bb-container container">
                                    <div class="row">
                                      <div class="row-wrapper clearfix">
                                        <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="column-inner  bg-size-cover">
                                            <div class="column-content-inner">
                                              <div class="widget gsc-heading  align-center style-1 text-dark  wow fadeInUp" style="visibility: hidden; animation-name: none;">
                                                <div class="title-icon"><span><i class="fa fa-android"></i></span></div>
                                                <h2 class="title"><span>AmazeeCoin Applications</span></h2>
                                                <div class="line"></div>
                                                <div class="title-desc">Check out some of the most innovative applications built utilizing the AmazeeCoin blockchain below</div>
                                              </div>
                                              <div class="clearfix"></div>
                                              <div>
                                                <div class="widget block gsc-block-view  gsc-block-drupal block-view title-align-left  text-dark remove-margin-off wow zoomIn" style="visibility: hidden; animation-name: none;">
                                                  <div class="views-element-container">
                                                    <div class="gva-view js-view-dom-id-959918c3cc97783f124b6be9a47a892f5fd646a0e6cb7d5b1fcda66370731719">
                                                      <div data-drupal-views-infinite-scroll-content-wrapper="" class="views-infinite-scroll-content-wrapper clearfix">
                                                        <div>
                                                          <nav class="portfolio-filter">
                                                            <ul class="nav nav-tabs">
                                                              <li><a class="btn-filter jotr2 all active" href="#" data-filter="*"><span>All</span></a></li>
                                                              <!--<li class="13"><a href="#" class="btn-filter jotr2" data-filter=".13"><span> Apps</span></a></li>-->
                                                              <li class="14"><a href="#" class="btn-filter jotr2" data-filter=".14"><span>Exchanges</span></a></li>
                                                              <li class="15"><a href="#" class="btn-filter jotr2" data-filter=".15"><span>Mining</span></a></li>
                                                              <li class="16"><a href="#" class="btn-filter jotr2" data-filter=".16"><span>Other</span></a></li>
                                                            </ul>
                                                          </nav>
                                                          <div class="gva-portfolio-items clearfix">
                                                            <div class="row">
                                                              <div class="isotope-items view-portfolio" data-pid="jotr2" data-drupal-views-infinite-scroll-content-wrapper-gvaloadmore="" style="position: relative; height: 553px;">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  14" style="position: absolute; left: 0px; top: 0px;">
                                                                  <div class="views-field views-field-nothing">
                                                                    <div class="field-content">
                                                                      <div class="portfolio-block portfolio-v1 isotope-item margin-bottom-30 grid">
                                                                        <div class="simpleslider">
                                                                          <ul>
                                                                            <li>
                                                                              <div class="item"> <a href="/bittrex"><img src="images/x1421.png" alt="Buy and sell Digibyte" typeof="Image"></a></div>
                                                                            </li>
                                                                          </ul>
                                                                        </div>
                                                                        <div class="content">
                                                                          <div class="content-inner">
                                                                            <div class="category"><a href="/portfolio/illustration" hreflang="en">Exchanges</a> </div>
                                                                            <div class="title"><a href="/bittrex" hreflang="en">BITTREX</a></div>
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  15" style="position: absolute; left: 398px; top: 0px;">
                                                                  <div class="views-field views-field-nothing">
                                                                    <div class="field-content">
                                                                      <div class="portfolio-block portfolio-v1 isotope-item margin-bottom-30 grid">
                                                                        <div class="simpleslider">
                                                                          <ul>
                                                                            <li>
                                                                              <div class="item"> <a href="/blocksfactory"><img src="images/xmining-1024x682.jpg" alt="Start mining Digibyte at The Blocksfactory" typeof="Image"></a></div>
                                                                            </li>
                                                                          </ul>
                                                                        </div>
                                                                        <div class="content">
                                                                          <div class="content-inner">
                                                                            <div class="category"><a href="/portfolio/logo" hreflang="en">Mining</a> </div>
                                                                            <div class="title"><a href="/blocksfactory" hreflang="en">The Blocksfactory</a></div>
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  14" style="position: absolute; left: 797px; top: 0px;">
                                                                  <div class="views-field views-field-nothing">
                                                                    <div class="field-content">
                                                                      <div class="portfolio-block portfolio-v1 isotope-item margin-bottom-30 grid">
                                                                        <div class="simpleslider">
                                                                          <ul>
                                                                            <li>
                                                                              <div class="item"> <a href="/poloniex"><img src="images/xiYTUEFd.png" alt="Buy and sell Digbyte." typeof="Image"></a></div>
                                                                            </li>
                                                                          </ul>
                                                                        </div>
                                                                        <div class="content">
                                                                          <div class="content-inner">
                                                                            <div class="category"><a href="/portfolio/illustration" hreflang="en">Exchanges</a> </div>
                                                                            <div class="title"><a href="/poloniex" hreflang="en">Poloniex</a></div>
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
                                                      <ul class="js-pager__items pager" data-drupal-views-infinite-scroll-pager="">
                                                        <li class="pager__item"> <a class="button" href="/home-1?page=1" title="Go to next page" rel="next">Load More</a> </li>
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
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            
                            
                            <div class="video">
                             <div class="widget gsc-heading  align-center style-1 text-dark  wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                                
                                                <h2 class="title"><span>Watch The Video</span></h2>
                                                <div class="line"></div>
                                               
                                              </div>
<iframe width="100%" height="450" src="https://www.youtube.com/embed/DfoyuBTudDs" frameborder="0" allowfullscreen></iframe>

                            </div>
                            
                            
                            
                            <div class="gbb-row-wrapper">
                              <div class=" gbb-row bg-size-cover" style="background-color:#2a2a2a;background-image:url(/sites/default/files/gbb-uploads/xAmazeeCoin_Worldwide_-tsxor9.jpg.pagespeed.ic.FlJkNuQJQF.jpg);background-repeat:no-repeat;background-position:center top">
                                <div class="bb-inner default">
                                  <div class="bb-container container">
                                    <div class="row">
                                      <div class="row-wrapper clearfix">
                                        <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="column-inner  bg-size-cover">
                                            <div class="column-content-inner">
                                              <div class="widget gsc-heading  align-center style-1 text-light  wow fadeInUp" style="visibility: hidden; animation-name: none;">
                                                <div class="title-icon"><span><i class="fa fa-cubes"></i></span></div>
                                                <h2 class="title"><span>AmazeeCoin Blockchain Potential</span></h2>
                                                <div class="line"></div>
                                                <div class="title-desc">The AmazeeCoin blockchain has the ability to improve, secure and change almost every industry across the globe</div>
                                              </div>
                                              <div class="clearfix"></div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="gsc-column col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                          <div class="column-inner  bg-size-cover">
                                            <div class="column-content-inner">
                                              <div class="widget gsc-icon-box top-center text-dark wow fadeInUp" style="background-color: rgb(245, 245, 245); visibility: hidden; animation-name: none;">
                                                <div class="highlight-icon"><span class="icon fa fa-hourglass-start"></span></div>
                                                <div class="highlight_content"> <a href="#">
                                                  <h4>Core Protocol </h4>
                                                  </a>
                                                  <div class="desc">Advanced scalability, speed &amp; multi-algo mining.</div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="gsc-column col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                          <div class="column-inner  bg-size-cover">
                                            <div class="column-content-inner">
                                              <div class="widget gsc-icon-box top-center text-dark wow fadeInUp" style="background-color: rgb(245, 245, 245); visibility: hidden; animation-name: none;">
                                                <div class="highlight-icon"><span class="icon fa fa-money"></span></div>
                                                <div class="highlight_content"> <a href="#">
                                                  <h4>FinTech</h4>
                                                  </a>
                                                  <div class="desc">Innovative FinTech applications and technology.</div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="gsc-column col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                          <div class="column-inner  bg-size-cover">
                                            <div class="column-content-inner">
                                              <div class="widget gsc-icon-box top-center text-dark wow fadeInUp" style="background-color: rgb(245, 245, 245); visibility: hidden; animation-name: none;">
                                                <div class="highlight-icon"><span class="icon fa fa-cogs"></span></div>
                                                <div class="highlight_content"> <a href="#">
                                                  <h4>Internet of Things</h4>
                                                  </a>
                                                  <div class="desc">Powering blockchain enabled global IoT devices.</div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="column-inner  bg-size-cover">
                                            <div class="column-content-inner"> </div>
                                          </div>
                                        </div>
                                        <div class="gsc-column col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                          <div class="column-inner  bg-size-cover">
                                            <div class="column-content-inner">
                                              <div class="widget gsc-icon-box top-center text-dark wow fadeInUp" style="background-color: rgb(245, 245, 245); visibility: hidden; animation-name: none;">
                                                <div class="highlight-icon"><span class="icon fa fa-lock"></span></div>
                                                <div class="highlight_content"> <a href="#">
                                                  <h4>Cybersecurity</h4>
                                                  </a>
                                                  <div class="desc">Leading the next wave of Cybersecurity innovation.</div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="gsc-column col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                          <div class="column-inner  bg-size-cover">
                                            <div class="column-content-inner">
                                              <div class="widget gsc-icon-box top-center text-dark wow fadeInUp" style="background-color: rgb(245, 245, 245); visibility: hidden; animation-name: none;">
                                                <div class="highlight-icon"><span class="icon fa fa-file-text"></span></div>
                                                <div class="highlight_content"> <a href="#">
                                                  <h4>Document Validation</h4>
                                                  </a>
                                                  <div class="desc">Securing &amp; validating blockchain notarized documents.</div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="gsc-column col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                          <div class="column-inner  bg-size-cover">
                                            <div class="column-content-inner">
                                              <div class="widget gsc-icon-box top-center text-dark wow fadeInUp" style="background-color: rgb(245, 245, 245); visibility: hidden; animation-name: none;">
                                                <div class="highlight-icon"><span class="icon fa fa-random"></span></div>
                                                <div class="highlight_content"> <a href="#">
                                                  <h4>Trade Finance</h4>
                                                  </a>
                                                  <div class="desc">Providing trust, transparency and security to global trade.</div>
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
  });
</script>

</body>
</html>
