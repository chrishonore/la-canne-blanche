     CREATE DATABASE Philipflix IF NOT EXISTS  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

            use Philipflix;
CREATE TABLE IF NOT EXISTS User
(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(30) NOT NULL,
    prenom VARCHAR(30) NOT NULL,
    dateNaissance  DATE NOT NULL,
    email VARCHAR(50) NOT NULL,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(200) NOT NULL,
    passwordConf VARCHAR(200) NOT NULL,

);