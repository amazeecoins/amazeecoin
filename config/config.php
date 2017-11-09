<?php   
//session start
session_start();

include("../connections/db.php");

define("LIVE","ON");
define("__DEFAULT_DATE","0000:00:00");
define("__DEFAULT_TIME","00:00:00");
define("__DEFAULT_DATETIME","0000:00:00 00:00:00");

//db connection 
$host="localhost"; $username="root"; $password="U3%@q1b74"; $dbname="datao9coin"; $con=null;
$con=  mysqli_connect($host, $username, $password, $dbname);

//error reporting
if(LIVE=="OFF"){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}else{
    error_reporting(0);
}


//  session timeout start  

$inactive = 200;

$_SESSION['timeout'] = time();
//  session timeout end

//page redirect properly
ob_start();
?>