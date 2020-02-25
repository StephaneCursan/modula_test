-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mar. 25 fév. 2020 à 14:13
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `modula_test`
--

-- --------------------------------------------------------

--
-- Structure de la table `emails`
--

CREATE TABLE `emails` (
  `id` int(11) UNSIGNED NOT NULL,
  `mailing_date` date NOT NULL,
  `mailing_time` time NOT NULL,
  `ip` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `emails`
--

INSERT INTO `emails` (`id`, `mailing_date`, `mailing_time`, `ip`, `name`, `firstname`, `email`, `message`) VALUES
(10, '2020-02-22', '17:25:35', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Hello World !'),
(11, '2020-02-22', '17:35:00', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Ne manger pas ou jeuner voilà bien votre grande bêtise.'),
(12, '2020-02-22', '18:07:22', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Vive moi !'),
(13, '2020-02-24', '08:10:46', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Test'),
(14, '2020-02-24', '08:48:40', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Bonjour à tous'),
(15, '2020-02-24', '08:49:56', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Wouaouh !'),
(16, '2020-02-24', '08:54:07', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Wouaouh !'),
(17, '2020-02-24', '09:00:08', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Retest'),
(18, '2020-02-24', '09:03:16', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'RereTest'),
(19, '2020-02-24', '09:03:39', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Jour'),
(20, '2020-02-24', '09:07:38', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Message'),
(21, '2020-02-24', '09:07:56', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Message'),
(22, '2020-02-24', '09:54:22', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Message'),
(23, '2020-02-24', '09:55:33', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Message'),
(24, '2020-02-24', '09:58:00', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Message'),
(25, '2020-02-24', '09:58:10', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Mmessage'),
(26, '2020-02-24', '09:59:54', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Mmessage'),
(27, '2020-02-24', '10:00:05', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Un autre'),
(28, '2020-02-24', '10:00:46', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Un autre'),
(29, '2020-02-24', '10:00:59', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Et encore !'),
(30, '2020-02-24', '10:02:56', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Et encore !'),
(31, '2020-02-24', '10:03:08', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Encore ouzo !'),
(32, '2020-02-24', '10:03:32', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Encore ouzo !'),
(33, '2020-02-24', '10:04:44', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Encore ouzo !'),
(34, '2020-02-24', '10:04:59', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Test 234'),
(35, '2020-02-24', '10:06:13', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Bonjour !'),
(36, '2020-02-24', '10:07:50', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Bonjour !'),
(37, '2020-02-24', '10:08:21', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Bonjour !'),
(38, '2020-02-24', '10:09:17', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Bonjour !'),
(39, '2020-02-24', '10:09:39', '::1', 'Cursan', 'Stéphane', 'stephane.cursan@orange.fr', 'Bonjour !');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom_utilisateur` varchar(15) NOT NULL,
  `mot_de_passe` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom_utilisateur`, `mot_de_passe`) VALUES
(3, 'admin', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
