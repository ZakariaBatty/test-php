-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 14 oct. 2021 à 18:09
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test-php`
--

-- --------------------------------------------------------

--
-- Structure de la table `ranking`
--

CREATE TABLE `ranking` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `classement` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `id_sportif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ranking`
--

INSERT INTO `ranking` (`id`, `date`, `classement`, `description`, `id_sportif`) VALUES
(0, '2021-10-21', 1, 'testing', 1),
(0, '2021-10-21', 1, 'testing', 1),
(0, '2021-10-08', 2, 'test', 1),
(0, '2021-10-08', 4, 'TEST-', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ranking`
--
ALTER TABLE `ranking`
  ADD KEY `forgin` (`id_sportif`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ranking`
--
ALTER TABLE `ranking`
  ADD CONSTRAINT `forgin` FOREIGN KEY (`id_sportif`) REFERENCES `sportif` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
