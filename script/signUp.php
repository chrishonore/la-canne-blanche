<?php
$dbName = "philipflix";
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

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$dateNaissance = $_POST["dateNaissance"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$passwordConf = $_POST["passwordConf"];

$query = "SELECT * FROM db_user WHERE username = :username";
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
        $requete = $bdd->prepare("INSERT INTO db_user (nom, prenom, dateNaissance, email, username, password) VALUES (:nom, :prenom, :dateNaissance, :username, :password)");


// Liaison des valeurs aux paramètres de la requête
        $requete->bindParam(':nom', $nom);
        $requete->bindParam(':prenom', $prenom);
        $requete->bindParam(':dateNaissance', $dateNaissance);
        $requete->bindParam(':email', $email);
        $requete->bindParam(':username', $username);
        $requete->bindParam(':password', $password);


// Exécution de la requête
        $requete->execute();
        echo "utilisateur ajouté";
        header("Location: http://localhost:63342/la-canne-blanche/views/login.php");
    }
    else{
        echo "les deux mots de passes entré ne correspondent pas !";
    }
}
?>