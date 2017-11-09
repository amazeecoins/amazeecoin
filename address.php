<?php  
include "auth_site.php";
$loginid=getSession("loginid");
if(isset($_GET['value']))
{
    $value=trim($_GET['value']);
    $result=tansaction_address($value);
    $result_detail =  mysqli_fetch_array($result);
    if($result_detail!=""){        
        $transid=$result_detail['Id'];
       $result_trans = get_tanshash($transid);

      }
}
$amc=getAmcBalance($transid);
$amc=returnCurrencyFormat($amc);
$result1 = getAllTransactionAddress($transid);
//print_r($result1); exit;		
				
				

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="utf-8" />
<title>O9Coin </title>

<meta name="description" content="frequently asked questions using tabs and accordions" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

<!-- bootstrap & fontawesome -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

<!-- page specific plugin styles -->

<!-- text fonts -->
<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

<!-- ace styles -->
<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

<!--[if lte IE 9]>
	<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
<![endif]-->
<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

<!--[if lte IE 9]>
  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
<![endif]-->

<!-- inline styles related to this page -->

<!-- ace settings handler -->
<script src="assets/js/ace-extra.min.js"></script>

<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

<!--[if lte IE 8]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
<style>
@media (min-width: 300px) {
.close_btn{
	margin-bottom:5px;
}
	}
#qrcode  img{
width:150px!important;
height:150px !important;

 margin-right: -20px;
    margin-top: 30px;
}

</style>

</head>

<body class="no-skin">
<?php include('topmenu.php'); ?>

<div class="main-container ace-save-state" id="main-container">
<script type="text/javascript">
try{ace.settings.loadState('main-container')}catch(e){}
</script>

<?php include('leftmenu.php'); ?>

<div class="main-content">
<div class="main-content-inner">
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
<ul class="breadcrumb">
<li>
<i class="ace-icon fa fa-home home-icon"></i>
<a href="index.php">Home</a>
</li>

<li>
<a href="#">Transaction</a>
</li>
</ul><!-- /.breadcrumb -->

<?php include "top_search1.php";  ?>
<!-- /.nav-search -->
					</div>

					<div class="page-content">
<?php include 'settings_container.php'; ?>  					    
<!-- /.ace-settings-container -->
<!-- page-header -->
<?php  

//include "send_receive_top.php";
?>
<!-- /.page-header -->

<div class="row">
<div class="col-xs-12">
<!-- PAGE CONTENT BEGINS -->
<div class="tabbable">
<div class="tab-content no-border padding-24">
<!--start content here-->
<div class="row">
    <h2>O9Coin Address</h2>
  <div class="col-md-5 ">
 <table class="table table-striped table-responsive">
 
    <tbody>
	  <tr>
       <td colspan="2"><b>Summary</b></td>
	
      </tr>
	   <tr>
       <td>Address</td>
        <td><?php echo $value; ?></td>
	
      </tr>
      <?php 
         if(mysqli_num_rows($result_trans)>0){
     $result_transdeatil = mysqli_fetch_array($result_trans);
     //print_r($result_transdeatil);
     
     
    $tottransation =getTotalTransactioncount($transid);
    $totaltrans = mysqli_fetch_array($tottransation);
    
    $tottransation =getTotalReceivedcount($transid);
    $totreceived = mysqli_fetch_array($tottransation);
?>
      	   <tr>
               <td>Hash &nbsp;</td>
        <td><?php echo $result_transdeatil['HashKey'];?></td>
	
      </tr>
      <?php }?>
     
		
    </tbody>
  </table>
  
  </div>
    <div class="col-md-4 ">
 <table class="table table-striped table-responsive">
 
    <tbody>
      <tr>
       <td>No. Transactions</td>
        <td><?php echo $totaltrans['Total']; ?></td>
	
      </tr>
      <tr>
       <td>Total Received</td>
        <td><?php echo $totreceived['Total'];?></td>
	
      </tr>
     <tr>
       <td>Total Available </td>
	<td><?php echo $amc;?></td>
      </tr> 
 
     
		
    </tbody>
  </table>
  </div>
  <div class="col-md-3">
  	<p align="center">  
            <input id="text" type="text" value="<?php echo $result_detail['WalletAddress']; ?>" style="display: none;"/></p>
  	<p align="center" id="qrcode"></p>
  
  </div>
  
</div>
<div class="row">
    <div class="col-md-12 ">
<table class="table table-striped" cellpadding="0" cellspacing="0" style="padding:0px;float:left;margin:0px;width:100%">
  <tbody>
<?php  
if(mysqli_num_rows($result1)>0){
      while ($item = mysqli_fetch_array($result1)){
	  if($item['SenderWalletId']!=''){
          $sender = getFieldVal(TBL__PREFIX1."create_wallet", 'WalletAddress', 'Id = '.$item['SenderWalletId']);
	  }else{
	      $sender='';
	  }
          $receiver = getFieldVal(TBL__PREFIX1."create_wallet", 'WalletAddress', 'Id = '.$item['ReceiverWalletId']);
?>
    <tr>
        <th colspan="3" align="left"><a class="hash-link" href="hash1.php?value=<?php echo $item['HashKey']; ?>"><?php echo $item['HashKey']; ?></a> <span class="pull-right"><?php echo $item['SentDateTime']; ?></span></th>
    </tr>
    <tr>
        <td width="500px" class="txtd hidden-phone"><b>
		                
<?php
if($loginid==$item['SenderWalletId']){
?>
                <?php echo $sender; ?>
<?php
}else{
?>
                <a href="address1.php?value=<?php echo $sender; ?>"><?php echo $sender; ?></a>
<?php
}
?> 
	    </b></td>	
<?php
if($loginid==$item['SenderWalletId']){
?>	    
      <td width="48px" class="hidden-phone" style="padding:4px;text-align:center;vertical-align:middle;"><img src="assets/images/arrow.png"></td>
<?php
}else{
?>
      <td width="48px" class="hidden-phone" style="padding:4px;text-align:center;vertical-align:middle;"><img src="assets/images/left_arrow.png"></td>
<?php
}
?> 
      
      <td class="txtd"><b>
	      
	      <?php
if($loginid==$item['ReceiverWalletId']){
?>
                <?php echo $receiver; ?>
<?php
}else{
?>
                <a href="address1.php?value=<?php echo $receiver; ?>"><?php echo $receiver; ?></a>
<?php
}
?> 
	  
	  </b>
          <span class="pull-right hidden-phone"><span data-c="1459718305" data-time="1490101310000"><?php echo $item['AMCValue']; ?> O9C</span></span>
<!--	  <span class="pull-right hidden-phone"><span data-c="1459718305" data-time="1490101310000">$<?php //echo $item['USDValue']; ?> </span></span>-->
	  <br>
      <div style="padding-bottom:30px;width:100%;text-align:right;clear:both"> <button class="btn btn-success cb"><span data-c="1459718305" data-time="1490101310000"><?php echo $item['AMCValue']; ?> O9C</span></button>
<!--      <button class="btn btn-success cb"><span data-c="1459718305" data-time="1490101310000">$<?php //echo $item['USDValue']; ?> </span></button>-->
      </div>
      </td>
      
    </tr>
    
<?php
      }
}
?>
  </tbody>
</table>
  
  
  </div>
</div>
<!--end content here-->
</div>
</div>

<!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->

<?php  include('footer.php'); ?>

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
	<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="assets/js/jquery-2.1.4.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<!-- ace scripts -->
<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>
<!-- ask question function-->
<script src="assets/qrcode/jquery.min.js" type="text/javascript"></script>
<script src="assets/qrcode/qrcode.min.js" type="text/javascript"></script>
<!-- inline scripts related to this page -->

<script>
var qrcode = new QRCode("qrcode");

$("#text").on("keyup", function () {
    qrcode.makeCode($(this).val());
}).keyup().focus();
</script>
</body>
</html>

