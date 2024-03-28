<?php
require('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom=$_POST[ 'nom'];
    $prenom=$_POST['prenom'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users(nom,prenom,username,email,password)VALUES('$username','$email', '$password')";
    $conn = 1;
    $result = mysqli_query($query, $conn);

    if ($result) {
        echo "Inscription réussie !";
    } else {
        echo "Erreur lors de l'inscription.";
    }
}
?>