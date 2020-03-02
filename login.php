<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sahar20.sql";

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
			




