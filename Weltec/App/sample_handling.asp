<% @Language="JavaScript" %>
<html>
<!--Web page "sample_handling.asp" prepared by...at..on...-->
<head>
<title>Server form confirmation</title>
<%
var frmSurnameField=Request("surname");
var frmAmountField=Request("amount");

function write_to_file()
{
//This function writes the content of client form to s disk file
var  today_is=new Date(); //Accepting
var in_date=today_is.toGMTString();
var filename="URL_DB.txt";
var file_system_object=Server.CreateObject("Scripting.FileSystemObject");
var outfile=file_system_object.CreateTextFile(Server.MapPath(filename));
outfile.WriteLine("Order file created on "+in_date);
outfile.WriteLine("Surname is "+frmSurnameField);
outfile.WriteLine("Amount is "+frmAmountField);
outfile.Close();
}
write_to_file();
%>
</head>
<body>
<h1>Order Confirmed</h1>
<p>Following order form was received(please check details)<br>
and are storder in a disk file named URL_DB.txt.</p><br>

<form>
<pre>
Name=<input type="text" name="surname" value="<% Response.Write(frmSurnameField)%>"size="25">
<p>Amount=<input type="text" name="amount"value="<% Response.Write(frmAmountField)%>"size="25">
</pre>
</form>
<p>Shift back to <a href="default.asp" target="_blank">home page</a>!</p>
</body>
</html>