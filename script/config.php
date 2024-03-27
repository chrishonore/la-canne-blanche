<?php
const DB_SERVER = 'localhost';
const DB_USERNAME = '';
const DB_PASSWORD = '';
const DB_NAME = 'registration';

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn === false) {
    die("ERREUR : Impossible de se connecter à la base de données." . mysqli_connect_error());
}
?>
