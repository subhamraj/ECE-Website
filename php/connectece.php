<?php
$host="localhost";
$databasename="ece";
$user="root";
$pass="";
error_reporting(E_ALL ^ E_DEPRECATED);
$conn=mysql_connect($host,$user,$pass);
if($conn)
{
$db_selected = mysql_select_db($databasename, $conn);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
}
else
{
    die('Not connected : ' . mysql_error());
}
?>
