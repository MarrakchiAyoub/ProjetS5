-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 24 déc. 2017 à 19:13
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

DROP TABLE IF EXISTS `connexion`;
CREATE TABLE IF NOT EXISTS `connexion` (
  `num_cnx` int(50) NOT NULL AUTO_INCREMENT,
  `cod_etu` varchar(50) DEFAULT NULL,
  `cod_prof` varchar(50) DEFAULT NULL,
  `date_cnx` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`num_cnx`),
  UNIQUE KEY `Num_cnx` (`num_cnx`),
  KEY `cod_etu` (`cod_etu`),
  KEY `cod_prof` (`cod_prof`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `depot_cou`
--

DROP TABLE IF EXISTS `depot_cou`;
CREATE TABLE IF NOT EXISTS `depot_cou` (
  `num_dep` int(30) NOT NULL AUTO_INCREMENT,
  `cod_porf` varchar(30) DEFAULT NULL,
  `cod_ele_mod` varchar(30) DEFAULT NULL,
  `lien_cou` varchar(100) DEFAULT NULL,
  `type_cou` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`num_dep`),
  KEY `cod_porf` (`cod_porf`),
  KEY `cod_ele_mod` (`cod_ele_mod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ele_mod`
--

DROP TABLE IF EXISTS `ele_mod`;
CREATE TABLE IF NOT EXISTS `ele_mod` (
  `cod_ele_mod` varchar(30) NOT NULL,
  `cod_mod` int(20) DEFAULT NULL,
  `cod_fil` varchar(20) DEFAULT NULL,
  `cod_prof` varchar(50) DEFAULT NULL,
  `nom_ele_mod` varchar(50) DEFAULT NULL,
  `nbr_heu_cour` int(20) DEFAULT NULL,
  `nbr_heu_TD` int(20) DEFAULT NULL,
  `nbr_heu_TP` int(20) DEFAULT NULL,
  PRIMARY KEY (`cod_ele_mod`),
  KEY `cod_fil` (`cod_fil`),
  KEY `cod_mod` (`cod_mod`),
  KEY `cod_prof` (`cod_prof`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `cod_etu` varchar(50) NOT NULL,
  `nom_etu` varchar(50) NOT NULL,
  `pre_etu` varchar(50) NOT NULL,
  `age_etu` int(4) NOT NULL,
  `email_etu` varchar(100) NOT NULL,
  `pwd_etu` varchar(50) NOT NULL,
  `date_nai` date NOT NULL,
  `niv_etu` varchar(50) NOT NULL,
  `num_grp` int(50) NOT NULL,
  `cod_fil` varchar(20) NOT NULL,
  PRIMARY KEY (`cod_etu`),
  KEY `num_grp` (`num_grp`),
  KEY `cod_fil` (`cod_fil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `filieres`
--

DROP TABLE IF EXISTS `filieres`;
CREATE TABLE IF NOT EXISTS `filieres` (
  `cod_fil` varchar(20) NOT NULL,
  `nom_fil` varchar(30) NOT NULL,
  `resp_fil` varchar(30) NOT NULL,
  PRIMARY KEY (`cod_fil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `groupes`
--

DROP TABLE IF EXISTS `groupes`;
CREATE TABLE IF NOT EXISTS `groupes` (
  `cod_grp` int(50) NOT NULL,
  `cod_fil` varchar(20) DEFAULT NULL,
  `nbr_etu_grp` int(20) DEFAULT NULL,
  PRIMARY KEY (`cod_grp`),
  KEY `cod_fil` (`cod_fil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `modules`
--

DROP TABLE IF EXISTS `modules`;
CREATE TABLE IF NOT EXISTS `modules` (
  `cod_mod` int(20) NOT NULL,
  `cod_fil` varchar(20) NOT NULL,
  `nom_mod` varchar(50) NOT NULL,
  `resp_mod` varchar(100) NOT NULL,
  PRIMARY KEY (`cod_mod`),
  KEY `cod_fil` (`cod_fil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `professeurs`
--

DROP TABLE IF EXISTS `professeurs`;
CREATE TABLE IF NOT EXISTS `professeurs` (
  `cod_prof` varchar(50) NOT NULL,
  `nom_prof` varchar(50) NOT NULL,
  `pre_prof` varchar(50) NOT NULL,
  `email_prof` varchar(100) NOT NULL,
  `pwd_prof` int(50) NOT NULL,
  PRIMARY KEY (`cod_prof`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

DROP TABLE IF EXISTS `salles`;
CREATE TABLE IF NOT EXISTS `salles` (
  `num_sal` int(20) NOT NULL AUTO_INCREMENT,
  `nbr_places` int(20) NOT NULL,
  PRIMARY KEY (`num_sal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `seances`
--

DROP TABLE IF EXISTS `seances`;
CREATE TABLE IF NOT EXISTS `seances` (
  `num_sem` int(20) NOT NULL,
  `num_crem` int(20) NOT NULL,
  `num_sal` int(20) NOT NULL,
  `cod_ele_mod` varchar(30) NOT NULL,
  `cod_fil` varchar(20) NOT NULL,
  `cod_grp` int(50) NOT NULL,
  PRIMARY KEY (`num_sem`),
  KEY `cod_ele_mod` (`cod_ele_mod`),
  KEY `cod_fil` (`cod_fil`),
  KEY `cod_grp` (`cod_grp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `connexion`
--
ALTER TABLE `connexion`
  ADD CONSTRAINT `connexion_ibfk_1` FOREIGN KEY (`cod_etu`) REFERENCES `etudiants` (`cod_etu`),
  ADD CONSTRAINT `connexion_ibfk_2` FOREIGN KEY (`cod_prof`) REFERENCES `professeurs` (`cod_prof`);

--
-- Contraintes pour la table `depot_cou`
--
ALTER TABLE `depot_cou`
  ADD CONSTRAINT `depot_cou_ibfk_1` FOREIGN KEY (`cod_porf`) REFERENCES `professeurs` (`cod_prof`);

--
-- Contraintes pour la table `ele_mod`
--
ALTER TABLE `ele_mod`
  ADD CONSTRAINT `ele_mod_ibfk_1` FOREIGN KEY (`cod_fil`) REFERENCES `filieres` (`cod_fil`),
  ADD CONSTRAINT `ele_mod_ibfk_2` FOREIGN KEY (`cod_mod`) REFERENCES `modules` (`cod_mod`),
  ADD CONSTRAINT `ele_mod_ibfk_3` FOREIGN KEY (`cod_prof`) REFERENCES `professeurs` (`cod_prof`);

--
-- Contraintes pour la table `groupes`
--
ALTER TABLE `groupes`
  ADD CONSTRAINT `groupes_ibfk_1` FOREIGN KEY (`cod_fil`) REFERENCES `filieres` (`cod_fil`);

--
-- Contraintes pour la table `modules`
--
ALTER TABLE `modules`
  ADD CONSTRAINT `modules_ibfk_1` FOREIGN KEY (`cod_fil`) REFERENCES `filieres` (`cod_fil`);

--
-- Contraintes pour la table `seances`
--
ALTER TABLE `seances`
  ADD CONSTRAINT `seances_ibfk_1` FOREIGN KEY (`cod_ele_mod`) REFERENCES `ele_mod` (`cod_ele_mod`),
  ADD CONSTRAINT `seances_ibfk_2` FOREIGN KEY (`cod_fil`) REFERENCES `filieres` (`cod_fil`),
  ADD CONSTRAINT `seances_ibfk_3` FOREIGN KEY (`cod_grp`) REFERENCES `groupes` (`cod_grp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
