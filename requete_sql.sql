DROP DATABASE IF EXISTS series_tv;
CREATE DATABASE series_tv;

DROP TABLE IF EXISTS Series;
DROP TABLE IF EXISTS Genres;
DROP TABLE IF EXISTS Notes;
DROP TABLE IF EXISTS Commentaires;
DROP TABLE IF EXISTS Utilisateurs;

CREATE TABLE Utilisateurs
(
    id int AUTO_INCREMENT,
    pseudo varchar(80) NOT NULL,
    email varchar(120) NOT NULL,
    nom varchar(60) NOT NULL,
    prenom varchar(60) NOT NULL,
    mdp varchar(255) NOT NULL,
    PRIMARY KEY (id)
);


CREATE TABLE Commentaires
(
    id int AUTO_INCREMENT,
    id_utilisateur int NOT NULL,
    commentaire varchar(500) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_utilisateur) REFERENCES Utilisateurs(id)
);


CREATE TABLE Notes
(
    id int AUTO_INCREMENT,
    id_utilisateur int NOT NULL,
    notes int NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_utilisateur) REFERENCES Utilisateurs(id)
);


CREATE TABLE Genres
(
    id int AUTO_INCREMENT,
    genre varchar(80) NOT NULL,
    PRIMARY KEY (id)
);


CREATE TABLE Series
(
    id int AUTO_INCREMENT,
    id_commentaire int DEFAULT NULL,
    id_note int DEFAULT NULL,
    id_genre int DEFAULT NULL,
    nom_serie varchar(120) NOT NULL,
    description_serie varchar(300) NOT NULL,
    image_serie varchar(255) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_commentaire) REFERENCES Commentaires(id),
    FOREIGN KEY (id_note) REFERENCES Notes(id),
    FOREIGN KEY (id_genre) REFERENCES Genres(id)
);
