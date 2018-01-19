<?php
$username = "root";
$password = "khaled12345678";
$hostname = "localhost";
$dbhandle=mysql_connect($hostname,$username,$password)
or die("unable to connect to MySQL");
echo "Connected to MySQL<br>";
$selected=mysql_select_db("dbtest",$dbhandle)
or die("could not select studenDatabase");
$submit = $_POST['b'];
if($submit){
$result=mysql_query("SELECT userName, userEmail,userPass FROM users ");
echo "<table border='1'><th>name</th><th>email</th><th>Password</th>";
while ($row=mysql_fetch_array($result)){
	echo" <tr><td>".$row{'userName'}."</td><td> ".$row{'userEmail'}."</td><td> ".$row{'userPass'}."</td></tr>";
}
echo "</table>";
}
mysql_close($dbhandle);
?>