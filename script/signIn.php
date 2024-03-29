<?php
$dbName ="Philipflix";
$dbUser = "root";
$dbPassword = "johnnyestbeau";
$dbHost = "localhost";

try {
    $bdd = new PDO('mysql:host=' . $dbHost . ';dbname=' . $dbName, $dbUser , $dbPassword);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Vous etes connecte";
} catch (PDOException $e) {
    exit("Erreur de connexion : " . $e->getMessage());
}
$username = $_POST["username"];
$password = $_POST["password"];


$query = "SELECT * FROM db_user WHERE username = :username";
$statement = $bdd->prepare($query);
$statement->bindParam(':username', $username);
$statement->execute();
$user = $statement->fetch(PDO::FETCH_ASSOC);

if ($user) {
    if ($password==$user['password']) {
        header( "Location: http://localhost:63342/la-canne-blanche/views/home.php");
    }
    else {
        echo 'Mot de passe incorrect.';
    }
}
else {
    die("Cet utilisateur n'existe pas, veillez le taper a nouveau ou creer un compte.");
    }

?>