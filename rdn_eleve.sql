-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 07 oct. 2020 à 08:21
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `rdn_eleve`
--

-- --------------------------------------------------------

--
-- Structure de la table `annee`
--

DROP TABLE IF EXISTS `annee`;
CREATE TABLE IF NOT EXISTS `annee` (
  `annee` int(11) NOT NULL,
  `libelleAnnee` varchar(50) NOT NULL,
  PRIMARY KEY (`annee`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

DROP TABLE IF EXISTS `eleve`;
CREATE TABLE IF NOT EXISTS `eleve` (
  `idEleve` int(11) NOT NULL AUTO_INCREMENT,
  `nomEleve` varchar(50) NOT NULL,
  `prenomEleve` varchar(50) NOT NULL,
  `loginEleve` varchar(50) NOT NULL,
  `mdpEleve` varchar(100) NOT NULL,
  `classeEleve` varchar(15) NOT NULL,
  PRIMARY KEY (`idEleve`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `idMatiere` int(11) NOT NULL,
  `libelleMatiere` varchar(100) NOT NULL,
  PRIMARY KEY (`idMatiere`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `idNote` int(11) NOT NULL,
  `resultatNote` int(11) NOT NULL,
  `SurCombien` int(11) NOT NULL,
  `coefNote` float NOT NULL,
  `idEleveNote` int(11) NOT NULL,
  `idMatiereNote` int(11) NOT NULL,
  `idPeriodeNote` int(11) NOT NULL,
  `anneeNote` int(11) NOT NULL,
  PRIMARY KEY (`idNote`),
  UNIQUE KEY `FK_matiere_note` (`idMatiereNote`),
  UNIQUE KEY `FK_periode_note` (`idPeriodeNote`),
  UNIQUE KEY `FK_eleve_note` (`idEleveNote`),
  UNIQUE KEY `FK_annee_note` (`anneeNote`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `periode`
--

DROP TABLE IF EXISTS `periode`;
CREATE TABLE IF NOT EXISTS `periode` (
  `idPeriode` int(11) NOT NULL,
  `libellePeriode` varchar(50) NOT NULL,
  `anneePeriode` int(11) NOT NULL,
  PRIMARY KEY (`idPeriode`),
  UNIQUE KEY `FK_annee_periode` (`anneePeriode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annee`
--
ALTER TABLE `annee`
  ADD CONSTRAINT `annee_ibfk_1` FOREIGN KEY (`annee`) REFERENCES `periode` (`anneePeriode`);

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_ibfk_1` FOREIGN KEY (`idEleveNote`) REFERENCES `eleve` (`idEleve`),
  ADD CONSTRAINT `note_ibfk_2` FOREIGN KEY (`idMatiereNote`) REFERENCES `matiere` (`idMatiere`),
  ADD CONSTRAINT `note_ibfk_3` FOREIGN KEY (`idPeriodeNote`) REFERENCES `periode` (`idPeriode`),
  ADD CONSTRAINT `note_ibfk_4` FOREIGN KEY (`anneeNote`) REFERENCES `periode` (`anneePeriode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
