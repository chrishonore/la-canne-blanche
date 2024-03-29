<?php
$dbName ="Philipflix";
$dbUser = "root";
$dbPassword = "johnnyestbeau";
$dbHost = "localhost";
try {
    $bdd = new PDO('mysql:host=' . $dbHost . ';dbname=' . $dbName, $dbUser , $dbPassword);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    exit("Erreur de connexion : " . $e->getMessage());
}

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$birthday = $_POST["birthday"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$passwordConf = $_POST["passwordConf"];

$query = "SELECT * FROM User WHERE username = :username";
// Préparation de la requête
$statement = $bdd->prepare($query);
// Liaison de la requêtes avec les données récupérées dans le champ de formulaire
$statement->bindParam(':username', $username);
// Execution de la requête
$statement->execute();
// Récupération des données trouvée
$user = $statement->fetch(PDO::FETCH_ASSOC);


// Si $user est vide, la requête n'a rien trouvé dans la DB
if ($user) {
    echo "L'utilisateur existe deja, veillez choisir un autre nom d'utilisateur.";
} else {
    if ($password == $passwordConf) {
        // Préparation de la requête d'insertion
        $requete = $bdd->prepare("INSERT INTO user (firstName, lastName, birthday, email, username, password, passwordConf) VALUES (:firstName, :lastName, :birthday, :username, :password :passwordConf)");


// Liaison des valeurs aux paramètres de la requête
        $requete->bindParam(':firstName', $firstName);
        $requete->bindParam(':lastName', $lastName);
        $requete->bindParam(':birthday', $birthday);
        $requete->bindParam(':email', $email);
        $requete->bindParam(':username', $username);
        $requete->bindParam(':password', $password);
        $requete->bindParam(':passwordConf', $passwordConf);


// Exécution de la requête
        $requete->execute();
        echo "utilisateur ajouté";
        header("Location: http://localhost:63342/la-canne-blanche/views/login.php");
    }
    else{
        echo "les deux mots de passes ne correspondent pas !";
    }
}
?>
