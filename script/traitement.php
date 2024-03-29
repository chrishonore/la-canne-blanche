<?php
// Donnée de connexion à DB
$dbName = "Philipflix";
$dbUser = "root";
$dbPassword = "2004.1Anthony";
$dbHost = "127.0.0.1";

try {
    $bdd = new PDO('mysql:host=' . $dbHost . ';dbname=' . $dbName, $dbUser , $dbPassword);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion à la base de donnée réussie";
} catch (PDOException $e) {
    exit("Erreur de connexion : " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST["title"];
    $category = $_POST["title"];
    $description = $_POST["description"];
    $image = $_POST["image"];
    $Lien_trailer = $_POST["Lien_trailer"];

    $netflix = isset($_POST['netflix']) ? 1 : 0;
    $appeltv = isset($_POST['AppelTv']) ? 1 : 0; // Attention à la casse et au nom exact de la variable !
    $prime = isset($_POST['prime']) ? 1 : 0;
    $DisneyPlus = isset($_POST['DisneyPlus']) ? 1 : 0;

    $query = "INSERT INTO series (
    title, category, description, image, lien_trailer, netflix, appletv, prime, disneyplus)
    VALUES (:title, :category,  :description, :image, :lien_trailer, :netflix, :appeltv, :prime, :disneyplus)";

    $statement = $bdd->prepare($query);


    $statement->bindParam(':title', $title);
    $statement->bindParam(':category', $category);
    $statement->bindParam(':description', $description);
    $statement->bindParam(':image', $image);
    $statement->bindParam(':lien_trailer', $Lien_trailer);
    $statement->bindParam(':netflix', $netflix, PDO::PARAM_INT);
    $statement->bindParam(':appletv', $appeltv, PDO::PARAM_INT); // Utilisez ':appletv' et non ':AppelTv'
    $statement->bindParam(':prime', $prime, PDO::PARAM_INT);
    $statement->bindParam(':disneyplus', $DisneyPlus, PDO::PARAM_INT);


    $statement->execute();

}



?>
