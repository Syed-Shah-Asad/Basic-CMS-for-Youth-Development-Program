<?php
//$hostname="mysql13.000webhost.com";
//$username="a9575313_asad";
//$password="planetlab3";
//$db_name="myCMS";
$hostname="localhost";
$username="root";
$password="";
$db_name="myCMS";
$con=mysql_connect("$hostname","$username","$password") or die(mysql_error());
$select=mysql_select_db("$db_name",$con) or die(mysql_error());
?>