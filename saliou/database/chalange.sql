-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 16 mars 2024 à 13:05
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chalange`
--

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

DROP TABLE IF EXISTS `historique`;
CREATE TABLE IF NOT EXISTS `historique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `date` varchar(40) NOT NULL,
  `heure` varchar(40) NOT NULL,
  `visite` varchar(40) NOT NULL,
  `telephone` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `historique`
--

INSERT INTO `historique` (`id`, `nom`, `prenom`, `date`, `heure`, `visite`, `telephone`) VALUES
(22, 'BAH', 'Mamadou saliou', '10-03-2024', '02:03:35', 'visiter', '627486106'),
(23, 'diallo', 'mouctar', '10-03-2024', '02:03:55', 'visiter', '621304708'),
(24, 'diallo', 'mouctar', '10-03-2024', '03:03:48', 'visiter', '621304708'),
(25, 'diallo', 'mouctar', '10-03-2024', '03:03:42', 'visiter', '621304708'),
(26, 'BAH', 'Mamadou saliou', '10-03-2024', '12:03:57', 'visiter', '627486106'),
(27, 'BAH', 'Mamadou saliou', '10-03-2024', '13:03:52', 'visiter', '627486106'),
(28, 'BAH', 'Mamadou saliou', '10-03-2024', '13:03:31', 'visiter', '627486106'),
(29, 'BAH', 'Mamadou saliou', '10-03-2024', '13:03:17', 'visiter', '627486106'),
(30, 'BAH', 'Mamadou saliou', '10-03-2024', '13:03:43', 'visiter', '627486106'),
(31, 'BAH', 'Mamadou saliou', '10-03-2024', '13:03:45', 'visiter', '627486106'),
(32, 'BAH', 'Mamadou saliou', '10-03-2024', '13:03:02', 'visiter', '627486106'),
(33, 'diallo', 'mouctar', '10-03-2024', '13:03:53', 'visiter', '621304708'),
(34, 'BAH', 'Mamadou saliou', '11-03-2024', '23:03:21', 'visiter', '627486106');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenoms` varchar(40) NOT NULL,
  `telephone` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `nom`, `prenoms`, `telephone`) VALUES
(1, '627486106', '1234', 'BAH', 'Mamadou saliou', '627486106'),
(2, '621304708', '1234', 'diallo', 'mouctar', '621304708');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
