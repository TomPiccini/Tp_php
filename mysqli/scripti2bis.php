<?php
$servername = "localhost";
$username = "root";
$password = "root";
// Création de connexion
$conn = new mysqli($servername, $username, $password);
// Vérification de connexion
if ($conn->connect_error) {
 die("Échec de connexion: " . $conn->connect_error);
}
// Création de la base de données
$sql = "CREATE DATABASE ma_base";
if ($conn->query($sql) === TRUE) {
 echo " Base de données créée ";
} else {
 echo " Erreur de création :" . $conn->error;
}
$conn->close();
?>