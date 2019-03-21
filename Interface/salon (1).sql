-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 21 mars 2019 à 11:28
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `salon`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `mail` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `mail`) VALUES
(1, 'ahlam', 'ahlam@yahoo.com'),
(2, 'fatah', 'fatah@jhhh'),
(3, 'lalal', 'llala@lkjlkaj'),
(4, 'Nom', 'e-m@il'),
(5, 'Nom', 'e-m@il'),
(6, 'Nom', 'e-m@il'),
(7, 'Nom', 'e-m@il'),
(8, 'lili', 'lili'),
(9, 'lili', 'lili'),
(10, 'Nom', 'e-m@il'),
(11, '', ''),
(12, 'ahlam', 'ahlam'),
(13, 'ahlam', 'lebsir.ahlam@yahoo.com'),
(14, 'fatah', 'fatahlarfi1991@gmail.com'),
(15, 'chahine', 'm.fredj23@gmail.com'),
(16, 'achraf', 'achrafbya.by@gmail.com'),
(17, 'achraf', 'achrafbya.by@gmail.com'),
(18, 'dreams', 'dreams_lebi@live.fr'),
(19, 'ahlam', 'ljaljaljalaj'),
(20, 'seddik', 'seddik@hotmail'),
(21, 'ahlam', 'lebsir.ahlam@yahoo.com'),
(22, 'ahlam', 'lebsir.ahlam@yahoo.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
