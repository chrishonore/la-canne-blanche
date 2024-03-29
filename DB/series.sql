drop database Philipflix;
CREATE DATABASE IF NOT EXISTS Philipflix CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE Philipflix;

CREATE TABLE IF NOT EXISTS series (
                                      id_series INT PRIMARY KEY AUTO_INCREMENT,
                                      title VARCHAR(50) NOT NULL,
    categorie VARCHAR(50) NOT NULL,
    description VARCHAR(350) NOT NULL,
    image VARCHAR(500) NOT NULL,
    lien_trailer VARCHAR(500) NOT NULL,
    netflix BOOLEAN,
    appletv BOOLEAN,
    prime BOOLEAN,
    disneyplus BOOLEAN
    );

INSERT INTO series(title, categorie, description, image, lien_trailer, netflix, appletv, prime, disneyplus)
VALUES ('La Casa de Papel', 'action', 'Huit voleurs font une prise d''otages dans la Maison royale de la Monnaie d''Espagne, tandis qu''un génie du crime manipule la police pour mettre son plan à exécution.', 'https://occ-0-767-1335.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABVqWVujN-BUQ3oO2xdbXelb4V7h2QClUdrE8scrOgUgvudpSpGKkyQKsHbymxSenhNrns7MjIO8Hc2g6FRU1N_frvvjut5ogx5ezbYTYkvqaFd1yHYe1gm-iE6EsgnCLpIOK.jpg?r=c62', 'https://www.youtube.com/watch?v=_yJxbWKN3zE', TRUE, FALSE, FALSE, FALSE);

INSERT INTO series(title, categorie, description, image, lien_trailer, netflix, appletv, prime, disneyplus)
VALUES ('the walking dead', 'SF', 'Après une apocalypse ayant transformé la quasi-totalité de la population en zombies, un groupe d''hommes et de femmes mené par l''officier Rick Grimes tente de survivre. Ensemble, ils vont devoir tant bien que mal faire face à ce nouveau monde.', 'https://occ-0-767-1335.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABfQuNegkrQOd5GujjowtDNNRnwr8HhNN0Qb0miAIPOFgee4jhCTxOIWgoOTZp2r6MH3JOt4Of9a8KzGBqbZePpgFvJaO0FytPuk.webp?r=3f6', 'https://www.youtube.com/watch?v=AbtiqJGhWyY', TRUE, FALSE, FALSE, FALSE);

INSERT INTO series(title, categorie, description, image, lien_trailer, netflix, appletv, prime, disneyplus)
VALUES ('lucifer', 'comédie', 'Lassé et mécontent de sa position de Seigneur des Enfers, Lucifer Morningstar démissionne et abandonne son royaume pour la bouillonnante Los Angeles. Dans la Cité des Anges, l''ex maître diabolique est le patron d''un nightclub baptisé Lux.', 'https://occ-0-767-1335.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABVuuY6ld3ibuFxrr7RKGRLdqcMdZLV2zkfQKRJNtD0xPv3ce6zuFhrvLCEghwb8UcxCxoIJYLB9OtuHFe8oWqxI-avcpdEwDlsMAHJDUmYIkGknA-RXngXFywFRsEo1M7SIl.jpg?r=3c9', 'https://www.youtube.com/watch?v=_C38JnP-p_8', TRUE, FALSE, FALSE, FALSE);

INSERT INTO series(title, categorie, description, image, lien_trailer, netflix, appletv, prime, disneyplus)
VALUES ('peaky blinders', 'action', 'Birmingham, en 1919. Un gang familial règne sur un quartier de la ville : les Peaky Blinders, ainsi nommés pour les lames de rasoir qu''ils cachent dans la visière de leur casquette.', 'https://occ-0-767-1335.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABbN-fvG60EWJXh7libv67ZQakx4P4FpNS7RURBpxS-UtadwVQKtY-8Hq7CA4QwaU5lpaZzmadF0YzQqVZXQG9mDZtG5MFZXxjNoBQ7LjQWO6Q17lS1nzCDEPEvykniaxWBz1.jpg?r=a62', 'https://www.youtube.com/watch?v=F16x9poSXrc', TRUE, FALSE, FALSE, FALSE);

INSERT INTO series(title, categorie, description, image, lien_trailer, netflix, appletv, prime, disneyplus)
VALUES ('Le Problème à 3 corps', 'SF', 'Une décision prise dans la Chine des années 60 se répercute par-delà l''espace et le temps. Des scientifiques du présent doivent alors affronter la pire menace de l''humanité.', 'https://occ-0-767-1335.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABTrUU544o2L_TjDTvDpJhRP1PhAygf2v-pzBzuC2eA1CMEIIjNhY4-JiTXctVClZqAwS_2hIl-Fs4cPkGRFKAYBr-jpyDZ6HB8JtZG0tqD4zVm26vKZo_sZdZUxN22hcFef9UmeFN77ZasyRAcqUNKB0899-u5LuNiSnOMjDzFzEW70M21VcWOgjnzjlyA4.jpg?r=0e8', 'https://www.youtube.com/watch?v=VHWoTxKUxMM', TRUE, FALSE, FALSE, FALSE);

INSERT INTO series(title, categorie, description, image, lien_trailer, netflix, appletv, prime, disneyplus)
VALUES ('Znation', 'SF', 'Le lieutenant Mark Hammond a pour mission d''escorter Murphy, le seul être humain immunisé contre l''infection du virus zombie, de New York en Californie, où le dernier laboratoire viral en fonctionnement attend son sang.', 'https://occ-0-767-1335.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABV263NtsJhWS_LDFwqXe9uihmKABVMfxpC9eAE6ZZf9x2eAYavXoWsxdCr-9N4Fa23BySPhgfj4mNpn_lDwAQG2yUmMHusPgxjk.webp?r=0cd', 'https://www.youtube.com/watch?v=cIB_ozUxrAQ', TRUE, FALSE, FALSE, FALSE);

INSERT INTO series(title, categorie, description, image, lien_trailer, netflix, appletv, prime, disneyplus)
VALUES ('squid game', 'horreur', 'Des personnes en difficultés financières sont invitées à une mystérieuse compétition de survie. Participant à une série de jeux traditionnels pour enfants, mais avec des rebondissements mortels, elles risquent leur vie pour une grosse somme d''argent.', 'https://occ-0-767-1335.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABbdXyznY6WSOmldYAGYKOYL5K_2ZThLIqKK5XYEfJUThlLqYk-pGQ-QnYa4rZ_Gh5inXYq2e0sU89J5BivG2MvQd91NV4dqBIpbGt7oWgvyG1NNOt5TDf4zd95qbPekn2cPb.jpg?r=1cd', 'https://www.youtube.com/watch?v=GYoD8oOH31M', TRUE, FALSE, FALSE, FALSE);

INSERT INTO series(title, categorie, description, image, lien_trailer, netflix, appletv, prime, disneyplus)
VALUES ('Mercredi', 'horreur', 'A présent étudiante à la singulière Nevermore Academy, un pensionnat prestigieux pour parias, Wednesday Addams tente de s''adapter auprès des autres élèves tout en enquêtant sur une série de meurtres qui terrorise la ville.', 'https://occ-0-767-1335.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABd3FkLtrglDNJ6G9zGQQBeejORh9L0ivPdliJV_Xefg4Z9VWXLEiwWRvvs5zodeoF7YCy5lCzuUUi5RQSn-YJ5kIBpDid2VFPIvvFPEEfbpnAi4LnVzagujhQH1joSf1Wydw.jpg?r=97c', 'https://www.youtube.com/watch?v=VCB4W8SV744', TRUE, FALSE, FALSE, FALSE);

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
