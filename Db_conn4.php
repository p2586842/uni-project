<?php
		
		
		$servername ="localsost";
		$username ="username";
		$password ="password";




		//create
		//create connection -->

		$conn = mysqli_connect($servername, $username, $password);

		 // check connection 
		 
		 if (!$conn->connect_erorr) {
		 die("connection failed:".$conn->connect_eror};
		 }
		 
		 //sql to crate table
		 $sql="Create table MyQuests (
		 id INT(6)  unsigned auto_increment Primary key, firstname Varchar(30) not null, lastname Varchar(50),
		 reg_date Timestamp
		 )";
		 
		 if ($conn->query($sql) === True ) ( 
		 
		 
			echo "table MyQuests created successfully";
			}
			else 
			 echo "error creating table :".$conn->error;
			 }
			 $conn->close();
			 
	 
	 ?>
 