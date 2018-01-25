<?php
// 1. Turn off all error reporting - put it back to the level we want
error_reporting(0);

// Report simple running errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

session_start();
$debug="";
// Use $HTTP_SESSION_VARS with PHP 4.0.6 or less
if (!isset($_SESSION['count'])) {
 $_SESSION['count'] = 0;
  $debug="no";
 }else{
 $_SESSION['count']++;
 $debug="yes";
 }
 ?> 
 <html>
 <head>
 </head>
 <body>
 Count=<?=$_SESSION['count']?>
 <br/>
 debug=<?=$debug?>
 </body>
 </html>
