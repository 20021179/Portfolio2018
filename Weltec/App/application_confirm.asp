<% @Language="JavaScript" %>
<html>
<!--Web page "sample_handling.asp" prepared by...at..on...mikes master piece-->
<head>
<style type="text/css">
p{
	font-family:Arial,san-serif;
	font-weight:solid;
	color:blue;
	font-size:8pt;
}
h6{
	font-family:Arial,san-serif;
	font-weight:solid;
	color:black;
	font-size:10pt;
}

.meme{
	border:solid black; 
	border-width:thin;
}
.zippy{
border:groove #99CCFF;
border-width:thin;
}
a{
font-family:Arial, sans-serif;
font-weight:bold;
text-size:16;
color:navy;
}
a:link{
	color:white;
}
a:visited{
	color:aqua;
}
a:hover{
	color:yellow;
}
a:active{
	color:blue;
}

#navigation{
margin-left:-10px;
margin-right:2px;
margin-top:20px;
padding-left:5px;
padding-right:5px;
background-color:crimson;
}

#navigation{
position:absolute; top:200px; left:2%;
}

input.smallSearch {
  width:4em;
  height:2em;
  line-height: 0.75em; 
  font-family:Arial,san-serif;
	font-weight:solid;
	color:black;
	font-size:7pt;
 } 
</style>
<title>Server form confirmation...out file</title>
<%
// start of variables
var frmFullNameField=Request("fName");
var frmEmployerField=Request("employ");
var frmJobField=Request("job");
var frmQualificationField=Request("qualif");
var frmInstitutionField=Request("inst");
var frmEmailField=Request("email");
var frmCountryField=Request("country");
var frmCountryField2=Request("otherC");
var frmLanguageField=Request("language");
var frmLanguageField2=Request("otherL");
var frmDescriptionField=Request("description");
var frmWebField=Request("web");
var today_is=new Date();
var in_code=today_is.toGMTString();
 // end of variables

function write_to_file() // writes to file latest
{
//This function writes the content of client form to s disk file
var today_is = new Date(); //Accepting current date
var in_date = today_is.toGMTString();

var filename="latest.txt";// latest file
var file_system_object=Server.CreateObject("Scripting.FileSystemObject");
var outfile=file_system_object.CreateTextFile(Server.MapPath(filename));//create new file

outfile.WriteLine("Order file created on "+in_code);
outfile.WriteLine("Fullname is "+frmFullNameField);
outfile.WriteLine("Employer is "+frmEmployerField);
outfile.WriteLine("Job is "+frmJobField);
outfile.WriteLine("Qualification is "+frmQualificationField);
outfile.WriteLine("Institution is "+frmInstitutionField);
outfile.WriteLine("Email is "+frmEmailField);
outfile.WriteLine("Country is "+frmCountryField);
outfile.WriteLine("The unlisted country is "+frmCountryField2);
outfile.WriteLine("Language is "+frmLanguageField);
outfile.WriteLine("The unlisted language is "+frmLanguageField2);
outfile.WriteLine("Description is "+frmDescriptionField);
outfile.WriteLine("Web address is "+frmWebField);
outfile.Close();
}
function write_to_file_append()
{
//This function writes the content of client form to a disk file
	var today_is = new Date(); //current date
	var in_date = today_is.toGMTString();
	var file_system_object=Server.CreateObject("Scripting.FileSystemObject");
	
	var fileName="latest.txt";
	var file_system_object = Server.CreateObject("Scripting.FileSystemObject");
	
	if (! file_system_object.FileExists(Server.MapPath(fileName)))
	{
		var outfile = file_system_object.CreateTextFile(Server.MapPath(fileName));
	}
	else
		{
			var outfile = file_system_object.OpenTextFile(Server.MapPath(fileName), 8);
		}
		outfile.WriteLine("-------------------------------------");
		outfile.WriteLine("Order File created on "+ in_date);
		outfile.WriteLine("E-mail Address was " + frmEmailField);
		outfile.WriteLine("Personal website was " + frmWebField);
	
	outfile.Close();
}

write_to_file_append();
write_to_file();

%>
<%
Response.Write("center>"+"Time of submission" +in_code+"</center>" ); 
%>

</head>
<body bgColor="#99CCFF">
<script language="JavaScript" RUNAT=Server>
Response.Write('<center>'+'This task is completed!'+'</center>');
</script>
<div id="navigation"><div><a href="default.html">Home</a></div><div><a href="application_submit.html">Submit</a></div><div><a href="latest.asp">Latest</a></div><div><a href="onclick=alert('Not currently working')">Database</a></div><div><a href="JavaScript:wind2()">Help</a></div></div>
<form>
<table width="700px" border="0" cellspacing="2" cellpadding="2" bgColor="#6699FF" align="center">
  <tr>
    <td colspan="4"><img src="logo.gif"><h1>Order Confirmed</h1>
<p>Following order form was received(please check details)<br>
and are storder in a disk file named URL_DB.txt.</p><br></td>
  </tr>
  <tr>
    <td>Name:</td>
    <td><input type="text" name="fName" value="<% Response.Write(frmFullNameField)%>"size="25"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Employer:</td>
    <td>
<input type="text" name="employ"value="<% Response.Write(frmEmployerField)%>"size="25"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Job:</td>
    <td>
<input type="text" name="job"value="<% Response.Write(frmJobField)%>"size="25"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Qualification:</td>
    <td>
<input type="text" name="qualif"value="<% Response.Write(frmQualificationField)%>"size="25"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>Institution:</td>
    <td>
<input type="text" name="inst"value="<% Response.Write(frmInstitutionField)%>"size="25"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Email:</td>
    <td><input type="text" name="email"value="<% Response.Write(frmEmailField)%>"size="25"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Country:</td>
    <td><input type="text" name="country"value="<% Response.Write(frmCountryField)%>"size="25"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td>Unlisted Country:</td>
    <td><input type="text" name="otherC"value="<% Response.Write(frmCountryField2)%>"size="25"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>

  <tr>
    <td>Language:</td>
    <td>

<input type="text" name="language"value="<% Response.Write(frmLanguageField)%>"size="25"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Unlisted language:</td>
    <td>
<input type="text" name="otherL"value="<% Response.Write(frmLanguageField2)%>"size="25"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Description:</td>
    <td>
<input type="text" name="description"value="<% Response.Write(frmDescriptionField)%>"size="25"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Web site:</td>
    <td>

<input type="text" name="web"value="<% Response.Write(frmWebField)%>"size="25"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
<p>Shift back to <a href="default.html">home page</a>!</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>