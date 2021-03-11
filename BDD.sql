-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 11 mars 2021 à 19:39
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mspr`
--

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

DROP TABLE IF EXISTS `evenements`;
CREATE TABLE IF NOT EXISTS `evenements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_scene` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_horaire` datetime NOT NULL,
  `coordonnees` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`id`, `type`, `nom`, `nom_scene`, `date_horaire`, `coordonnees`) VALUES
(1, 'Concert', 'Metronomy', 'Scene A', '2021-07-26 14:20:00', '45.73704956148365, 4.65134526535552');

-- --------------------------------------------------------

--
-- Structure de la table `infos_actualites`
--

DROP TABLE IF EXISTS `infos_actualites`;
CREATE TABLE IF NOT EXISTS `infos_actualites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texte` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `infos_actualites`
--

INSERT INTO `infos_actualites` (`id`, `titre`, `texte`, `date`) VALUES
(1, 'Réouverture des activités', 'Les salles de spectacle sont autorisées à ouvrir au public à partir du 22 juin en Île-de-France. Les gestionnaires sont tenus d\'appliquer les recommandations édictées par les autorités sanitaires pour protéger public, personnels et intervenants.\r\n\r\nLa Direction générale de la création artistique (DGCA) a élaboré des recommandations afin d\'aider les structures à adapter leur organisation et leur fonctionnement aux consignes sanitaires, et à recommander les bonnes pratiques. Ce document a été conçu avec le bureau du Conseil national des professions du spectacle (CNPS), et partagé avec les experts médicaux du Centre médical de la Bourse (CMB), de la DIRECCTE Île-de-France et de la CRAMIF.', '2021-02-26');

-- --------------------------------------------------------

--
-- Structure de la table `infos_urgentes`
--

DROP TABLE IF EXISTS `infos_urgentes`;
CREATE TABLE IF NOT EXISTS `infos_urgentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texte` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `infos_urgentes`
--

INSERT INTO `infos_urgentes` (`id`, `titre`, `texte`, `date`) VALUES
(1, 'Mesure Sanitaire', 'se laver régulièrement les mains ou utiliser une solution hydro-alcoolique\r\ntousser ou éternuer dans son coude ou dans un mouchoir\r\nse moucher dans un mouchoir à usage unique puis le jeter\r\néviter de se toucher le visage\r\nrespecter une distance d\'au moins un mètre avec les autres\r\nsaluer sans serrer la main et arrêter les embrassades\r\nporter un masque quand la distance d\'un mètre ne peut pas être respectée et dans tous les lieux où cela est obligatoire\r\naérer les pièces 10 minutes 3 fois par jour', '2021-02-18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
