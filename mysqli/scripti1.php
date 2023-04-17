<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Création de connexion
$conn = new mysqli($servername, $username, $password);
// Vérification de connexion
if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
}
echo " Connecté";
