-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 03 déc. 2019 à 00:16
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

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `dir` varchar(10000) NOT NULL,
  `thumb_dir` varchar(10000) DEFAULT NULL,
  `owner` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `name`, `dir`, `thumb_dir`, `owner`) VALUES
(1, 'hathem boulabiar', 'img/Pages/Archive/1.jpeg', NULL, 'hathem boulabiar'),
(2, 'hathem boulabiar', 'img/Pages/Archive/2.jpeg', NULL, 'hathem boulabiar'),
(3, 'hathem boulabiar', 'img/Pages/Archive/3.jpeg', NULL, 'hathem boulabiar'),
(4, 'hathem boulabiar', 'img/Pages/Archive/4.jpeg', NULL, 'hathem boulabiar'),
(5, 'hathem boulabiar', 'img/Pages/Archive/29.jpeg', NULL, 'hathem boulabiar'),
(6, 'hathem boulabiar', 'img/Pages/Archive/30.jpeg', NULL, 'hathem boulabiar'),
(7, 'hathem boulabiar', 'img/Pages/Archive/33.jpeg', NULL, 'hathem boulabiar'),
(8, 'hathem boulabiar', 'img/Pages/Archive/34.jpeg', NULL, 'hathem boulabiar'),
(9, 'Salah hassani', 'img/Pages/Archive/5.JPG', NULL, 'Salah hassani'),
(10, 'Salah hassani', 'img/Pages/Archive/6.JPG', NULL, 'Salah hassani'),
(11, 'Salah hassani', 'img/Pages/Archive/8.JPG', NULL, 'Salah hassani'),
(12, 'Salah hassani', 'img/Pages/Archive/31.JPG', NULL, 'Salah hassani'),
(13, 'hanen souhayel', 'img/Pages/Archive/7.jpg', NULL, 'hanen souhayel'),
(14, 'hanen souhayel', 'img/Pages/Archive/38.jpg', NULL, 'hanen souhayel'),
(15, 'Houcin Ncib', 'img/Pages/Archive/9.JPG', NULL, 'Houcin Ncib'),
(16, 'Houcin Ncib', 'img/Pages/Archive/10.jpg', NULL, 'Houcin Ncib'),
(17, 'Houcin Ncib', 'img/Pages/Archive/11.jpg', NULL, 'Houcin Ncib'),
(18, 'Houcin Ncib', 'img/Pages/Archive/12.jpg', NULL, 'Houcin Ncib'),
(19, 'Houcin Ncib', 'img/Pages/Archive/15.jpg', NULL, 'Houcin Ncib'),
(20, 'Houcin Ncib', 'img/Pages/Archive/20.jpg', NULL, 'Houcin Ncib'),
(21, 'Houcin Ncib', 'img/Pages/Archive/21.jpg', NULL, 'Houcin Ncib'),
(22, 'Houcin Ncib', 'img/Pages/Archive/47.jpg', NULL, 'Houcin Ncib'),
(23, 'Siraj Sahbi', 'img/Pages/Archive/13.jpg', NULL, 'Siraj Sahbi'),
(24, 'Siraj Sahbi', 'img/Pages/Archive/14.jpg', NULL, 'Siraj Sahbi'),
(25, 'Siraj Sahbi', 'img/Pages/Archive/24.jpg', NULL, 'Siraj Sahbi'),
(26, 'Siraj Sahbi', 'img/Pages/Archive/25.jpg', NULL, 'Siraj Sahbi'),
(27, 'Siraj Sahbi', 'img/Pages/Archive/26.jpg', NULL, 'Siraj Sahbi'),
(28, 'Siraj Sahbi', 'img/Pages/Archive/27.jpg', NULL, 'Siraj Sahbi'),
(29, 'Siraj Sahbi', 'img/Pages/Archive/28.jpg', NULL, 'Siraj Sahbi'),
(30, 'Siraj Sahbi', 'img/Pages/Archive/32.jpg', NULL, 'Siraj Sahbi'),
(31, 'Siraj Sahbi', 'img/Pages/Archive/44.jpg', NULL, 'Siraj Sahbi'),
(32, 'Siraj Sahbi', 'img/Pages/Archive/45.jpg', NULL, 'Siraj Sahbi'),
(33, 'Siraj Sahbi', 'img/Pages/Archive/46.jpg', NULL, 'Siraj Sahbi'),
(34, 'Hanen', 'img/Pages/Archive/16.jpg', NULL, 'Hanen'),
(35, 'Hanen', 'img/Pages/Archive/17.jpg', NULL, 'Hanen'),
(36, 'Hanen', 'img/Pages/Archive/18.jpg', NULL, 'Hanen'),
(37, 'Hanen', 'img/Pages/Archive/19.jpg', NULL, 'Hanen'),
(38, 'Hanen', 'img/Pages/Archive/22.jpg', NULL, 'Hanen'),
(39, 'Hanen', 'img/Pages/Archive/23.jpg', NULL, 'Hanen'),
(40, 'Hanen', 'img/Pages/Archive/41.jpg', NULL, 'Hanen'),
(41, 'Hanen', 'img/Pages/Archive/42.jpg', NULL, 'Hanen'),
(42, 'Hanen', 'img/Pages/Archive/43.jpg', NULL, 'Hanen'),
(43, 'nour ben omrane', 'img/Pages/Archive/35.jpg', NULL, 'nour ben omrane'),
(44, 'nour ben omrane', 'img/Pages/Archive/36.jpg', NULL, 'nour ben omrane'),
(45, 'nour ben omrane', 'img/Pages/Archive/37.jpg', NULL, 'nour ben omrane'),
(46, 'Narjes Guesmy', 'img/Pages/Archive/39.jpeg', NULL, 'Narjes Guesmy'),
(47, 'Narjes Guesmy', 'img/Pages/Archive/40.jpeg', NULL, 'Narjes Guesmy');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
