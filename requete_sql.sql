DROP DATABASE IF EXISTS series_tv;
CREATE DATABASE series_tv;

DROP TABLE IF EXISTS Utilisateurs;
CREATE TABLE Utilisateurs
(
    id int AUTO_INCREMENT,
    nom varchar(80) NOT NULL,
    prenom varchar(80) NOT NULL,
    mdp varchar(120) NOT NULL,
    PRIMARY KEY (id)
);

DROP TABLE IF EXISTS Commentaires;
CREATE TABLE Commentaires
(
    id int AUTO_INCREMENT,
    id_utilisateur int NOT NULL,
    commentaire varchar(500) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_utilisateur) REFERENCES Utilisateurs(id)
);

DROP TABLE IF EXISTS Notes;
CREATE TABLE Notes
(
    id int AUTO_INCREMENT,
    id_utilisateur int NOT NULL,
    notes int NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_utilisateur) REFERENCES Utilisateurs(id)
);

DROP TABLE IF EXISTS Genres;
CREATE TABLE Genres
(
    id int AUTO_INCREMENT,
    genre varchar(80) NOT NULL,
    PRIMARY KEY (id)
);

DROP TABLE IF EXISTS Series;
CREATE TABLE Series
(
    id int AUTO_INCREMENT,
    id_commentaire int NOT NULL,
    id_note int NOT NULL,
    id_genre int NOT NULL,
    nom_serie varchar(120) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_commentaire) REFERENCES Commentaires(id),
    FOREIGN KEY (id_note) REFERENCES Notes(id),
    FOREIGN KEY (id_genre) REFERENCES Genres(id)
);

