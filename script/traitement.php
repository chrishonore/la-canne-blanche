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
$netflix=$_POST["netflix"];
$appeltv=$_POST["appeltv"];
$prime=$_POST["PRIME"];
$DisneyPlus=$_POST["DisneyPlus"];
// Requête SQL pour vérifier l'utilisateur
$query = "INSERT INTO series (id_series, title, description, image, Lien_trailer, netflix, appeltv, primeDisneyPlus) VALUES (:categorie, :titre, :description, :image, :link, :netflix, :appeltv, :prime, :DisneyPlus)";
// Préparation de la requête
$statement = $bdd->prepare($query);
// Liaison de la requêtes avec les données récupérées dans le champ de formulaire
$statement->bindParam(':id_series',$id_series);
$statement->bindParam(':title', $title);
$statement->bindParam(':description', $description);
$statement->bindParam(':image', $image);
$statement->bindParam(':Lien_trailer', $link);
$statement->bindParam(':netflix', $netflix);
$statement->bindParam(':appelTv', $appeltv);
$statement->bindParam(':prime', $prime);
$statement->bindParam(':disneyPlus', $DisneyPlus);

// Execution de la requête
$statement->execute();





?>
