-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 14, 2018 at 02:14 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `connexion`
--

INSERT INTO `connexion` (`num_cnx`, `cod_etu`, `cod_prof`, `date_cnx`) VALUES
(1, '1210718413', NULL, '2018-01-02 00:00:00.000000'),
(2, '1210718413', NULL, '2018-01-04 00:00:00.000000'),
(3, NULL, '10', '2018-01-04 00:00:00.000000'),
(4, '1210718413', NULL, '2018-01-04 00:00:00.000000'),
(5, '1210718413', NULL, '2018-01-04 00:00:00.000000'),
(6, '1210718413', NULL, '2018-01-06 09:28:56.000000'),
(7, '1210718413', NULL, '2018-01-11 12:06:46.000000'),
(8, NULL, '10', '2018-01-11 00:00:00.000000'),
(9, NULL, '2', '2018-01-13 00:00:00.000000'),
(10, NULL, '2', '2018-01-14 00:00:00.000000');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `depot_cou`
--

INSERT INTO `depot_cou` (`num_dep`, `cod_porf`, `cod_ele_mod`, `lien_cou`, `type_cou`) VALUES
(1, '2', 'GICPP', 'Files/GICPP/EN-NAIMI-01_POO_C++_ComplementsTTTT.pdf', 'Crs'),
(2, '2', 'GIACS', 'Files/GIACS/Cours HTML.pdf', 'Crs'),
(3, '2', 'GICPP', 'Files/GICPP/EN-NAIMI-1_ApprendreC++.pdf', 'Crs');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `email_etu` varchar(100) NOT NULL,
  `pwd_etu` varchar(50) NOT NULL,
  `date_nai` date NOT NULL,
  `niv_etu` varchar(50) NOT NULL,
  `num_grp` varchar(10) NOT NULL,
  `cod_fil` varchar(20) NOT NULL,
  PRIMARY KEY (`cod_etu`),
  UNIQUE KEY `email_etu` (`email_etu`),
  KEY `num_grp` (`num_grp`),
  KEY `cod_fil` (`cod_fil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `etudiants`
--

INSERT INTO `etudiants` (`cod_etu`, `nom_etu`, `pre_etu`, `email_etu`, `pwd_etu`, `date_nai`, `niv_etu`, `num_grp`, `cod_fil`) VALUES
('1210718413', 'Marrakchi', 'Ayoub', 'Marrakchi.Ay@gmail.com', '159753', '1995-03-08', 'L3', 'GI-L3-1', 'GI');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groupes`
--

INSERT INTO `groupes` (`cod_grp`, `cod_fil`, `nbr_etu_grp`) VALUES
('GI-L3-1', 'GI', 63),
('LSI-C1-1', 'LSI', 30),
('LSI-C2-1', 'LSI', 30),
('LSI-C3-1', 'LSI', 30),
('SIAD-M1-1', 'SIAD', 25),
('SIAD-M2-1', 'SIAD', 25),
('SIR-M1-1', 'SIR', 25),
('SIR-M2-1', 'SIR', 25);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`cod_mod`, `cod_fil`, `nom_mod`, `resp_mod`) VALUES
('GIACS', 'GI', 'Architecture C/S et Developpement Web Dynamique', '6'),
('GIBDD', 'GI', 'Bases de Donnees', '5'),
('GICPP', 'GI', 'Programmation Orientee Objet en C++', '7'),
('GIIRI', 'GI', 'Introduction aux Reseaux Informatiques', '1'),
('GISEL', 'GI', 'Systeme d\'exploitation UNIX/Linux', '2'),
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salles`
--

INSERT INTO `salles` (`num_sal`, `nbr_places`) VALUES
('E14', 60),
('E15', 70),
('E16', 60),
('E21', 50),
('E22', 50),
('E23', 70),
('E24', 70),
('E25', 50);

-- --------------------------------------------------------

--
-- Table structure for table `seances`
--

DROP TABLE IF EXISTS `seances`;
CREATE TABLE IF NOT EXISTS `seances` (
  `num_sem` int(20) NOT NULL,
  `num_cren` int(20) NOT NULL,
  `num_sal` varchar(20) NOT NULL,
  `cod_mod` varchar(30) NOT NULL,
  `cod_fil` varchar(20) NOT NULL,
  `cod_grp` varchar(50) NOT NULL,
  PRIMARY KEY (`num_sem`,`num_cren`,`num_sal`) USING BTREE,
  KEY `cod_ele_mod` (`cod_mod`),
  KEY `cod_fil` (`cod_fil`),
  KEY `cod_grp` (`cod_grp`),
  KEY `seances_ibfk_4` (`num_sal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seances`
--

INSERT INTO `seances` (`num_sem`, `num_cren`, `num_sal`, `cod_mod`, `cod_fil`, `cod_grp`) VALUES
(1, 1, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(1, 2, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(1, 7, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(1, 8, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(1, 9, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(1, 10, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(1, 11, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(1, 15, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(1, 16, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(1, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(1, 18, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(2, 1, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(2, 2, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(2, 7, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(2, 8, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(2, 9, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(2, 10, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(2, 11, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(2, 12, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(2, 15, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(2, 16, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(2, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(2, 18, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(2, 19, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(3, 2, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(3, 5, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(3, 7, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(3, 8, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(3, 9, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(3, 10, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(3, 11, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(3, 12, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(3, 15, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(3, 16, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(3, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(3, 18, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(4, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(5, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(6, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(7, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(8, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(9, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(10, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(11, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(12, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(13, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(14, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(15, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(16, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(17, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(18, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(19, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(20, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(21, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(22, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(23, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(24, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(25, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(26, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(27, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(28, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(29, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(30, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(31, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(32, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(33, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(34, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(35, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(36, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(37, 1, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(37, 2, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(37, 7, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(37, 8, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(37, 9, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(37, 10, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(37, 11, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(37, 12, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(37, 15, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(37, 16, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(37, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(37, 18, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(38, 1, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(38, 2, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(38, 7, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(38, 8, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(38, 9, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(38, 10, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(38, 11, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(38, 12, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(38, 15, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(38, 16, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(38, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(38, 18, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(39, 1, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(39, 2, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(39, 7, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(39, 8, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(39, 9, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(39, 10, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(39, 11, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(39, 12, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(39, 15, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(39, 16, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(39, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(39, 18, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(40, 1, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(40, 2, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(40, 7, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(40, 8, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(40, 9, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(40, 10, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(40, 11, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(40, 12, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(40, 15, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(40, 16, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(40, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(40, 18, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(41, 1, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(41, 2, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(41, 7, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(41, 8, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(41, 9, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(41, 10, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(41, 11, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(41, 12, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(41, 15, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(41, 16, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(41, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(41, 18, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(42, 1, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(42, 2, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(42, 7, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(42, 8, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(42, 9, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(42, 10, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(42, 11, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(42, 12, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(42, 15, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(42, 16, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(42, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(42, 18, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(43, 1, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(43, 2, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(43, 7, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(43, 8, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(43, 9, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(43, 10, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(43, 11, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(43, 12, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(43, 15, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(43, 16, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(43, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(43, 18, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(44, 1, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(44, 2, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(44, 7, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(44, 8, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(44, 9, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(44, 10, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(44, 11, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(44, 12, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(44, 15, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(44, 16, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(44, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(44, 18, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(45, 1, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(45, 2, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(45, 7, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(45, 8, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(45, 9, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(45, 10, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(45, 11, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(45, 12, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(45, 15, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(45, 16, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(45, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(45, 18, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(46, 1, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(46, 2, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(46, 7, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(46, 8, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(46, 9, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(46, 10, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(46, 11, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(46, 12, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(46, 15, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(46, 16, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(46, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(46, 18, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(47, 1, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(47, 2, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(47, 7, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(47, 8, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(47, 9, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(47, 10, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(47, 11, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(47, 12, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(47, 15, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(47, 16, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(47, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(47, 18, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(48, 1, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(48, 2, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(48, 7, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(48, 8, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(48, 9, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(48, 10, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(48, 11, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(48, 12, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(48, 15, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(48, 16, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(48, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(48, 18, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(49, 1, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(49, 2, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(49, 7, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(49, 8, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(49, 9, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(49, 10, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(49, 11, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(49, 12, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(49, 15, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(49, 16, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(49, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(50, 1, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(50, 2, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(50, 3, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(50, 4, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(50, 7, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(50, 8, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(50, 9, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(50, 10, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(50, 11, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(50, 12, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(50, 15, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(50, 16, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(50, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(50, 18, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(51, 1, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(51, 2, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(51, 7, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(51, 8, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(51, 9, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(51, 10, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(51, 11, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(51, 12, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(51, 15, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(51, 16, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(51, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(51, 18, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(52, 1, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(52, 2, 'E23', 'GIBDD', 'GI', 'GI-L3-1'),
(52, 7, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(52, 8, 'E23', 'GISEL', 'GI', 'GI-L3-1'),
(52, 9, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(52, 10, 'E23', 'GIIRI', 'GI', 'GI-L3-1'),
(52, 11, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(52, 12, 'E23', 'GITEA', 'GI', 'GI-L3-1'),
(52, 15, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(52, 16, 'E23', 'GIACS', 'GI', 'GI-L3-1'),
(52, 17, 'E23', 'GICPP', 'GI', 'GI-L3-1'),
(52, 18, 'E23', 'GICPP', 'GI', 'GI-L3-1');

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
-- Constraints for table `etudiants`
--
ALTER TABLE `etudiants`
  ADD CONSTRAINT `etudiants_ibfk_1` FOREIGN KEY (`num_grp`) REFERENCES `groupes` (`cod_grp`) ON UPDATE CASCADE,
  ADD CONSTRAINT `etudiants_ibfk_2` FOREIGN KEY (`cod_fil`) REFERENCES `filieres` (`cod_fil`);

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
  ADD CONSTRAINT `seances_ibfk_2` FOREIGN KEY (`cod_fil`) REFERENCES `filieres` (`cod_fil`),
  ADD CONSTRAINT `seances_ibfk_3` FOREIGN KEY (`cod_grp`) REFERENCES `groupes` (`cod_grp`),
  ADD CONSTRAINT `seances_ibfk_4` FOREIGN KEY (`num_sal`) REFERENCES `salles` (`num_sal`) ON UPDATE CASCADE,
  ADD CONSTRAINT `seances_ibfk_5` FOREIGN KEY (`cod_mod`) REFERENCES `modules` (`cod_mod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
