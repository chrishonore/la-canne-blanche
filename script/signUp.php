<?php
global $conn;
require('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash du mot de passe

    $query = "INSERT INTO users (username, password) VALUES ('$username','$password')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Inscription réussie !";
    } else {
        echo "Erreur lors de l'inscription.";
    }
}
?>

