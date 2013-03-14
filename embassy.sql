-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Jeu 14 Mars 2013 à 18:17
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
(1, 'Car and mobile units', 1),
(2, 'Estates / Properties', 1),
(3, 'Industry', 1),
(4, 'Nature and environnement', 1),
(5, 'Services', 1),
(6, 'Building and habitation', 1),
(7, 'Education and habitation', 1),
(8, 'Finance and economy', 1),
(9, 'Heath Care', 1),
(10, 'Travel', 1);

-- --------------------------------------------------------

--
-- Structure de la table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `tags` varchar(512) NOT NULL,
  `info` text NOT NULL,
  `location` int(1) NOT NULL,
  `staff` text NOT NULL,
  `website` varchar(128) DEFAULT NULL,
  `phone` varchar(32) DEFAULT NULL,
  `valid` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `company`
--

INSERT INTO `company` (`id`, `name`, `tags`, `info`, `location`, `staff`, `website`, `phone`, `valid`) VALUES
(1, 'Supinfo', 'lame,web', 'An EPITECH copycat', 2, 'Some philosophy teacher', 'http://supinfo.com/', '0123456789', 1),
(2, 'Google', 'lame,web,america', 'Information whores', 2, 'Nicolas Sadirac', 'http://google.com/', '0123456789', 1),
(3, 'Apple', 'lame,america', 'Thiefs', 2, 'RIP Steve jobs', 'http://apple.com/', '0123456789', 1),
(4, 'R kioski', 'kiosk alcool book food drink', 'R-kioski (viralliselta toiminimeltaan R-Kioski Oy) on Reitan Conveniencen omistama valtakunnallinen monimyymalaketju. Ketjuun kuuluu Suomessa noin 660 R-kioskia, joista ketjun hoidossa on noin kaksi kolmasosaa ja loput ovat franchise-sopimuksen piirissa. Ketjulla on kioskitoimintaa myos Virossa ja Liettuassa.[3]\nR-kioskin mainoslause on ”Nopeaa ja mukavaa on asiointi”. Aiempina mainoslauseina ovat olleet muun muassa ”Kaiken lisäksi lähellä” ja ”Akkia R-kioskille”.', 1, 'no one', 'http://www.r-kioski.fi/', NULL, 1),
(5, 'nokia', 'telephone', 'Nouveautes des telephones et smartphones Nokia, toutes les nouvelles appli, les mises a jours et telechargements pour votre mobile tactile ou smartphone', 1, '', 'http://www.nokia.com/fr-fr/', NULL, 1),
(6, 'Samsung', 'telephone', 'SAMSUNG\r\nPartagerPrésentation des differents produits : telephones portables, TV audio Video, appareil photo, caméscope, cadre photo, TV LED, TV LCD, Plasma,electroménager', 1, '', 'www.samsung.fr/', NULL, 1),
(7, 'Stadium', 'store shop clothes', 'Veel meer dan fitness alleen. Sport, wellness en lifestyle: de Stadium fitnesscentra bieden voor elk wat wils. Sportclubs in Gent en Brussel.', 2, '', 'http://www.stadium.fr/', NULL, 1);

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
  `addr_image` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `images_company`
--

INSERT INTO `images_company` (`id_company`, `addr_image`) VALUES
(2, 'https://encrypted.google.com/images/srpr/logo3w.png'),
(4, 'http://upload.wikimedia.org/wikipedia/fi/0/01/Rkioski.png'),
(5, 'http://www.presse-citron.net/wordpress_prod/wp-content/uploads/Nokia-Logo1.jpg'),
(6, 'http://www.gizmodo.fr/wp-content/uploads/2012/02/Samsung-Logo.jpg'),
(7, 'http://profile.ak.fbcdn.net/hprofile-ak-ash4/s160x160/392507_371423892909240_1387619157_a.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `link_cat_comp`
--

CREATE TABLE IF NOT EXISTS `link_cat_comp` (
  `id_category` int(11) NOT NULL,
  `id_company` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
