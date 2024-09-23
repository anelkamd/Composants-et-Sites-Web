-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 16 sep. 2024 à 15:12
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `reservationbillet`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `utilisateur_id` int DEFAULT NULL,
  `voyage_id` int DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `classe_num` varchar(50) DEFAULT NULL,
  `destination` varchar(100) DEFAULT NULL,
  `date_depart` date DEFAULT NULL,
  `heure_depart` time DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  `date_reservation` date DEFAULT NULL,
  `statut` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `utilisateur_id` (`utilisateur_id`),
  KEY `voyage_id` (`voyage_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `utilisateur_id`, `voyage_id`, `nom`, `classe_num`, `destination`, `date_depart`, `heure_depart`, `prix`, `date_reservation`, `statut`) VALUES
(1, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', ''),
(2, 1, 3, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', ''),
(3, 1, 4, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', ''),
(4, 1, NULL, 'Anelka MD', '2', 'Goma', '2024-09-17', '07:30:00', 20.00, NULL, NULL),
(5, 1, NULL, 'Anelka MD', '2', 'Goma', '2024-09-17', '07:30:00', 20.00, NULL, NULL),
(6, 1, NULL, 'Anelka MD', '2', 'Goma', '2024-09-17', '07:30:00', 20.00, NULL, NULL),
(7, 1, NULL, 'Anelka MD', '2', 'Goma', '2024-09-17', '07:30:00', 20.00, NULL, NULL),
(8, 1, NULL, 'Anelka MD', '2', 'Goma', '2024-09-17', '13:21:00', 200.00, NULL, NULL),
(9, 1, NULL, 'DjoDev', '4', 'Bukavu', '2024-09-17', '13:21:00', 28000.00, NULL, NULL),
(10, 1, NULL, 'Anelka MD', '3', 'Bukavu', '2024-09-27', '18:00:00', 35000.00, NULL, NULL),
(11, 1, NULL, 'Anelka MD', '3', 'Bukavu', '2024-09-27', '18:00:00', 35000.00, NULL, NULL),
(12, 1, NULL, 'Anelka MD', '3', 'Bukavu', '2024-09-27', '18:00:00', 35000.00, NULL, NULL),
(13, 1, NULL, 'Anelka MD', '3', 'Bukavu', '2024-09-27', '18:00:00', 35000.00, NULL, NULL),
(14, 1, NULL, 'Anelka MD', '3', 'Bukavu', '2024-09-27', '18:00:00', 35000.00, NULL, NULL),
(15, 1, NULL, 'Anelka MD', '3', 'Bukavu', '2024-09-27', '18:00:00', 35000.00, NULL, NULL),
(16, 1, NULL, 'Anelka MD', '3', 'Bukavu', '2024-09-27', '18:00:00', 35000.00, NULL, NULL),
(17, 1, NULL, 'Anelka Bagalane', '3', 'Bukavu', '2024-09-27', '18:00:00', 35000.00, NULL, NULL),
(18, 1, NULL, 'Anelka Bagalane', '3', 'Bukavu', '2024-09-27', '18:00:00', 35000.00, NULL, NULL),
(19, 1, NULL, 'Anelka Bagalane', '3', 'Bukavu', '2024-09-27', '18:00:00', 35000.00, NULL, NULL),
(20, 1, NULL, 'Anelka Bagalane', '3', 'Bukavu', '2024-09-27', '18:00:00', 35000.00, NULL, NULL),
(21, 1, NULL, 'Anelka Bagalane', '3', 'Bukavu', '2024-09-27', '18:00:00', 35000.00, NULL, NULL),
(22, 1, NULL, 'Anelka Bagalane', '3', 'Bukavu', '2024-09-27', '18:00:00', 35000.00, NULL, NULL),
(23, 1, NULL, 'Anelka Bagalane', '3', 'Bukavu', '2024-09-27', '18:00:00', 35000.00, NULL, NULL),
(24, 1, NULL, 'Anelka Bagalane', '3', 'Bukavu', '2024-09-27', '18:00:00', 35000.00, NULL, NULL),
(25, 1, NULL, 'Anelka Bagalane', '3', 'Bukavu', '2024-09-27', '18:00:00', 35000.00, NULL, NULL),
(26, 1, NULL, 'Barane', '3', 'Bukavu', '2024-09-27', '18:00:00', 35000.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `pwd`, `photo`) VALUES
(1, 'admin@gmail.com', 'admin', '');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mot_de_passe` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `voyages`
--

DROP TABLE IF EXISTS `voyages`;
CREATE TABLE IF NOT EXISTS `voyages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `destination` varchar(100) DEFAULT NULL,
  `date_depart` date DEFAULT NULL,
  `heure_depart` time DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `voyages`
--

INSERT INTO `voyages` (`id`, `destination`, `date_depart`, `heure_depart`, `prix`) VALUES
(1, 'Goma', '2024-09-17', '07:30:00', 20.00),
(2, 'Goma', '2024-09-17', '07:30:00', 20.00),
(3, 'Goma', '2024-09-17', '07:30:00', 20.00),
(4, 'Goma', '2024-09-17', '07:30:00', 20.00),
(5, 'Goma', '2024-09-17', '07:30:00', 20.00),
(6, 'Goma', '2024-09-17', '07:30:00', 20.00),
(7, 'Goma', '2024-09-17', '07:30:00', 20.00),
(8, 'Goma', '2024-09-17', '07:30:00', 20.00),
(9, 'Goma', '2024-09-17', '07:30:00', 20.00),
(10, 'Goma', '2024-09-17', '07:30:00', 20.00),
(11, 'Goma', '2024-09-17', '07:30:00', 20.00),
(12, 'Goma', '2024-09-17', '07:30:00', 20.00),
(13, 'Goma', '2024-09-17', '07:30:00', 20.00),
(14, 'Goma', '2024-09-17', '13:21:00', 200.00),
(15, 'Bukavu', '2024-09-17', '13:21:00', 28000.00),
(16, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(17, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(18, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(19, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(20, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(21, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(22, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(23, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(24, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(25, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(26, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(27, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(28, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(29, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(30, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(31, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(32, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(33, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(34, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(35, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(36, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(37, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(38, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(39, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(40, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(41, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(42, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(43, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(44, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(45, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(46, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(47, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(48, 'Bukavu', '2024-09-27', '18:00:00', 35000.00),
(49, 'Bukavu', '2024-09-27', '18:00:00', 35000.00);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
