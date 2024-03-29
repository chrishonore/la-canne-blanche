 use Philipflix;
 CREATE TABLE User (
                           id           INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                      firstName    VARCHAR(30)  NOT NULL,
                      lastName     VARCHAR(30)  NOT NULL,
                      birthday     DATE         NOT NULL,
                      email        VARCHAR(50)  NOT NULL,
                      username     VARCHAR(30)  NOT NULL,
                      password     VARCHAR(200) NOT NULL,
                      passwordConf VARCHAR(200) NOT NULL
);

 INSERT INTO User (firstName, lastName, birthday, email, username, password, passwordConf)
 VALUES ('Storme', 'Anna', '2009-12-12', 'anna@gmail.com', 'anabanana', '12345Asdf', '12345Asdf');
