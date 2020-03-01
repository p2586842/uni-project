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
			 //create databse
			 $sql ="create Database myDB";
			 
			 if(mysqli_query($conn, $sql)) {
			 echo "databse create successfully" ;
			 }
			 else {
			  echo "erorr creating databse:" .mysqli_erorr($conn);
			  }
			  
			  mysqli_close($conn);
  
  ?>
  