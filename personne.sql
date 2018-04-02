-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 25 Janvier 2018 à 08:15
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `personne`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL,
  `login` varchar(100) NOT NULL,
  `motdepasse` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `motdepasse`, `mail`) VALUES
(5, 'mohamed', '0000', 'dftgf@fyh'),
(6, 'zzzzz', 'zzz', 'm@'),
(7, 'med', 'med', 'med@gmail'),
(8, 'mmmmmmm', 'mmmmm', 'm@gmail');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `age` int(10) NOT NULL,
  `sexe` varchar(250) NOT NULL,
  `ville` varchar(250) NOT NULL,
  `competence` varchar(250) NOT NULL,
  `photo` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `age`, `sexe`, `ville`, `competence`, `photo`) VALUES
(1, 'mmm', 'bbb', 22, 'femme', 'tunis', ' symfony php5 html5 css3', 'sBcvugAAAABJRU5ErkJggg==.png'),
(2, 'mohamed', 'ddd', 222, 'homme', 'nabel', ' symfony html5', 'diplome udmey.jpg'),
(3, 'zzzz', 'zzz', 11, 'femme', 'tunis', ' symfony php5 html5', 'diplome udmey.jpg'),
(4, 'ttttttttt', 'aaaaaaa', 444, 'femme', 'nabel', ' symfony html5', 'Mohamed Haouali.jpg'),
(5, 'ooooo', 'vhj', 12, 'homme', 'gafsa', ' symfony php5', 'sBcvugAAAABJRU5ErkJggg==.png'),
(6, 'kais', 'rrr', 11, 'femme', 'tunis', ' symfony', 'Mohamed Haouali.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
