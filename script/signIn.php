<?php
global $conn;
require('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash du mot de passe

    if (empty($username) || empty($password)) {
        echo "Veuillez remplir tous les champs.";
    } elseif (!filter_var($password, FILTER_VALIDATE_password)) {
    echo "Mot de passe invalid  .";
    } else {

    }
    }

    $query = "INSERT INTO users (username, password) 
VALUES ('$username', '$password');
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Connecsion réussie !";
    } else {
        echo "Erreur lors de la connecsion. Veillez verifier le nom d'utilisateur ou le mot de passe";
    }
}
?>