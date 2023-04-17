<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ma_base";
// Création de connexion
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Vérification de connexion
if (!$conn) {
    die("Erreur de connexion: " . mysqli_connect_error());
}
// sql pour créer la table
$sql = "CREATE TABLE inscriptions (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nom VARCHAR(30) NOT NULL,
prenom VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if (mysqli_query($conn, $sql)) {
    echo "Table inscriptions créée ";
} else {
    echo "Erreur de création: " . mysqli_error($conn);
}
mysqli_close($conn);
