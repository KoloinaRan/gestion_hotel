-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 06 août 2023 à 13:27
-- Version du serveur :  5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `identifiant` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `mdp` varchar(35) DEFAULT NULL,
  `confirmation` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`identifiant`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`identifiant`, `nom`, `mail`, `mdp`, `confirmation`) VALUES
(31, 'Lilith', 'Li@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '4a7d1ed414474e4033ac29ccb8653d9b'),
(34, 'Randriarisoa', 'randriarisoa@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 'b59c67bf196a4758191e42f76670ceba'),
(37, 'Rakoto', 'Rakoto@gmail.com', '2be9bd7a3434f7038ca27d1918de58bd', '2be9bd7a3434f7038ca27d1918de58bd');

-- --------------------------------------------------------

--
-- Structure de la table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
CREATE TABLE IF NOT EXISTS `hotels` (
  `nom` varchar(50) NOT NULL DEFAULT '',
  `image` varchar(70) NOT NULL DEFAULT '',
  `prix` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `hotels`
--

INSERT INTO `hotels` (`nom`, `image`, `prix`) VALUES
('Gourou', 'Playa1.png', '390$'),
('Tubara', 'tubara1.png', '250$');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `nom_utilisateur` varchar(50) NOT NULL DEFAULT '',
  `mot_de_passe` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`nom_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`nom_utilisateur`, `mot_de_passe`) VALUES
('administrateur', 'hotel');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `hotel` varchar(50) NOT NULL DEFAULT '',
  `clients` varchar(50) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `arriver` date DEFAULT NULL,
  `nombres` int(5) DEFAULT NULL,
  `commentaire` text NOT NULL,
  PRIMARY KEY (`hotel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`hotel`, `clients`, `contact`, `arriver`, `nombres`, `commentaire`) VALUES
('Santika', 'Rapeto', '0340000000', '2023-08-05', 3, 'Petit dÃ©jeuner a 5h');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
