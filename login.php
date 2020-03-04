<?php

include ('config.php');
include('vendor/autoload.php');


$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = <<<TAG
uni-project/sahar20.sql
TAG;

try {
    $conn = new PDO("mysql:host=$servername;dbname=sahar20.sql", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;


?>
<footer>
				Copyright &copy; Facebook
</footer>





