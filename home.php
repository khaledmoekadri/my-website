<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: login.php");
  exit;
 }
 // select loggedin users detail
 $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
?>







<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['userEmail']; ?></title>
<script src="jquery-2.1.1.min.js"></script>
<script>
$(document).ready(function()
{
$("#flip").click(function(){
$("#panel").slideDown(600);
});
});
</script>
<style>
#footer{
      background-color:red;
       color:white;
       clear:both;
       text-align:center;
       padding:10px;
}

#panel,#flip
{
padding: 5px;
text-align: center;
background-color: red;
border: solid 1px black;
}
#panel
{
	padding: 30px;
	display: none; /*none or block*/
}
</style>




<style type="text/css">
ul{
font-family:arial;
font-size:14px;
margin:0;
padding:0;
list-style:none;
}
ul li {
display: block;
position: relative;
float:left;
}
li ul {
display:none;
}
ul li a{
display:block;
text-decoration:none;
color:#ffffff;
border-top:1px solid #ffffff;
padding:5px 15px 5px 15px;
background:blue;
margin-left:1px;
white-space:nowrap;
}
ul li a:hover{
background:#3b3b3b;
}
li:hover ul {
display:block;
position:absolute;
}
li:hover li{
float:none;
font-size:11px;
}
li:hover a{background:#3b3b3b;}
li:hover li a:hover{
background:#1e7c9a;
}
</style>
</head>


<body background="23316156_1855141194797938_120994597_n.jpg">
<div id="flip"><marquee scrolldelay="200" height="40" width="1400" bgcolor="red" direction="right"><font color="blue">Click t slide down</font></marquee><br></div>
<div id="panel">
<ul id="menu">
<li><a href="home.php">login home</a></li>
<li><a href="buy.php">Buy Products</a>
<li><a href="slideshow.html">Some Images</a>

<ul>

</ul>
</li>
</ul>
<a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a>
</div><br>
<span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $userRow['userEmail']; ?>&nbsp;<span class="caret"></span></a>

</body><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="footer">
<i><b>WELCOME TO OUR HOME PAGE</b></i>
</div>
</html>