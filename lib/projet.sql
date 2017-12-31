-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 31, 2017 at 12:15 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet`
--

-- --------------------------------------------------------

--
-- Table structure for table `connexion`
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
-- Table structure for table `depot_cou`
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
-- Table structure for table `ele_mod`
--

DROP TABLE IF EXISTS `ele_mod`;
CREATE TABLE IF NOT EXISTS `ele_mod` (
  `cod_ele_mod` varchar(30) NOT NULL,
  `cod_mod` varchar(20) DEFAULT NULL,
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

--
-- Dumping data for table `ele_mod`
--

INSERT INTO `ele_mod` (`cod_ele_mod`, `cod_mod`, `cod_fil`, `cod_prof`, `nom_ele_mod`, `nbr_heu_cour`, `nbr_heu_TD`, `nbr_heu_TP`) VALUES
('GIACS', 'GIACS', 'GI', '6', 'Architecture C/S et Développement Web Dynamique', NULL, NULL, NULL),
('GIANG', 'GITEA', 'GI', '10', 'Anglais', NULL, NULL, NULL),
('GIBDD', 'GIBDD', 'GI', '5', 'Bases de Données  ', NULL, NULL, NULL),
('GICPP', 'GICPP', 'GI', '7', 'Programmation Orientée Objet en C++', NULL, NULL, NULL),
('GIIRI', 'GIIRI', 'GI', '1', 'Introduction aux Réseaux Informatiques', NULL, NULL, NULL),
('GILNX', 'GISEL', 'GI', '2', 'System d\'exploitation Lunix', NULL, NULL, NULL),
('GITEC', 'GITEA', 'GI', '8', 'T.E.C', NULL, NULL, NULL),
('GIUNX', 'GISEL', 'GI', '9', 'Scrypting Unix', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `etudiants`
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
  UNIQUE KEY `email_etu` (`email_etu`),
  KEY `num_grp` (`num_grp`),
  KEY `cod_fil` (`cod_fil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `filieres`
--

DROP TABLE IF EXISTS `filieres`;
CREATE TABLE IF NOT EXISTS `filieres` (
  `cod_fil` varchar(20) NOT NULL,
  `nom_fil` varchar(80) NOT NULL,
  `resp_fil` varchar(30) NOT NULL,
  PRIMARY KEY (`cod_fil`),
  KEY `resp_fil` (`resp_fil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filieres`
--

INSERT INTO `filieres` (`cod_fil`, `nom_fil`, `resp_fil`) VALUES
('GI', 'Génie informatique', '1'),
('LSI', 'Logiciels et systèmes informatiques', '2'),
('SIAD', 'Systèmes Informatiques et Aide à la décision', '3'),
('SIR', 'Systèmes informatiques et réseaux', '4');

-- --------------------------------------------------------

--
-- Table structure for table `groupes`
--

DROP TABLE IF EXISTS `groupes`;
CREATE TABLE IF NOT EXISTS `groupes` (
  `cod_grp` varchar(50) NOT NULL,
  `cod_fil` varchar(20) DEFAULT NULL,
  `nbr_etu_grp` int(20) DEFAULT NULL,
  PRIMARY KEY (`cod_grp`),
  KEY `cod_fil` (`cod_fil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groupes`
--

INSERT INTO `groupes` (`cod_grp`, `cod_fil`, `nbr_etu_grp`) VALUES
('GI-1', 'GI', 63);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
CREATE TABLE IF NOT EXISTS `modules` (
  `cod_mod` varchar(20) NOT NULL,
  `cod_fil` varchar(20) NOT NULL,
  `nom_mod` varchar(50) NOT NULL,
  `resp_mod` varchar(100) NOT NULL,
  PRIMARY KEY (`cod_mod`),
  KEY `cod_fil` (`cod_fil`),
  KEY `resp_mod` (`resp_mod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`cod_mod`, `cod_fil`, `nom_mod`, `resp_mod`) VALUES
('GIACS', 'GI', 'Architecture C/S et Développement Web Dynamique', '6'),
('GIBDD', 'GI', 'Bases de Données', '5'),
('GICPP', 'GI', 'Programmation Orientée Objet en C++', '7'),
('GIIRI', 'GI', 'Introduction aux Réseaux Informatiques', '1'),
('GISEL', 'GI', 'Système d’exploitation UNIX/Linux', '2'),
('GITEA', 'GI', 'TEC & Anglais', '8');

-- --------------------------------------------------------

--
-- Table structure for table `professeurs`
--

DROP TABLE IF EXISTS `professeurs`;
CREATE TABLE IF NOT EXISTS `professeurs` (
  `cod_prof` varchar(50) NOT NULL,
  `nom_prof` varchar(50) NOT NULL,
  `pre_prof` varchar(50) NOT NULL,
  `email_prof` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pwd_prof` int(50) NOT NULL,
  PRIMARY KEY (`cod_prof`),
  UNIQUE KEY `email_prof` (`email_prof`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professeurs`
--

INSERT INTO `professeurs` (`cod_prof`, `nom_prof`, `pre_prof`, `email_prof`, `pwd_prof`) VALUES
('1', 'EL BRAK', 'Mohamed ', 'elbrak.m@fstt.ac.ma', 123456),
('10', 'Bakkali', '', 'bakkali@fstt.ac.ma', 123456),
('2', 'Ghadi', 'Abderrahim', 'Ghadi.A@fstt.ac.ma', 123456),
('3', 'AIT KBIR', 'M’hamed', 'aitkbir.m@fstt.ac.ma', 123456),
('4', 'Bouhorma', 'Mohammed', 'Bouhomra.M@fstt.ac.ma', 123456),
('5', 'Ezziyani', 'Moustafa', 'Ezziyani.m@fstt.ac.ma', 123456),
('6', 'Baida', 'ouafae', 'Baida.o@fstt.ac.ma', 123456),
('7', 'EN-Naimi', '', 'annaimi@fstt.ac.ma', 123456),
('8', 'el guilli', '', 'elguilli@fstt.ac.ma', 123456),
('9', 'El amrani', '', 'elamrani@fstt.ac.ma', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `salles`
--

DROP TABLE IF EXISTS `salles`;
CREATE TABLE IF NOT EXISTS `salles` (
  `num_sal` varchar(20) NOT NULL,
  `nbr_places` int(20) NOT NULL,
  PRIMARY KEY (`num_sal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salles`
--

INSERT INTO `salles` (`num_sal`, `nbr_places`) VALUES
('e21', 50),
('e22', 50),
('e23', 70),
('e24', 70),
('e25', 50);

-- --------------------------------------------------------

--
-- Table structure for table `seances`
--

DROP TABLE IF EXISTS `seances`;
CREATE TABLE IF NOT EXISTS `seances` (
  `num_sem` int(20) NOT NULL,
  `num_cren` int(20) NOT NULL,
  `num_sal` varchar(20) NOT NULL,
  `cod_ele_mod` varchar(30) NOT NULL,
  `cod_fil` varchar(20) NOT NULL,
  `cod_grp` varchar(50) NOT NULL,
  PRIMARY KEY (`num_sem`,`num_cren`,`num_sal`) USING BTREE,
  KEY `cod_ele_mod` (`cod_ele_mod`),
  KEY `cod_fil` (`cod_fil`),
  KEY `cod_grp` (`cod_grp`),
  KEY `num_sal` (`num_sal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `connexion`
--
ALTER TABLE `connexion`
  ADD CONSTRAINT `connexion_ibfk_1` FOREIGN KEY (`cod_etu`) REFERENCES `etudiants` (`cod_etu`),
  ADD CONSTRAINT `connexion_ibfk_2` FOREIGN KEY (`cod_prof`) REFERENCES `professeurs` (`cod_prof`);

--
-- Constraints for table `depot_cou`
--
ALTER TABLE `depot_cou`
  ADD CONSTRAINT `depot_cou_ibfk_1` FOREIGN KEY (`cod_porf`) REFERENCES `professeurs` (`cod_prof`);

--
-- Constraints for table `ele_mod`
--
ALTER TABLE `ele_mod`
  ADD CONSTRAINT `ele_mod_ibfk_1` FOREIGN KEY (`cod_fil`) REFERENCES `filieres` (`cod_fil`),
  ADD CONSTRAINT `ele_mod_ibfk_3` FOREIGN KEY (`cod_prof`) REFERENCES `professeurs` (`cod_prof`),
  ADD CONSTRAINT `ele_mod_ibfk_4` FOREIGN KEY (`cod_mod`) REFERENCES `modules` (`cod_mod`);

--
-- Constraints for table `filieres`
--
ALTER TABLE `filieres`
  ADD CONSTRAINT `filieres_ibfk_1` FOREIGN KEY (`resp_fil`) REFERENCES `professeurs` (`cod_prof`);

--
-- Constraints for table `groupes`
--
ALTER TABLE `groupes`
  ADD CONSTRAINT `groupes_ibfk_1` FOREIGN KEY (`cod_fil`) REFERENCES `filieres` (`cod_fil`);

--
-- Constraints for table `modules`
--
ALTER TABLE `modules`
  ADD CONSTRAINT `modules_ibfk_1` FOREIGN KEY (`cod_fil`) REFERENCES `filieres` (`cod_fil`),
  ADD CONSTRAINT `modules_ibfk_2` FOREIGN KEY (`resp_mod`) REFERENCES `professeurs` (`cod_prof`);

--
-- Constraints for table `seances`
--
ALTER TABLE `seances`
  ADD CONSTRAINT `seances_ibfk_1` FOREIGN KEY (`cod_ele_mod`) REFERENCES `ele_mod` (`cod_ele_mod`),
  ADD CONSTRAINT `seances_ibfk_2` FOREIGN KEY (`cod_fil`) REFERENCES `filieres` (`cod_fil`),
  ADD CONSTRAINT `seances_ibfk_3` FOREIGN KEY (`cod_grp`) REFERENCES `groupes` (`cod_grp`),
  ADD CONSTRAINT `seances_ibfk_4` FOREIGN KEY (`num_sal`) REFERENCES `salles` (`num_sal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
