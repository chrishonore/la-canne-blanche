<?php
// Donnée de connexion à DB
$dbName = " Philipflix";
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
$categorie=$_POST["categorie"];
$title = $_POST["title"];
$description=$_POST["description"];
$image=$_POST["image"];
$link=$_POST["link"];
$netflix=$_POST["netflix"];
$appeltv=$_POST["appeltv"];
$prime=$_POST["prime"];
$DisneyPlus=$_POST["DisneyPlus"];
// Requête SQL pour vérifier l'utilisateur
$query = "INSERT INTO series ( categorie,titre, description ,image,link,netflix,appeltv,primeDisneyPlus) VALUES ( :categorie,:titre, :description,:image,:link,:netflix,:appeltv,:prime,:DisneyPlus)";

// Préparation de la requête
$statement = $bdd->prepare($query);
// Liaison de la requêtes avec les données récupérées dans le champ de formulaire
$statement->bindParam(':categorie', $categorie);
$statement->bindParam(':title', $title);
$statement->bindParam(':description', $description);
$statement->bindParam(':image', $image);
$statement->bindParam(':link', $link);
$statement->bindParam(':netflix', $netflix);
$statement->bindParam(':appelTv', $appeltv);
$statement->bindParam(':prime', $prime);
$statement->bindParam(':disneyPlus', $DisneyPlus);

// Execution de la requête
$statement->execute();





?>
