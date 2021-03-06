-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 18 déc. 2019 à 18:38
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pulchart`
--
CREATE DATABASE IF NOT EXISTS `pulchart` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pulchart`;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `owner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `name`, `category`, `verified`, `owner`) VALUES
(1, 'img/Pages/Archive/1.jpeg', '', 0, 1),
(2, 'img/Pages/Archive/2.jpeg', '', 0, 1),
(3, 'img/Pages/Archive/3.jpeg', '', 0, 1),
(4, 'img/Pages/Archive/4.jpeg', '', 0, 1),
(5, 'img/Pages/Archive/29.jpeg', '', 0, 1),
(6, 'img/Pages/Archive/30.jpeg', '', 0, 1),
(7, 'img/Pages/Archive/33.jpeg', '', 0, 1),
(8, 'img/Pages/Archive/34.jpeg', '', 0, 1),
(9, 'img/Pages/Archive/5.JPG', '', 0, 2),
(10, 'img/Pages/Archive/6.JPG', '', 0, 2),
(11, 'img/Pages/Archive/8.JPG', '', 0, 2),
(12, 'img/Pages/Archive/31.JPG', '', 0, 2),
(13, 'img/Pages/Archive/7.jpg', '', 0, 3),
(14, 'img/Pages/Archive/38.jpg', '', 0, 3),
(15, 'img/Pages/Archive/9.JPG', '', 0, 4),
(16, 'img/Pages/Archive/10.jpg', '', 0, 4),
(17, 'img/Pages/Archive/11.jpg', '', 0, 4),
(18, 'img/Pages/Archive/12.jpg', '', 0, 4),
(19, 'img/Pages/Archive/15.jpg', '', 0, 4),
(20, 'img/Pages/Archive/20.jpg', '', 0, 4),
(21, 'img/Pages/Archive/21.jpg', '', 0, 4),
(22, 'img/Pages/Archive/47.jpg', '', 0, 4),
(23, 'img/Pages/Archive/13.jpg', '', 0, 5),
(24, 'img/Pages/Archive/14.jpg', '', 0, 5),
(25, 'img/Pages/Archive/24.jpg', '', 0, 5),
(26, 'img/Pages/Archive/25.jpg', '', 0, 5),
(27, 'img/Pages/Archive/26.jpg', '', 0, 5),
(28, 'img/Pages/Archive/27.jpg', '', 0, 5),
(29, 'img/Pages/Archive/28.jpg', '', 0, 5),
(30, 'img/Pages/Archive/32.jpg', '', 0, 5),
(31, 'img/Pages/Archive/44.jpg', '', 0, 5),
(32, 'img/Pages/Archive/45.jpg', '', 0, 5),
(33, 'img/Pages/Archive/46.jpg', '', 0, 5),
(34, 'img/Pages/Archive/16.jpg', '', 0, 6),
(35, 'img/Pages/Archive/17.jpg', '', 0, 6),
(36, 'img/Pages/Archive/18.jpg', '', 0, 6),
(37, 'img/Pages/Archive/19.jpg', '', 0, 6),
(38, 'img/Pages/Archive/22.jpg', '', 0, 6),
(39, 'img/Pages/Archive/23.jpg', '', 0, 6),
(40, 'img/Pages/Archive/41.jpg', '', 0, 6),
(41, 'img/Pages/Archive/42.jpg', '', 0, 6),
(42, 'img/Pages/Archive/43.jpg', '', 0, 6),
(43, 'img/Pages/Archive/35.jpg', '', 0, 7),
(44, 'img/Pages/Archive/36.jpg', '', 0, 7),
(45, 'img/Pages/Archive/37.jpg', '', 0, 7),
(46, 'img/Pages/Archive/39.jpeg', '', 0, 8),
(47, 'img/Pages/Archive/40.jpeg', '', 0, 8);

-- --------------------------------------------------------

--
-- Structure de la table `photographe`
--

CREATE TABLE `photographe` (
  `id` int(11) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `level` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `photographe`
--

INSERT INTO `photographe` (`id`, `lastname`, `firstname`, `email`, `country`, `date`, `level`, `password`) VALUES
(1, 'Boulabiar', 'Hathem', '', '', '0000-00-00', '', ''),
(2, 'Hassani', 'Salah', '', '', '0000-00-00', '', ''),
(3, 'Souhayl', 'Hanen', '', '', '0000-00-00', '', ''),
(4, 'Ncib', 'Houcin', '', '', '0000-00-00', '', ''),
(5, 'Sahbi', 'Siraj', '', '', '0000-00-00', '', ''),
(6, '', 'Hanen', '', '', '0000-00-00', '', ''),
(7, 'Ben Omrane', 'Nour', '', '', '0000-00-00', '', ''),
(8, 'Guesmi', 'Narjes', '', '', '0000-00-00', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner` (`owner`);

--
-- Index pour la table `photographe`
--
ALTER TABLE `photographe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT pour la table `photographe`
--
ALTER TABLE `photographe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`owner`) REFERENCES `photographe` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
