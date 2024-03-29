<?php
// Donnée de connexion à DB
$dbName = "Philipflix";
$dbUser = "root";
$dbPassword = "tessia";
$dbHost = "localhost";// dans votre cas : localhost
try {
    // Connexion à la DB
    $bdd = new PDO('mysql:host=' . $dbHost . ';dbname=' . $dbName, $dbUser , $dbPassword);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion à la base de donnée réussie";
} catch (PDOException $e) {
    // Affichage des erreurs si jamais il y en a
    exit("Erreur de connexion : " . $e->getMessage());
}
// Assignation des valeurs récupérées du front aux variables

$title = $_POST["title"];
$description=$_POST["description"];
$image=$_POST["image"];
$Lien_trailer=$_POST["Lien_trailer"];
if (isset($_POST["netflix"])) {
    $netflix = 1;
}
else{
    $netflix=0;
}
if (isset($_POST["AppelTv"])) {
    $appeltv =1;
}
else{
    $appeltv =0;
}
if (isset($_POST["prime"]))
{
    $prime=1;
}
else{
    $prime=0;
}
if (isset($_POST["DisneyPlus"])) {
    $DisneyPlus = 1;
}
else{
    $DisneyPlus=0;
}
// Requête SQL pour vérifier l'utilisateur
$query = "INSERT INTO series ( title, description, image, Lien_trailer, netflix, appletv, prime,disneyplus) VALUES (:title, :description, :image, :link, :netflix, :appeltv, :prime, :DisneyPlus)";
// Préparation de la requête
$statement = $bdd->prepare($query);
// Liaison de la requêtes avec les données récupérées dans le champ de formulaire
$statement->bindParam(':title', $title);
$statement->bindParam(':description', $description);
$statement->bindParam(':image', $image);
$statement->bindParam(':link', $Lien_trailer);
$statement->bindParam(':netflix', $netflix);
$statement->bindParam(':appeltv', $appeltv);
$statement->bindParam(':prime', $prime);
$statement->bindParam(':DisneyPlus', $DisneyPlus);

// Execution de la requête
$statement->execute();





?>
