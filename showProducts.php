<?php
$username = "root";
$password = "khaled12345678";
$hostname = "localhost";
$dbhandle=mysql_connect($hostname,$username,$password)
or die("unable to connect to MySQL");
echo "Connected to MySQL<br>";
$selected=mysql_select_db("dbtest",$dbhandle)
or die("could not select studenDatabase");
$submit = $_POST['d'];
if($submit){
$result=mysql_query("SELECT name, description,price FROM products ");
echo "<table border='1'><th>name</th><th>description</th><th>price</th>";
while ($row=mysql_fetch_array($result)){
	echo" <tr><td>".$row{'name'}."</td><td> ".$row{'description'}."</td><td> ".$row{'price'}."</td></tr>";
}
echo "</table>";
}
mysql_close($dbhandle);
?>