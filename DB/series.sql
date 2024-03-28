CREATE TABLE IF NOT EXISTS series
(
    id_series INT PRIMARY KEY AUTO_INCREMENT,
    Title VARCHAR(50) NOT NULL,
    Description VARCHAR(350) NOT NULL,
    Image VARCHAR(100) NOT NULL,
    Lien_trailer VARCHAR(350) NOT NULL,
    Netflix BOOLEAN,
    Appletv BOOLEAN,
    Prime BOOLEAN,
    Disneyplus BOOLEAN
    );

INSERT INTO series(Title, Description, Image, Lien_trailer, Netflix, Appletv, Prime, Disneyplus)
VALUES ('La Casa de Papel', 'Huit voleurs font une prise d''otages dans la Maison royale de la Monnaie d''Espagne, tandis qu''un génie du crime manipule la police pour mettre son plan à exécution.', 'URL_de_l_image', 'URL_du_trailer', NULL, NULL, NULL, NULL);
INSERT INTO series(Title, Description, Image, Lien_trailer, Netflix, Appletv, Prime, Disneyplus)
VALUES ('the ')