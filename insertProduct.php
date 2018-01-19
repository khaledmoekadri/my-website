<?php
date_default_timezone_set('UTC');
$username = "root";
$password = "khaled12345678";
$hostname = "127.0.0.1";


// connection to database
$dbhandle = mysql_connect($hostname, $username, $password)
or die("Unable to connect to MySQL");

echo "Connected to databse MySQL<br>";


// select a database to work with
$selected = mysql_select_db("dbtest", $dbhandle)
or die("COuld not connect to database 'ex2017_11_16'"); 

$sql = "INSERT INTO  products ( name, description,price,created,modified) VALUES ('$_POST[proname]','$_POST[prodescription]','$_POST[proprice]','$_POST[procreated]','$_POST[promodified]')";

if (!mysql_query($sql)) {
	die('Error'.mysql_error($dbhandle));
}//23
echo "a record added <br>";


// close the connection
mysql_close($dbhandle);
?>