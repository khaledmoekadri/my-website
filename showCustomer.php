<?php
$username = "root";
$password = "khaled12345678";
$hostname = "localhost";
$dbhandle=mysql_connect($hostname,$username,$password)
or die("unable to connect to MySQL");
echo "Connected to MySQL<br>";
$selected=mysql_select_db("dbtest",$dbhandle)
or die("could not select studenDatabase");
$submit = $_POST['c'];
if($submit){
$result=mysql_query("SELECT name, email,phone, address FROM customers ");
echo "<table border='1'><th>name</th><th>email</th><th>phone</th><th>address</th>";
while ($row=mysql_fetch_array($result)){
	echo" <tr><td>".$row{'name'}."</td><td> ".$row{'email'}."</td><td> ".$row{'phone'}."</td><td> ".$row{'address'}."</td></tr>";
}
echo "</table>";
}
mysql_close($dbhandle);
?>