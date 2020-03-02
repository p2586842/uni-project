<?php
include ('vendor/autoload.php');

$db = new Db();

$myusername = $_POST['username'];
$mypassword = $_POST['password'];
$myusername = stripcslashes($myusername);
$mypassword = stripcslashes($mypassword);

$user_query = $db->query("SELECT * FROM login WHERE Email='$myusername' AND password='$mypassword'");

if($user_query->rowCount() == 1)
{
    $login_time = 180 + time();
    setcookie('logged_in', date("F jS - g:i a"), $login_time);
    header ("location:login_v20.php");
    die();
} else {
    echo 'incorrect username and/or password, you are not connected';
}


if(!isset($_COOKIE['logged_in']))
{
    header("location:index.php");
}

?>
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
<form name="mylogin" method="post" action="Login_v20.php">
<table border="0" align="center">
<tr><td>Username/E-mail</td>
<td><input name="username" type="text"></td></tr>
<tr><td>Password</td>
<td><input name="password" type="password"></td></tr>
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
			






