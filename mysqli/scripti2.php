<?php
$servername = "localhost";
$username = "root";
$password = "root";
// Création de connexion
$conn = mysqli_connect($servername, $username, $password);
// Vérification de connexion
if (!$conn) {
    die("Échec de connexion" . mysqli_connect_error());
}
// Création de la base de données
$sql = "CREATE DATABASE ma_base";
if (mysqli_query($conn, $sql)) {
    echo "Base de données créée";
} else {
    echo "Erreur de création :" . mysqli_error($conn);
}
mysqli_close($conn);