<?php

if(!($fp=fopen('message.html','w')))
	return;
	
//$money1=68.75;
//$money2=54.35;
//$money=$money1+$money2;
//echo $money will output "123.1";
$display="<table bgColor='red'><tr><td>Greetings world</td></tr></table>";
$len=fprintf($fp, '%s', $display);
// will write "123.10" to currency.txt

echo"wrote $len bytes to message.html";
// use the return value of fprintf to determine how many bytes are wrote

?>