<?php

$servername = "localhost";
$username = "root";
$password = NULL;

try {
    $conn = new PDO("mysql:host=$servername;dbname=bibliotheque", $username, $password);
    // set the PDO error mode to exception
	
	$sql = "SELECT isbn, titre FROM livre";
	
	$stmt = $conn->prepare($sql);
    $stmt->execute(); 
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 

	echo "<table><tr><th>ISBN</th><th>Titre</th></tr>";
	// output data of each row
	while($row = $stmt->fetch()) {
		echo "<tr><td>".$row["isbn"]."</td><td>".$row["titre"]."</td></tr>";
		}
	echo "</table>";
	}
	
catch(PDOException $e){
	echo "Connection failed: " . $e->getMessage();
    }

$conn = null;	
?>
