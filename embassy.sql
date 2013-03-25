-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Lun 25 Mars 2013 à 17:18
-- Version du serveur: 5.5.27-log
-- Version de PHP: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `embassy`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `valid` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id_category`, `name`, `valid`) VALUES
(1, 'Electronics\n', 1),
(2, 'Companies starting businesses abroad\n', 1),
(3, 'Automotive Industries\n', 1),
(4, 'Medical Engineering companies\n', 1),
(5, 'Industrial machinery, equipment and tools\n', 1),
(6, 'Healthcare, pharmacy and biotechnology\n', 1);

-- --------------------------------------------------------

--
-- Structure de la table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `title` varchar(512) NOT NULL,
  `info` text NOT NULL,
  `location` int(1) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `website` varchar(128) DEFAULT NULL,
  `phone` varchar(32) DEFAULT NULL,
  `valid` int(11) NOT NULL DEFAULT '1',
  `mail` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Contenu de la table `company`
--

INSERT INTO `company` (`id`, `name`, `title`, `info`, `location`, `contact`, `website`, `phone`, `valid`, `mail`) VALUES
(1, 'Supinfo', 'lame,web', 'An EPITECH copycat', 2, 'Some philosophy teacher', 'http://supinfo.com/', '0123456789', 1, ''),
(2, 'Google', 'lame,web,america', 'Information whores', 2, 'Nicolas Sadirac', 'http://google.com/', '0123456789', 1, ''),
(3, 'Apple', 'lame,america', 'Thiefs', 2, 'RIP Steve jobs', 'http://apple.com/', '0123456789', 1, ''),
(4, 'R kioski', 'kiosk alcool book food drink', 'R-kioski (viralliselta toiminimeltaan R-Kioski Oy) on Reitan Conveniencen omistama valtakunnallinen monimyymalaketju. Ketjuun kuuluu Suomessa noin 660 R-kioskia, joista ketjun hoidossa on noin kaksi kolmasosaa ja loput ovat franchise-sopimuksen piirissa. Ketjulla on kioskitoimintaa myos Virossa ja Liettuassa.[3]', 1, 'no one', 'http://www.r-kioski.fi/', NULL, 1, ''),
(7, 'Stadium', 'store shop clothes', 'Veel meer dan fitness alleen. Sport, wellness en lifestyle: de Stadium fitnesscentra bieden voor elk wat wils. Sportclubs in Gent en Brussel.', 2, '', 'http://www.stadium.fr/', NULL, 1, ''),
(8, 'Sello', 'lame,web', 'An EPITECH copycat', 2, 'Some philosophy teacher', 'http://supinfo.com/', '0123456789', 1, ''),
(9, 'stockmann', 'lame,web,america', 'Information whores', 2, 'Nicolas Sadirac', 'http://google.com/', '0123456789', 1, ''),
(10, 'angry bird', 'lame,america', 'Thiefs', 2, 'RIP Steve jobs', 'http://apple.com/', '0123456789', 1, ''),
(11, 'test', 'kiosk alcool book food drink', 'R-kioski (viralliselta toiminimeltaan R-Kioski Oy) on Reitan Conveniencen omistama valtakunnallinen monimyymalaketju. Ketjuun kuuluu Suomessa noin 660 R-kioskia, joista ketjun hoidossa on noin kaksi kolmasosaa ja loput ovat franchise-sopimuksen piirissa. Ketjulla on kioskitoimintaa myos Virossa ja Liettuassa.\n', 1, 'no one', 'http://www.r-kioski.fi/', NULL, 1, ''),
(14, 'company_y', 'store shop clothes', 'Veel meer dan fitness alleen. Sport, wellness en lifestyle: de Stadium fitnesscentra bieden voor elk wat wils. Sportclubs in Gent en Brussel.', 2, '', 'http://www.stadium.fr/', NULL, 1, ''),
(15, 'Nokia', 'Director, Investor Relations', '', 1, 'Mr. Sherief Bakr', NULL, '+358 (0) 7180 34927', 1, ''),
(16, 'Bluegiga', 'Head Office Finland', '', 1, 'Mr. Sherief Bakr\r\n', NULL, '+358-9-4355 060   ', 1, 'sherief.bakr@nokia.fi'),
(17, 'Efore', 'Main office', '', 1, '', NULL, '(09) 478 466', 1, ''),
(18, '', 'Sales and marketing support', '', 1, '', NULL, ' 017 83 881', 1, 'genelec@genelec.com'),
(19, 'Beijer Electronics LTD. ', 'Head Office Finland', '', 1, '', NULL, '207 463 500', 1, ''),
(20, 'PJC yhtiot', 'Sales exeutive', '', 1, 'Ville Kolehmainen\r\n', NULL, '105 915 343', 1, 'pjc@pjc.fi'),
(22, 'Helsingin Tuotekehitys OY ', 'CEO (?)', '', 1, 'Pekka Mietinen\r\n', NULL, '0500-945 324', 1, 'Pekka.Mietinen@elisa.fi'),
(23, 'Patria OYJ', 'Info', ' ', 1, '', NULL, '020 4691', 1, 'info@patria.fi'),
(24, 'OY Sisuauto AB ', '', '', 1, '', NULL, '102 751', 1, 'info@sisuauto.fi'),
(25, 'Catamount OY  sports car center', '', '', 1, '', NULL, '207 580 500', 1, 'info@catamount.fi'),
(26, 'Dentec OY ', '', '', 1, 'Jukka Wichmann\r\n', NULL, '106 667 060', 1, 'jukka.wichmann@kolumbus.fi'),
(27, 'ALM services OY ', '', '', 1, '', NULL, '108 303 000', 1, 'asiakaspalvelu@elparts.fi'),
(28, 'Espoon Hissi OY ', 'Office Secretary', '', 1, 'Sirpa Waskinen\r\n', NULL, '207 811 888', 1, 'sirpa.waskinen@espoonhissi.fi'),
(29, 'Evesko Tech OY ', '', '', 1, '', NULL, '(09)5485076', 1, 'info@evesko.fi'),
(30, 'Cavotec Finland oy', '', '', 1, '', NULL, '09-8870200', 1, ''),
(31, 'Lastu handicrafts', '', '', 1, 'Kauri Suora', NULL, '040-7221819', 1, ''),
(32, 'Acrux OY ', '', '', 1, 'Moller(?)', NULL, '040-506 0820', 1, 'moller.acrux@inet.fi'),
(33, 'Kemira OYJ', 'Corporate Headquarters', '', 1, '', NULL, '+358 10 8611', 1, ''),
(36, 'OY Banmark AB ', 'CEO', '', 0, 'Jon Didrichsen', NULL, '+358 (0)9 4765 00', 1, ''),
(38, 'Trailpoint OY ', '', '', 1, '', NULL, '98 034 859', 1, '');

-- --------------------------------------------------------

--
-- Structure de la table `company_addr`
--

CREATE TABLE IF NOT EXISTS `company_addr` (
  `id_company` int(11) NOT NULL,
  `address` varchar(256) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `country` varchar(128) NOT NULL,
  `valid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `company_addr`
--

INSERT INTO `company_addr` (`id_company`, `address`, `postal_code`, `country`, `valid`) VALUES
(15, 'P.O. Box 226, FIN-00045 NOKIA', 0, '', 0),
(16, 'Sinikalliontie 5A, 5th floor', 0, '', 0),
(17, 'Linnoitustie 4B', 0, '', 0),
(18, 'Sepänkatu 11, FIN-00150', 100, 'Finland', 0),
(19, 'Vanha Nurmijärventie 62 vantaa', 0, '', 0),
(20, 'Koivuvaarankuja 2 C Vantaa', 0, '', 0),
(22, 'Itäportti 1A Espoo', 0, '', 0),
(23, 'Kaivokatu 10A Helsinki', 0, '', 0),
(24, 'Tammisaarentie 45 Karjaa', 0, '', 0),
(25, 'Aamuruskontie 12', 0, '', 0),
(26, 'Länsituulenkuja 3 A 2', 0, '', 0),
(27, 'Muottikuja 4 Vantaa', 0, '', 0),
(28, 'Olarinluoma 16 A Espoo', 0, '', 0),
(29, 'Palokärjentie 5 Espoo', 0, '', 0),
(30, 'OLARINLUOMA 14 B', 0, '', 0),
(31, 'Tunnelitie 10 A 9', 0, '', 0),
(32, 'Mannerheimintie 25 A 22', 0, '', 0),
(33, 'Porkkalankatu 3', 0, '', 0),
(36, 'Kutojantie 12, 02630 Espoo', 0, '', 0),
(38, 'Saunamäentie 8 C Espoo', 0, '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id_country` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(128) NOT NULL,
  `valid` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_country`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `country`
--

INSERT INTO `country` (`id_country`, `country`, `valid`) VALUES
(1, 'finland', 1),
(2, 'slovenia', 1);

-- --------------------------------------------------------

--
-- Structure de la table `images_company`
--

CREATE TABLE IF NOT EXISTS `images_company` (
  `id_company` int(11) NOT NULL,
  `addr_image` varchar(512) NOT NULL,
  `id_image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `images_company`
--

INSERT INTO `images_company` (`id_company`, `addr_image`, `id_image`) VALUES
(2, 'https://encrypted.google.com/images/srpr/logo3w.png', 1),
(4, 'http://upload.wikimedia.org/wikipedia/fi/0/01/Rkioski.png', 2),
(5, 'http://www.presse-citron.net/wordpress_prod/wp-content/uploads/Nokia-Logo1.jpg', 3),
(6, 'http://www.gizmodo.fr/wp-content/uploads/2012/02/Samsung-Logo.jpg', 4),
(7, 'http://profile.ak.fbcdn.net/hprofile-ak-ash4/s160x160/392507_371423892909240_1387619157_a.jpg', 5),
(4, 'http://idafram.fi/i2w/wp-content/uploads/2010/08/R-kioski_logo.jpg', 6),
(4, 'http://2.bp.blogspot.com/-BVQ4y-_nesM/T4mwCal9ajI/AAAAAAAAAA0/ONxrba6bg5k/s1600/r-kioski.png', 7),
(4, 'http://www.mikanyyssola.fi/wp-content/uploads/2009/10/224-R-KIOSKI.jpg', 8);

-- --------------------------------------------------------

--
-- Structure de la table `link_cat_comp`
--

CREATE TABLE IF NOT EXISTS `link_cat_comp` (
  `id_category` int(11) NOT NULL,
  `id_company` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `link_cat_comp`
--

INSERT INTO `link_cat_comp` (`id_category`, `id_company`) VALUES
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(3, 21),
(3, 22),
(3, 24),
(3, 25),
(4, 26),
(5, 27),
(5, 28),
(5, 29),
(5, 30),
(5, 31),
(6, 32),
(6, 33),
(6, 36);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(64) NOT NULL,
  `passwd` varchar(64) NOT NULL,
  `mail` varchar(64) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `login`, `passwd`, `mail`, `admin`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@wtf.com', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
