     CREATE DATABASE IF NOT EXISTS Philipflix ;
 use Philipflix;
     CREATE TABLE IF NOT EXISTS User
(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    birthday  DATE NOT NULL,
    email VARCHAR(50) NOT NULL,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(200) NOT NULL,
    passwordConf VARCHAR(200) NOT NULL,

    INSERT INTO User (firstName, lastName, birthday, email, username, password, passwordConf)
VALUES (Storme, Anna, anna@gmail.com, 12.12.2009, anabanana, 12345Asdf, 12345Asdf);


