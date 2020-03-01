<?php
		$servername ="localhost";
		$username ="username";
		$password ="password";



		//create
		//create connection -->

		$conn = mysqli_connect($servername, $username, $password);

		 // check connection 
		 
		 if ($conn->connect_error)
		 {
			 
			 die("connection failed" .$conn->connect_erro ());
			 
			 //create database
		 }
		$sql="create database myDB";
		if($conn->query($sql) === TRUE)
		{
			echo "database Crreate Successfully";
		} else
		{
			echo "error creating database:" .$conn->error;
			
		}
			
		}
		$conn->close();

 ?>
 