<?php
			$servername =localsost";
			$username "username";
			$password ="password


			//create
			//create connection -->

			$conn = mysqli_connect($servername, $username, $password);

			 // check connection 
			 
			 if (!$conn)
			 {
				 
				 die("connection failed" . mysqli_connect_erro ());
				 
				 
			 }

			 
			 echo "connected successful";
 ?>