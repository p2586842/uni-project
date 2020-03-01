
<?php
	define('DB_SERVER', 'localhost:3036');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', 'rootpassword');
	define('DB_DATABASE', 'database');
	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	
	/* this is config to connect the PHP and HTML */


/*create table */

CREATE TABLE IF NOT EXISTS `login` (
  `Email` varchar(40) NOT NULL,
  `password` varchar(49) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/*Crete the databse table for registration */ 

CREATE TABLE IF NOT EXISTS `registration` (
  `F_Name` varchar(42) NOT NULL,
  `L_Name` varchar(42) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `password` varchar(38) NOT NULL,
  `Gender` varchar(31) NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Register Client PLz here ';

	
?>
