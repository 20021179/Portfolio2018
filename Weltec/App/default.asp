<html>
<head><title></title>
</head>

<body>
<script language="JavaScript" RUNAT=Server>
function Hello()
{
var your_name='Student_1';//Initiating your name
var today_is=new Date();//Accepting curent date
Response.Write('Hello'+your_name+'from the server-side page'+'<br>');
Response.Write('The current date and time is:'+today_is.toGMTString());
}
Hello();//Here we execute JavaScript function Hello()
</script>
<p>Shift to<a href="sample_form.html" target="_blank">order form</a>web page!</p>
</body>
</html>