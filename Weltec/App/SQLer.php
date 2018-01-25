<?php

//0. STOP CACHE-ING

// Date in the past
/*header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

// always modified
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
 
// HTTP/1.1
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);

// HTTP/1.0
header("Pragma: no-cache");*/



?>
<html>
<head>
<title> SQLer </title>
</head>
<body>
<?php

// 1. Turn off all error reporting - put it back to the level we want
error_reporting(0);

// Report simple running errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);


// 2. Validate request
if($_REQUEST["sql"])
{
 $sql =  $_REQUEST["sql"];


  
 //3. Connect to DB
 $link = mysql_connect ('localhost',"u9403180","9403180") 
         or die ("Could not connect");  
 $dblink = mysql_select_db ('db9403180',$link)
            or die ("Could not select database".mysql_error());
 
 $sql = stripslashes($sql);

 // 4. Execute query  
 $rs = mysql_query($sql) or die("Query error:$sql".mysql_error()); 
 

 // 5. Display Result 
 echo "Executed query $sql <br>";

 
 if( $rs!=1 )
 {
  $first = true;
  echo "<table>";
  $keys = '';

  while( $record =  mysql_fetch_assoc ( $rs ))  
  {
    if($first)// grab keys
    {
     echo "<tr>";
     foreach ($record as $key => $value)
     {
       echo "<th>";
       echo $key ;
       echo "</th>";
     }// for each key
     echo "</tr>";
     $first=false;
    }// if first

    echo "<tr>"; 
    foreach ($record as $key => $value)
    {
       echo "<td>";
       echo $value ;
       echo "</td>";
     }// for each value
        
    echo "</tr>";

   }// while
  }// if rs

  echo "</table>";
} 


?>


<form action="SQLer.php" method="post">

<table>
<tr>
<td>
Enter SQL
</td>
<td>
<textarea name=sql rows=10 cols=70>
<?=$_REQUEST['sql']? $_REQUEST['sql'] : "" ?>
</textarea> 
</td>

</tr>

<tr>
<td>

</td>
<td>
<input type=submit value=Query>
</td>

</tr>

</table>
</form>
</body>
</html>

