<html>
<!--Server-side "out_file.asp" by...on...at...-->
<head>
<title>Writing to a file</title>
<script language="JavaScript" RUNAT=Server>
var s="No writing accomplished so far - try harder!";
var today_is=new Date();// Accepting current date
var in_code=today_is.toGMTString();
function write_to_file()
//This function writes the content of array to a disk file
{
var filename="testfile.txt";
var file_system_object=Server.CreateObject("Scripting.FileSystemObject");
var outfile=file_system_object.CreateTextFile(Server.MapPath(filename));//Creates a new file
//  var outfile=file_system_object.OpenTextFile(Server.MapPath(filename),8);//'8'=Appends text
outfile.WriteLine("Hi from the test File. Here is the content");
outfile.WriteLine("Today is "+in_code);
outfile.WriteLine("This is Line no 3");
outfile.WriteLine();//This writes just a new line
outfile.Close();
s="Output file was created";
}
write_to_file();
Response.Write(s+'on '+in_code+'<br>');
</script>
</head>
<body>
<script language="JavaScript" RUNAT=Server>
Response.Write('This task is completed!'+'<br>');
</script>
<p>Shift back to<A HREF="default.asp" target="_blank">home page</a>by clicking here!</p>
</body>
</html>