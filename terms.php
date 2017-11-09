<?php  
include "auth_site.php";
?>
﻿<!DOCTYPE html>
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
      <div class="breadcrumb-content-inner">
        <div class="gva-breadcrumb-content">
          <div id="block-gavias-foxin-breadcrumbs" class="text-light block gva-block-breadcrumb block-system block-system-breadcrumb-block no-title">
            <div class="breadcrumb-style" style="background-color:#cef0ea;background-image:url(images/about.jpg);background-position:center top;background-repeat:no-repeat">
              <div class="container">
                <div class="breadcrumb-content-main">
                  <h2 class="page-title">Terms and Conditions </h2>
                  <div class="">
                    <div class="content block-content">
                      <div class="breadcrumb-links">
                        <div class="container">
                          <div class="content-inner">
                            <nav class="breadcrumb " role="navigation" aria-labelledby="system-breadcrumb">
                              <h2 id="system-breadcrumb" class="visually-hidden">Breadcrumb</h2>
                              <ol>
                                <li> <a href="#/">Home</a> <span class=""> - </span> </li>
                                <li> </li>
                                <li> Terms and Conditions
                              </ol>
                            </nav>
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
                                                
                                                <h2 class="title"><span> Terms and Conditions</span></h2>
                                                <div class="line"></div>
                                                <div class='mrg'>
												
                                                <h6>This is the Privacy Policy of AmazeeCoin, which is referred to in these Terms as AmazeeCoin, we or us.</h6>
                                                <p>This Privacy Policy applies to information we collect from users of our website at https://www.AmazeeCoin.com, our online services, our Android and iOS mobile apps, recipients of our emails, or when you otherwise interact with us. It describes the data that we collect about you, and how we use, share and protect this data.
Collecting and Using Data</p>

<h6><strong>Data You Provide To Us. We collect information that you provide to us, including:</strong></h6>
                                                
                                                <p>your name, email address, mobile phone number and currency preference, such as when you create an account, complete your profile or submit a request for support; the emails and phone numbers of your contacts, if you choose to invite your friends to use AmazeeCoin as part of our referral program when you create your account; we allow your contacts to unsubscribe from the commercial messages they receive from us; information about transactions you complete using our services, including the amount of funds associated with a bitcoin transaction, the type of transaction executed, and other related information; and, we collect from your mobile device a unique ID (where your device is an iPhone, we also collect the Apple-recommended CFUUID (the Core Foundation Universally Unique Identifier)). Other Data Collected. We may also automatically collect the following data:</p>
                                                
                                                <h6><strong>Cookies</strong></h6>
                                                <p>We use cookies on our website to collect data about your visit and to allow you to navigate from page to page without having to re-login each time, count visits, and see which areas and features of our website are popular. We do not link the information we store in cookies to any information you submit while on our website. We may also use the data collected via cookies to tailor advertisements to you and to track the popularity of our website. Our use of cookies and other technologies may allow us and third parties to collect information about your browsing activities over time and across different websites following your use of our services.</p>
                                                
                                                <h6><strong>Analytics</strong></h6>
                                                <p>When you visit our website, we use third party analysis tools to collect data about your computer and Internet connection. That information includes the IP address of your computer and/or Internet service provider, when you access our website, the Internet address of websites from which you link to our website and from which you came before landing on our website, the browser that you are using, and your movements and preferences on our website. All of this information is used internally for the purpose of understanding how our website is being used and improving our website. We also use third party analysis tools to collect data about your use of our mobile apps. The information collected identifies the types and timing of actions you take within our mobile, including installation, registration, uploading, and certain types of navigating. All of this information is used internally for the purpose of understanding how our mobile apps are being used and improving them.</p>
                                                
                                                <h6><strong>Action Tags</strong></h6>
                                                <p>When you visit our website, we use action tags (also called pixel tags, clear GIF, or beacons) to identify some of the pages that you visit and how you use the content on those pages. Action tags may collect and transmit this data in a manner that identifies you if you have registered with our website, or are logged into our website. We also use action tags in our emails, to determine whether an email was opened or whether it was forwarded to someone else. When you use our mobile apps, we use action tags where you are accessing websites from links in our mobile apps. These may identify the pages that you visit and how you use the content on those pages.</p>
                                                
                                                <h6><strong>Site Management</strong></h6>
                                                
                                                <p>We aggregate data that we collect about the use of our website for administering, protecting and improving our website and our systems, to better understand the preferences of our website visitors and optimize the content that we serve, to identify server problems, to compile aggregated statistics about our website usage, and to improve our marketing and research.</p>
                                                
                                                <h6><strong>Do Not Track</strong></h6>
                                                <p>Our Service currently does not respond to “Do Not Track” signals and operates as described in this Privacy Policy whether or not a Do Not Track signal is received. If we do so in the future, we will describe how we do so in this Privacy Policy.</p>
                                                
                                                <h6><strong>User Provided Information</strong></h6>
                                                <p>You provide certain Personally Identifiable Information, such as your mobile phone number, push notification name (if applicable), and mobile device information to AmazeeCoin when choosing to participate in various uses of the AmazeeCoin Service, such as registering as a user. In order to provide the AmazeeCoin Service, AmazeeCoin will periodically access your address book or contact list on your mobile phone to locate the mobile phone numbers of other AmazeeCoin users (“Zebians” numbers), or otherwise categorize other mobile phone numbers as “Other Contacts” numbers, which are stored as one-way irreversibly hashed values. At the time of registration of AmazeeCoin application, will confirm your mobile number identity by receiving SMS. AmazeeCoin Application will automatically read your SMS for mobile number verification process.</p>
                                                <p>By voluntarily providing us with personal data, you are consenting to our use of it in accordance with this Privacy Policy. If you provide personal data to us, you acknowledge and agree that such personal data may be transferred from your current location to the offices and servers of AmazeeCoin and the authorized third parties referred to in this policy, some of whom may be located in the Singapore or other countries where we store our servers.</p>
                                                
                                                <h6><strong>How We Protect The Data We Collect</strong></h6>
                                                <p>We use reasonable physical, electronic, and procedural safeguards to protect the personal information that we obtain from you from loss, misuse, and unauthorized access, disclosure, alteration, and destruction. Please note that we are not responsible for the security of any data you are transmitting over the Internet, or any data you are storing, posting, or providing directly to a third party’s website, which is governed by that party’s policies. Please note that no method of transmission over the Internet or method of electronic storage is 100% secure. If you have further questions about security, you can contact us at support@AmazeeCoin.in</p>
                                                
                                                <h6><strong>Data Retention</strong></h6>
                                                <p>If you wish to close your AmazeeCoin account altogether, please let us know by submitting a request to support@AmazeeCoin.in. We may retain information about you in our databases for as long as your account is active or as needed to provide you services and in accordance with applicable laws. Our retention and use of your information will be as necessary to comply with our legal obligations, resolve disputes, and enforce our agreements. The retention period may extend beyond the end of your relationship with us, but it will be only as long as it is necessary for us to have sufficient information to respond to any issues that may arise later. For example, we may need or be required to retain certain information to prevent fraudulent activity, protect ourselves against liability, permit us to pursue available remedies or limit any damages that we may sustain, or if we believe in good faith that a law, regulation, rule or guideline requires it. Access to Information</p>
                                                
                                                <p>We will respond to your request for access to information we collect about you within the time frame required by applicable law.
Sharing Data</p>

<h6><strong>We may share your information as follows:</strong></h6>
<p>You’ve consented or otherwise given us permission to share; We’ve aggregated or de-identified the information, so that it cannot reasonably be used to identify you; With third party service providers who we use in delivering our service, including certain advertising, referral, operations, financial services and technology services (such as hosting providers, identity verification, support, payment, and email service providers); If required by applicable law or legal process, or if we believe it is in accordance with applicable law or legal process; To protect the rights, property and safety of AmazeeCoin, our users and the public, including, for example, in connection with court proceedings, or to detect or prevent criminal activity, fraud, material misrepresentation, or to establish our rights or defend against legal claims; or In connection with selling, merging, transferring, or reorganizing all or parts of our business.</p>
<h6><strong>Email Communications</strong></h6>
<p>If you opted-in to receive information about our product, updates and offers, we will use your name and email address to send this information to you. If you no longer wish to receive these communications, you can unsubscribe by following the instructions contained in the emails you receive or on our website. Please note that we may send you transactional and relationship messages, even if you have unsubscribed from our marketing communications. For instance, if our service is going to be temporarily suspended for maintenance, we might send you an email to update you.</p>
<h6><strong>Links to Other Websites and Online Services</strong></h6>
<p>Our website may include links to other websites or online services, whose privacy practices may differ from those of AmazeeCoin. If you submit information to any of those websites or online services, your information is governed by their privacy statements. We encourage you to carefully read the privacy statement of any website you visit.</p>
<h6><strong>Changes to this Policy</strong></h6>
<p>We may make changes to this Privacy Policy. If we make changes, we will notify you by revising the date at the top of the policy. If we make material changes, we will do so in accordance with applicable legal requirements, and we will post a notice on our website and mobile applications alerting you to the material changes prior to such changes becoming effective. We encourage you to periodically review this page for the latest information on our privacy practices.</p>

<h6><strong>Contact Us</strong></h6>
<p>To keep your personal data accurate, current, and complete, please contact us as specified below. We will take reasonable steps to update or correct personal data in our possession that you have previously submitted using our services. Please also feel free to contact us if you have any questions about our Privacy Policy or the information practices of the AmazeeCoin Services.</p>
                                                
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
                            
                            
                            
                            <
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
