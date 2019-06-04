<?php

$servername = "localhost";
$username = "root";
$password = NULL;

try {
    $conn = new PDO("mysql:host=$servername;dbname=bibliotheque", $username, $password); //Connection à la BDD
    // set the PDO error mode to exception
	
	$sql = "SELECT isbn, titre FROM livre"; //On prépare la requête SQL
	
	$stmt = $conn->prepare($sql); //On entre la requête SQL
    $stmt->execute(); //On éxécute
	$stmt->setFetchMode(PDO::FETCH_ASSOC); //On récupère les données

	echo "<table><tr><th>ISBN</th><th>Titre</th></tr>"; //Affichage sous forme de tableau
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