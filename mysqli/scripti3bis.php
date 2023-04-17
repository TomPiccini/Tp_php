<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ma_base";
// Création de connexion
$conn = new mysqli($servername, $username, $password, $dbname);
// Vérification de connexion
if ($conn->connect_error) {
 die("Échec de connexion: " . $conn->connect_error);
}
// sql pour créer la table
$sql = "CREATE TABLE inscriptions (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nom VARCHAR(30) NOT NULL,
prenom VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
 echo "Table inscriptions créée";
} else {
 echo "Erreur de création de la table: " . $conn->error;
}
$conn->close();
