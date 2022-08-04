<?php
$host=getenv("MYSQL_SERVICE_HOST");
$port=getenv("MYSQL_SERVICE_PORT");
$user=getenv("databaseuser");
$pass=getenv("databasepassword");
$db=getenv("databasename");

$mysqli=mysqli_connect($host,$user,$pass,$db);

if(!$con)
{
	print("Not Connected<br>".mysql_error());
}
else
{
	echo("Connected");
}
?>
