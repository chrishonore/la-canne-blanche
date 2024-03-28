<?php
// Donnée de connexion à DB
$dbName = "users";
$dbUser = "username";
$dbPassword = "password";
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
$username = $_POST["username"];
$password = $_POST["password"];


// Requête SQL pour vérifier l'utilisateur
$query = "SELECT * from db_user_ WHERE username = :username";
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
    // Vérification du mot de passe, si il correspond entre le mot de passe du champ de formulaire front et le mot de passe trouvé dans la DB avec notre requête
    if ($password==$user['Password']) {
        echo 'Connexion réussie !'; // Ou rediriger vers une page de succès
    } else {
        echo 'Mot de passe incorrect.';
    }
} else {
    // Dans le else, tu dois mettre le comportement si jamais le nom d'utilisateur n'existe pas dans la base de donnée. Ici je l'ajoute, mais vous, ça sera peut-être autre chose !



    // Préparation de la requête d'insertion
    $requete = $bdd->prepare("INSERT INTO login_password (Username, Password) VALUES (:username, :password)");


// Liaison des valeurs aux paramètres de la requête
    $requete->bindParam(':username', $username);
    $requete->bindParam(':password', $password);


// Exécution de la requête
    $requete->execute();
    echo "utilisateur ajouté";
}




?>
