-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Jeu 09 Avril 2015 à 11:16
-- Version du serveur: 5.5.27
-- Version de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `pizzeria`
--

-- --------------------------------------------------------

--
-- Structure de la table `carte`
--

CREATE TABLE IF NOT EXISTS `carte` (
  `identifiant_pizza` int(4) NOT NULL,
  `taille` enum('petite','moyenne','grande') NOT NULL,
  `prix` double NOT NULL,
  PRIMARY KEY (`identifiant_pizza`,`taille`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `carte`
--

INSERT INTO `carte` (`identifiant_pizza`, `taille`, `prix`) VALUES
(1, 'petite', 9.8),
(1, 'moyenne', 11.8),
(1, 'grande', 14.8),
(2, 'petite', 11.8),
(2, 'moyenne', 14.8),
(2, 'grande', 21.8),
(3, 'petite', 9.8),
(3, 'moyenne', 11.8),
(3, 'grande', 14.8),
(4, 'petite', 8.5),
(4, 'moyenne', 10.5),
(4, 'grande', 13.5),
(5, 'petite', 9.5),
(5, 'moyenne', 11.5),
(5, 'grande', 14.5),
(6, 'petite', 8.5),
(6, 'moyenne', 10.5),
(6, 'grande', 13.5),
(7, 'petite', 8.5),
(7, 'moyenne', 10.5),
(7, 'grande', 13.5);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `utilisateur` varchar(20) NOT NULL,
  `mesage` text,
  `note` int(11) NOT NULL,
  `datePublication` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8  AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `composer`
--

CREATE TABLE IF NOT EXISTS `composer` (
  `identifiant_ingredient` int(3) NOT NULL,
  `identifiant_pizza` int(4) NOT NULL,
  PRIMARY KEY (`identifiant_ingredient`,`identifiant_pizza`),
  KEY `identifiant_pizza` (`identifiant_pizza`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;

--
-- Contenu de la table `composer`
--

INSERT INTO `composer` (`identifiant_ingredient`, `identifiant_pizza`) VALUES
(4, 1),
(4, 3),
(5, 5),
(16, 4),
(17, 2),
(18, 2),
(26, 2),
(26, 4),
(28, 5),
(29, 3),
(30, 3),
(30, 4),
(31, 4),
(32, 1),
(32, 2),
(32, 4),
(32, 5),
(33, 1),
(34, 1),
(35, 5);

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

CREATE TABLE IF NOT EXISTS `ingredient` (
  `identifiant` int(3) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) NOT NULL,
  `conditionnement` varchar(50) NOT NULL,
  `categorie_alimentaire` int(2) NOT NULL,
  PRIMARY KEY (`identifiant`),
  KEY `categorie_alimentaire` (`categorie_alimentaire`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Contenu de la table `ingredient`
--

INSERT INTO `ingredient` (`identifiant`, `libelle`, `conditionnement`, `categorie_alimentaire`) VALUES
(1, 'pate à pizza', 'sec', 2),
(2, 'thon', 'conserve', 8),
(3, 'thon', 'frais', 8),
(4, 'comte', 'frais', 13),
(5, 'oeuf de poule', 'frais', 10),
(6, 'huile d''arachide', 'liquide', 14),
(7, 'lait', 'UHT', 11),
(8, 'lait', 'frais', 11),
(9, 'levure chimique', 'sec', 18),
(10, 'levure de boulangerie', 'sec', 18),
(11, 'sel fin', 'sec', 16),
(12, 'gros sel', 'sec', 16),
(13, 'poivre moulu', 'sec', 16),
(14, 'poivre en grains', 'sec', 16),
(15, 'coulis de tomate', 'conserve', 4),
(16, 'tomate', 'frais', 4),
(17, 'saumon', 'fumé', 8),
(18, 'saumon', 'frais', 8),
(19, 'crevette rose', 'frais', 9),
(20, 'Gambas', 'frais', 9),
(21, 'avocat', 'frais', 4),
(22, 'crème fraiche', 'frais', 11),
(23, 'fromage de chèvre', 'frais', 12),
(24, 'fromage de chèvre', 'sec', 12),
(25, 'tomates sechees', 'sec', 2),
(26, 'thym', 'sec', 16),
(27, 'tapenade de poivron', 'frais', 4),
(28, 'jambon', 'frais', 7),
(29, 'lardons', 'frais', 7),
(30, 'oignon', 'frais', 4),
(31, 'poivrons', 'frais', 4),
(32, 'mozzarela', 'frais', 13),
(33, 'brie', 'frais', 13),
(34, 'bleu', 'frais', 13),
(35, 'champignons', 'frais', 4),
(37, 'toto', 'frais', 1),
(38, 'toto', 'frais', 1);

-- --------------------------------------------------------

--
-- Structure de la table `pizzas`
--

CREATE TABLE IF NOT EXISTS `pizzas` (
  `identifiant` int(4) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `description` varchar(244) DEFAULT NULL,
  `base` enum('creme','tomates') NOT NULL,
  PRIMARY KEY (`identifiant`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `pizzas`
--

INSERT INTO `pizzas` (`identifiant`, `nom`, `description`, `base`) VALUES
(1, '4 fromages', '4 fromages sur base de crème', 'crème'),
(2, '2 Saumons', 'à base de saumon frais et fumé', 'crème'),
(3, 'Flamenkuch', 'pizza au gout Alsacien', 'crème'),
(4, 'Vegetarienne', 'pizza sans proteines animales', 'tomates'),
(5, 'Calzone', 'pizza en chausson avec un oeuf', 'tomates'),
(6, 'Regina', 'pizza classique', 'tomates'),
(7, '4 fromages', '4 fromages sur base de tomates', 'tomates');

-- --------------------------------------------------------

--
-- Structure de la table `pyramide_alimentaire`
--

CREATE TABLE IF NOT EXISTS `pyramide_alimentaire` (
  `identifiant` int(2) NOT NULL AUTO_INCREMENT,
  `niveau` int(2) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  PRIMARY KEY (`identifiant`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `pyramide_alimentaire`
--

INSERT INTO `pyramide_alimentaire` (`identifiant`, `niveau`, `libelle`) VALUES
(1, 0, 'boissons'),
(2, 1, 'féculents'),
(3, 2, 'fruits'),
(4, 2, 'légumes'),
(5, 3, 'volaille'),
(6, 3, 'viande blanche'),
(7, 3, 'viande rouge'),
(8, 3, 'poissons'),
(9, 3, 'fruits de mer'),
(10, 3, 'oeufs'),
(11, 4, 'produits laitiers'),
(12, 4, 'produits laitiers fermentés'),
(13, 4, 'fromages'),
(14, 5, 'matières grasses'),
(15, 6, 'produits sucrés'),
(16, 7, 'aromates'),
(17, 8, 'alcool'),
(18, 9, 'aides culinaires');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `carte`
--
ALTER TABLE `carte`
  ADD CONSTRAINT `carte_ibfk_1` FOREIGN KEY (`identifiant_pizza`) REFERENCES `pizzas` (`identifiant`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
