<?php
$dbName = "Philipflix";
$dbUser = "root";
$dbPassword = "admindev";
$dbHost = "127.0.0.1";

try {
    $bdd = new PDO('mysql:host=' . $dbHost . ';dbname=' . $dbName, $dbUser , $dbPassword);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM series";
    $statement = $bdd->prepare($sql);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $final = $results;
} catch (PDOException $e) {
    exit("Erreur de connexion : " . $e->getMessage());
}




?>
