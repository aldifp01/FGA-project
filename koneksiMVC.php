<?php
$host=getenv("MYSQL_SERVICE_HOST");
$port=getenv("MYSQL_SERVICE_PORT");
$user=getenv("databaseuser");
$pass=getenv("databasepassword");
$db=getenv("databasename");

$mysqli=mysqli_connect($host,$user,$pass,$db);

if(!$mysqli)
{
	echo("ERROR! NOT CONNECTED!");
}
else
{
	echo("Connected");
}
?>
