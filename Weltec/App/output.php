<?php
function do_html_header($title)
{
// print an html header
?>
<html>
<head>

	<title><?php echo $title; ?></title>
	<style>	
body {color:#006666; background:white}

h1 {font: bold 1.8em/1em "comic sans", "verdana", sans-serif;white-space:nowrap; margin:10px 0px 5px}

p {margin:0px 0px 10px 0px}

table, td {padding:0;border-spacing:0}

.rightsidebar {width:200px;float:right;background:navy;color:white;margin:0px 0px 5px 10px}

.caption {font-size:.8em;font-style:italic;font-family:"verdana", sans-serif;text-align:center;color:white;padding:5px;margin:0}

.toc {font-family:"verdana", sans-serif;vertical-align:top; background: navy  url(longerfish.jpg); padding:25px 10px 0px}

.toc a:link {color:white;text-decoration:none;font-weight:bold}
.toc a:visited {color:gray;text-decoration:none;font-weight:normal}
.toc a:hover {color:yellow;text-decoration:underline;font-weight:bold}
.toc a:active {color:yellow;text-decoration:underline} 

.center {text-align:center}
.right {text-align:right}
.top {vertical-align:top}

.logobar {background:#silvsr}
.copyright {padding:5px;background:navy; color:white;font: bold italic .7em "verdana", sans-serif}

	</style>
</head>
<body text="#006666" bgcolor="white">

<table width="100%" cellspacing="0" cellpadding="0" border="0" class="logobar" bgcolor="silver">
<tr><td ><img src="banner1.jpg" width="765" height="80" alt="Northampton Zoo Logo"></td>
</tr></table>
</body></html>
<?php
if ($title)
do_html_heading($title);
}
?>