<?php

	$servername ="localhost";
	$username ="username";
	$password ="password";



				//create
				//create connection -->

				$conn = mysqli_connect($servername, $username, $password);

				 // check connection 
				 
				 if (!$conn)
				 {
					 
					 die("connection failed" . mysqli_connect_erro ());
					 
					 
				 }
				 
				 
				 //sql to make table 
				 $sql "create table My Quests
				 {
					 
					 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
						firstname VARCHAR(50) NOT NULL,
						LASTNAME varchar(30)  NOT NULL,
						EMAIL vARCHAR(50),
						REG_DATE TIMESTAMP
						)";
						
						IF (MYSQLI_QUERY($CONN, $SQL)) (
						   ECHO "TABLE mYqUEST CREATED SUCCESSFULY ";
						   ) else (
						   echo "Eroor creating table:".mysqli_error($conn);
						   )
						   
						   mysqli_close($conn);
					   
 ?>
		