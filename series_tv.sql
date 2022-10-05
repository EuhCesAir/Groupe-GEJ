-- Adminer 4.8.1 MySQL 8.0.30-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `Commentaires`;
CREATE TABLE `Commentaires` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int NOT NULL,
  `commentaire` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_utilisateur` (`id_utilisateur`),
  CONSTRAINT `Commentaires_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `Utilisateurs` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `Genres`;
CREATE TABLE `Genres` (
  `id` int NOT NULL AUTO_INCREMENT,
  `genre` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `Notes`;
CREATE TABLE `Notes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int NOT NULL,
  `notes` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_utilisateur` (`id_utilisateur`),
  CONSTRAINT `Notes_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `Utilisateurs` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `Series`;
CREATE TABLE `Series` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_commentaire` int NOT NULL,
  `id_note` int NOT NULL,
  `id_genre` int NOT NULL,
  `nom_serie` varchar(120) NOT NULL,
  `description_serie` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_commentaire` (`id_commentaire`),
  KEY `id_note` (`id_note`),
  KEY `id_genre` (`id_genre`),
  CONSTRAINT `Series_ibfk_1` FOREIGN KEY (`id_commentaire`) REFERENCES `Commentaires` (`id`),
  CONSTRAINT `Series_ibfk_2` FOREIGN KEY (`id_note`) REFERENCES `Notes` (`id`),
  CONSTRAINT `Series_ibfk_3` FOREIGN KEY (`id_genre`) REFERENCES `Genres` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `Utilisateurs`;
CREATE TABLE `Utilisateurs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `mdp` varchar(120) NOT NULL,
  `pseudo` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- 2022-10-05 04:18:15
