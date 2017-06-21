<?php
error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
if(!mysql_connect("172.30.93.137","root",""))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("dbtest"))
{
	die('oops database selection problem ! --> '.mysql_error());
}

?>
