<?php

if(!($fp=fopen('display.html','wb')))
	return;
	
//$money1=68.75;
//$money2=54.35;
//$money=$money1+$money2;
//echo $money will output "123.1";
//$display='cartoon1.jpg';
$len=fprintf($fp, '%b', 'cartoon1.jpg'//$display);
// will write "123.10" to currency.txt

echo"wrote $len bytes to display.html";
// use the return value of fprintf to determine how many bytes are wrote

?>