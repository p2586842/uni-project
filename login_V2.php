<?php

mysql_connect(localhost,"root","password");
mysql_select_db("leeoffsup") or die("Unable to select database");
$username=$_POST['username'];
$password=$_POST['password'];
$query="select * from Users where Username='$username' and binary Password='$password'";
$result=mysql_query($query);
$num=mysql_num_rows($result);
mysql_close();
if($num==1)
{
  $firstname = mysql_result($result,$i,"FirstName");
  session_start();
  $_SESSION["firstname"] =$firstname;
  $_SESSION["username"] =$username;
  $_SESSION["password"] =$password;
  header("location:LoginWelcome.php");
}
else
{
  echo "<style>body, h1, h2 {font-family: Verdana, Arial, Helvetica, sans-serif;";
  echo "background-color:cyan;";
  echo "text-align:center;}";
  echo "</style>";
  echo "<h1>Lee Office Supplies</h1>";
  echo "<h2>Customer Login</h2>";
  echo "Sorry, we could not log you in.<br>";
  echo "Please try again.";
  echo "<form><input type='button' value='OK' onclick='history.back();'></form>";
}
?>

<html>
<head>
<title>
<title>Home Page</title>
		<link rel="stylesheet" href="my_style.css">
		<meta charset="UTF-8">
		<meta name="description" 	content="Free Web tutorials">
		<meta name="keywords" 		content="HTML,CSS,XML,JavaScript">
		<meta name="author" 		content="Facebook">
</title>
<style>
table
{
background-color:powderblue;
width:30%;
margin:auto;
}
body
{
font-family: Verdana, Arial, Helvetica, sans-serif;
background-color:cyan;
text-align:center;
}
</style>
<body>
 <div class="logo">
			<img src="logo.png" alt="logo" width="100" height"100"> <br>
		  </div>
			
<h1>Piano Tutorial</h1>
<h2>Customer Login</h2>
<form name="mylogin" method="post" action="LoginCheck.php">
<table border="0" align="center">
<tr><td>Username</td>
<td><input name="username" type="text"></td></tr>
<tr><td>Password</td>
<td><input name="password" type="password"></td></tr>
<tr><td>Email</td>
<td><input name="Email" type="text"></td></tr>
</table>
<input name="submit"  type="submit" value="Login"></td></table>
</form>
<nav>
				<ul>
					<li><a href="index.html">		Home Page</a></li>
					<li><a href="product.html">		Product</a></li>
					<li><a href="about_us.html">	About Us</a></li>
					<li><a href="legal.html">		Legal Information</a></li>
					<li><a href="google_map.html">	Google Map</a></li>
				 </ul>
			</nav>
			
</body>
</html>
<footer>
				Copyright &copy; Facebook
			</footer>
			






