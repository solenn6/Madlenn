-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 29 sep. 2020 à 20:56
-- Version du serveur :  10.4.10-MariaDB
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
-- Base de données :  `madlenn_stage`
--

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_picture` varchar(255) NOT NULL,
  `product_categorie` enum('viennoiserie','boulangerie','biscuiterie','patisserie') NOT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id_product`, `product_name`, `product_picture`, `product_categorie`) VALUES
(35, 'SablÃ© choc', 'img/BiscuitSableChoc.jpg', 'biscuiterie'),
(10, 'Breton', 'img/Breton.jpg', 'patisserie'),
(11, 'Cake au Citron', 'img/CakeAuCitron.jpg', 'biscuiterie'),
(12, 'Cake aux Fruits', 'img/CakeAuxFruits.jpg', 'biscuiterie'),
(13, 'Cake Marbré', 'img/CakeMarbre.jpg', 'biscuiterie'),
(14, 'Choux', 'img/Choux.jpg', 'patisserie'),
(15, 'Cookies', 'img/Cookies.jpg', 'biscuiterie'),
(16, 'Cookies Bretons', 'img/CookiesBretons.jpg', 'biscuiterie'),
(17, 'Crumble Pomme Noisette', 'img/CrumblePommeNoisette.jpg', 'patisserie'),
(18, 'Far', 'img/Far.jpg', 'patisserie'),
(19, 'Flan', 'img/Flan.jpg', 'patisserie'),
(20, 'Fleur', 'img/Fleur.jpg', 'patisserie'),
(21, 'Fondant', 'img/Fondant.jpg', 'patisserie'),
(22, 'Galettes Bretonnes', 'img/GalettesBretonnes.jpg', 'biscuiterie'),
(23, 'Lingot', 'img/Lingot.jpg', 'patisserie'),
(24, 'Madeleines', 'img/Madeleines.jpg', 'biscuiterie'),
(25, 'Malouins', 'img/Malouins.jpg', 'biscuiterie'),
(26, 'Mille-feuille', 'img/MilleFeuille.jpg', 'patisserie'),
(27, 'Mont-Blanc', 'img/MontBlanc.jpg', 'patisserie'),
(28, 'Parameen', 'img/Parameen.jpg', 'patisserie'),
(29, 'Peanuts', 'img/Peanuts.jpg', 'patisserie'),
(30, 'Pommé', 'img/Pomme.jpg', 'viennoiserie'),
(31, 'Tarte Citron', 'img/TarteCitron.jpg', 'patisserie'),
(32, 'Tartelette Carachoc', 'img/TarteletteCarachoc.jpg', 'patisserie'),
(33, 'Yuzu', 'img/Yuzu.jpg', 'patisserie');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
