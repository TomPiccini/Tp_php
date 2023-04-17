<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ma_base";
// Création de connexion
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Vérification de connexion
if (!$conn) {
 die("Echec de connexion: " . mysqli_connect_error());
}
$sql = "INSERT INTO inscriptions (nom, prenom, email)
VALUES ('John', 'Doe', 'rayckarick@gmail.com')";
if (mysqli_query($conn, $sql)) {
 echo "Nouveau enregistrement ajouté ";
} else {
 echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
