<?php
require_once('db_fn.php');
$first=$HTTP_POST_VARS['first'];
$last=$HTTP_POST_VARS['last'];
$email=$HTTP_POST_VARS['email'];
function register($first, $last, $email)
$conn = db_connect();
if(!conn)
return' Could not connect to the database server - please try again later.';
$result = mysql_query("insert into hef values
						('$first', '$last','$email')");
						
						if (!$result)
						 return 'Could not register you in database - please try again later.';
						 return true;
						}

?>