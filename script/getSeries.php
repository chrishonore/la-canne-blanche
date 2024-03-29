<?php
$dbName = "Philipflix";
$dbUser = "root";
$dbPassword = "2004.1Anthony";
$dbHost = "localhost";

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
