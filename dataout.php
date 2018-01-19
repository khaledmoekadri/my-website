<HTML>
<head>
</head>
<body>
<?php
date_default_timezone_set('UTC');
$db = mysql_connect("localhost", "root","khaled12345678");
mysqli_select_db($db,"dbtest");
$id=$_POST['idelete'];
mysql_query("DELETE FROM users WHERE userId=$id");
echo "Information Deleted";
?>
</body>
</HTML>