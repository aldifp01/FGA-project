<?php
$host=getenv("OPENSHIFT_MYSQL_DB_HOST");
$port=getenv("OPENSHIFT_MYSQL_DB_PORT");
$user=getenv("databaseuser");
$pass=getenv("databasepassword");
$db=getenv("databasename");

$mysqli=mysqli_connect($host,$user,$pass,$db);

if(!$mysqli)
{
	#Untuk mengecek errornya dimana
	echo("\nERROR! NOT CONNECTED!");
	echo("\nLIST ENV");
	echo("\nHost: " . $host);
	echo("\nPort: " . $port);
	echo("\nUser: " . $user);
	echo("\nPass: " . $pass);
	echo("\nDB  : " . $db);
}
else
{
	echo("Connected");
}
?>
