<% @Language="JavaScript"%>
<%
function write_to_file()
// This function writes to a disk file
{
var filename="textfile.txt"; // The name of the file including the relative path
var in_code= new Date();
// An instance of the file system object is created
var file_system_object = Server.CreateObject("Scripting.FileSystemObject");

//Create an instance of a text stream object pointing at a new file
//var outfile=file_system_object.CreateTextFile(Server.MapPath(filename));

// validation check if exists, if so delete
	if (file_system_object.FileExists(Server.MapPath(filename))){
		var outfile=file_system_object.DeleteFile(Server.MapPath(filename));
	
	}
	

// Alternative '8' = Appendds text
//var outfile=file_system_object.OpenTextFile(Server.MapPath(filename),8);

outfile.WriteLine("Hi from the test File. Here is the content:");
outfile.WriteLine("Today is "+ in_code);
outfile.WriteLine("This is Line no 3");
outfile.WriteLine();// This writes just a new line

outfile.Close();

s="Output file was created " ;
}
write_to_file();
%>
