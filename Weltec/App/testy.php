<?php

//Turn of all error reporting
error_reporting(1);
//Report simple running errors
error_reporting(E_ERROR|E_WARNING|E_PARSE);

function show_main($pContent)
{
	echo"<table bgColor='yellow'><tr><td>This is Main</td></tr></table>";
}
function show_product($pPCategory)
{
	echo"<table bgColor='orange' ><tr><td>This is Product $pPCategory</td></tr></table>";
}
$state=$REQUEST["state"];
if(!isset($state))
{
	$state=show_product("m");//"m";
	
}
switch($state)
{
case("m"):
		$content="show_product";
		break;
default:
		$content="show_main";
}
?>
<html>
<head>
<title>
Predators prey on the weak first!
</title>
</head>
<body>
<?php
	echo"State= $state";
	eval("$content(\"Test\");");
	?>
</body>
</html>