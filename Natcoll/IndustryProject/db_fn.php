<?php
function db_connect()
{
$result = mysql_pconnect('localhost', 'michaelf', 'natcoll');
if(!$result)
return false;
if(!mysql_select_db('hef'))
return false;

return $result;
}

?>