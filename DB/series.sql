CREATE TABLE IF NOT EXISTS series
(
    id_series INT PRIMARY KEY AUTO_INCREMENT,
    Title VARCHAR(50) NOT NULL,
    categorie VARCHAR(50) NOT NULL,
    Description VARCHAR(350) NOT NULL,
    Image VARCHAR(100) NOT NULL,
    Lien_trailer VARCHAR(350) NOT NULL,
    Netflix BOOLEAN,
    Appletv BOOLEAN,
    Prime BOOLEAN,
    Disneyplus BOOLEAN
    );

INSERT INTO series(Title, categorie, Description, Image, Lien_trailer, Netflix, Appletv, Prime, Disneyplus)
VALUES ('La Casa de Papel', 'action', 'Huit voleurs font une prise d''otages dans la Maison royale de la Monnaie d''Espagne, tandis qu''un génie du crime manipule la police pour mettre son plan à exécution.', 'la_casa de_papel.jpg', 'https://www.youtube.com/watch?v=_yJxbWKN3zE', TRUE, FALSE, FALSE, FALSE);

INSERT INTO series(Title, categorie, Description, Image, Lien_trailer, Netflix, Appletv, Prime, Disneyplus)
VALUES ('the walking dead', 'SF', 'Après une apocalypse ayant transformé la quasi-totalité de la population en zombies, un groupe d''hommes et de femmes mené par l''officier Rick Grimes tente de survivre. Ensemble, ils vont devoir tant bien que mal faire face à ce nouveau monde.', 'the_walking_dead.jpg', 'https://www.youtube.com/watch?v=AbtiqJGhWyY', TRUE, FALSE, FALSE, FALSE);

INSERT INTO series(Title, categorie, Description, Image, Lien_trailer, Netflix, Appletv, Prime, Disneyplus)
VALUES ('lucifer', 'comédie', 'Lassé et mécontent de sa position de Seigneur des Enfers, Lucifer Morningstar démissionne et abandonne son royaume pour la bouillonnante Los Angeles. Dans la Cité des Anges, l''ex maître diabolique est le patron d''un nightclub baptisé Lux.', 'lucifer.jpg', 'https://www.youtube.com/watch?v=_C38JnP-p_8', TRUE, FALSE, FALSE, FALSE);

INSERT INTO series(Title, categorie, Description, Image, Lien_trailer, Netflix, Appletv, Prime, Disneyplus)
VALUES ('peaky blinders', 'action', 'Birmingham, en 1919. Un gang familial règne sur un quartier de la ville : les Peaky Blinders, ainsi nommés pour les lames de rasoir qu''ils cachent dans la visière de leur casquette.', 'peaky_blinders.jpg', 'https://www.youtube.com/watch?v=F16x9poSXrc', TRUE, FALSE, FALSE, FALSE);

INSERT INTO series(Title, categorie, Description, Image, Lien_trailer, Netflix, Appletv, Prime, Disneyplus)
VALUES ('Le Problème à 3 corps', 'SF', 'Une décision prise dans la Chine des années 60 se répercute par-delà l''espace et le temps. Des scientifiques du présent doivent alors affronter la pire menace de l''humanité.', 'Le_Problème_à_3_corps.jpg', 'https://www.youtube.com/watch?v=VHWoTxKUxMM', TRUE, FALSE, FALSE, FALSE);

INSERT INTO series(Title, categorie, Description, Image, Lien_trailer, Netflix, Appletv, Prime, Disneyplus)
VALUES ('Znation', 'SF', 'Le lieutenant Mark Hammond a pour mission d''escorter Murphy, le seul être humain immunisé contre l''infection du virus zombie, de New York en Californie, où le dernier laboratoire viral en fonctionnement attend son sang.', 'znation.jpg ', 'https://www.youtube.com/watch?v=cIB_ozUxrAQ', TRUE, FALSE, FALSE, FALSE);

INSERT INTO series(Title, categorie, Description, Image, Lien_trailer, Netflix, Appletv, Prime, Disneyplus)
VALUES ('squid game', 'horreur', 'Des personnes en difficultés financières sont invitées à une mystérieuse compétition de survie. Participant à une série de jeux traditionnels pour enfants, mais avec des rebondissements mortels, elles risquent leur vie pour une grosse somme d''argent.', 'squid_game.jpg', 'https://www.youtube.com/watch?v=GYoD8oOH31M', TRUE, FALSE, FALSE, FALSE);

INSERT INTO series(Title, categorie, Description, Image, Lien_trailer, Netflix, Appletv, Prime, Disneyplus)
VALUES ('Mercredi', 'horreur', 'A présent étudiante à la singulière Nevermore Academy, un pensionnat prestigieux pour parias, Wednesday Addams tente de s''adapter auprès des autres élèves tout en enquêtant sur une série de meurtres qui terrorise la ville.', 'mercredi.jpg', 'https://www.youtube.com/watch?v=VCB4W8SV744', TRUE, FALSE, FALSE, FALSE);
