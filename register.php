<?php
	session_start(); // this will make application 
		
	if($_SESSION['login'] !="ok") // user can not find its good going to straight trogh other opages 
		
	{
		header ('location:index.html');
		exit(); //application close here 
	}
		
		
		
	// define variables and set to empty values
    $name = $email = $gender = $comment = $website = "";
         
    if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
    }
         
    function test_input($data)
	{
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
	// from code here for register page 
	if($submit)
	{
		$db = mysql_connect("localhost", "root","usbw");
		mysql_select_db("sahar20",$db);
			
		$sql = "INSERT INTO personnel (firstname, lastname, email, password, gender, dob )
			VALUES ('$first','$last','$email','password','gender','dob','$$result = mysql_query($sql)";
					
		echo "Thank you! Information entered.\n";
	}
	else
	{
		?>
			<form method="post" action="register.php">
				First name:	<input type="Text" name="first">	<br>
				Last name:	<input type="Text" name="last">		<br>
				Email   :	<input type="Text" name="email">	<br>
				Password :		<input type="Text" name="password">	<br>
				Gender :		<input type="Text" name="Gneder">	<br>
				DOB :		<input type="Text" name="DOB">	<br>
				<input type="Submit" name="submit" value="submit">
			</form>
		<?
	}
?>