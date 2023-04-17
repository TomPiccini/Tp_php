<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ma_base";
// Création de connexion
$conn = new mysqli($servername, $username, $password, $dbname);
// Vérification de connexion
if ($conn->connect_error) {
 die("Echec de connexion: " . $conn->connect_error);
}
$sql = "INSERT INTO inscriptions (nom, prenom, email)
VALUES ('John', 'Doe', 'rayckarick@gmail.com')";
if ($conn->query($sql) === TRUE) {
 echo "Nouveau enregistrement ajouté";
} else {
 echo "Erreur: " . $sql . "<br>" . $conn->error;
}
$conn->close();
