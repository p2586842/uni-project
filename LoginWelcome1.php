<?php
session_start();
if(!session_is_registered(username))
{
  header("location:Login.html");
}
?>
<html>
<head>
<title>
Piano Tutorial  - Customer Login
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
<h1>Pianist Technic  Office Supplies</h1>
<h2>Customer Login</h2>
<p>Welcome back, <?php echo $_SESSION["firstname"]; ?>!</p>
</body>
</html>

