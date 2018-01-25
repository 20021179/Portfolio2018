<?php
 // 1. Turn off all error reporting - put it back to the level we want
error_reporting(0);

// Report simple running errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

	session_start();
	if(!isset($_SESSION['count'])){
	 $_SESSION['count']=0;
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
Debug=<?=$debug?>
</body>
</html>
