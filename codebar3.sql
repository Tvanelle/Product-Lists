-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 20 août 2021 à 14:19
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `codebar`
--

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Structure de la table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `codeBarProd` varchar(255) NOT NULL,
  `nameProd` varchar(255) NOT NULL,
  `sellNameProd` varchar(255) NOT NULL,
  `markProd` varchar(255) NOT NULL,
  `descripProd` text NOT NULL,
  `composProd` text NOT NULL,
  `useCounsProd` text NOT NULL,
  `originCountryProd` varchar(255) NOT NULL,
  `FormatProd` text NOT NULL,
  `colorProd` text NOT NULL,
  `priceProd` int(11) NOT NULL,
  `autorisationProd` text NOT NULL,
  `presentVideo` text NOT NULL,
  `othersVideo` text NOT NULL,
  `urlFacebook` text NOT NULL,
  `urlTwiter` text NOT NULL,
  `urlYoutube` text NOT NULL,
  `urlPinterest` text NOT NULL,
  `othersUrl` text NOT NULL,
  `prodState` int(11) NOT NULL,
  `adressePvte` text NOT NULL,
  `nomPvte` varchar(255) NOT NULL,
  `telSitePvte` varchar(255) NOT NULL,
  `imgProd` text NOT NULL,
  `videoProd` text NOT NULL,
  `adresseMaker` varchar(255) NOT NULL,
  `telMaker1` varchar(255) NOT NULL,
  `telMaker2` varchar(255) NOT NULL,
  `siteMaker` varchar(255) NOT NULL,
  `emailMaker` varchar(255) NOT NULL,
  `nameMaker` varchar(255) NOT NULL,
  `emailMakerE` varchar(13) NOT NULL,
  `adresseMakerE` text NOT NULL,
  `telMaker1E` text NOT NULL,
  `nameMakerE` text NOT NULL,
  `nameCategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`codeBarProd`, `nameProd`, `sellNameProd`, `markProd`, `descripProd`, `composProd`, `useCounsProd`, `originCountryProd`, `FormatProd`, `colorProd`, `priceProd`, `autorisationProd`, `presentVideo`, `othersVideo`, `urlFacebook`, `urlTwiter`, `urlYoutube`, `urlPinterest`, `othersUrl`, `prodState`, `adressePvte`, `nomPvte`, `telSitePvte`, `imgProd`, `videoProd`, `adresseMaker`, `telMaker1`, `telMaker2`, `siteMaker`, `emailMaker`, `nameMaker`, `emailMakerE`, `adresseMakerE`, `telMaker1E`, `nameMakerE`, `nameCategory`) VALUES
('0123045678941', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, '|||||', '', '', '||', '||||', '', '', '', '', '', '', '', '', '', '', '1'),
('0123456789147', 'The', 'vanelle|Théodore||||cysoul|Lydool|', 'Netlsé', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 'Kenedy|Nsam45|||Nsam452|', '', '', 'client1.jpgclient2.jpg', 'coolVideocoolVideo5|', 'netsle@gmail.com', '45666666', '', '', 'netsle@gmail.com', 'telMaker1E', '', '', '', '', '3'),
('0789456123012', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, '|', '', '', '', '|', '', '', '', '', '', '', '', '', '', '', '1'),
('0789456123015', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, '|', '', '', 'client12.jpg|', '|', '', '', '', '', '', '', '', '', '', '', '1'),
('0789546231021', 'The', '||||', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, '|||', '', '', '', '|', '', '', '', '', '', '', '', '', '', '', '3');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `adresse` varchar(255) NOT NULL,
  `phone2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `adresse`, `phone2`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$10$jzwNvIDrozaHm.tQ/711FOZx9eFNZ3YWg2UgjucFKf6Aw20I5aApW', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1628509469, 1, 'Admin', 'istrator', 'ADMIN', '0', '', ''),
(2, '::1', NULL, '$2y$10$VkV0NAsFBK1DpdPdeVzlzuCYN0di/qQBwHw81vwcVWypIr9HEZg4G', 'fjjfjf@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1628086078, NULL, 1, 'jjcc', 'ccnn', 'nn n n n', '4555555555555', '', ''),
(3, '::1', NULL, '$2y$10$APXhmP9iqLG88ECx/1MayOTrsjZx3DIl1b5rn34JxYfK9fvT3aLkS', 'dddddd@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1628086122, NULL, 1, 'jjcc', 'ccnn', 'nn n n n', '999999999', '', ''),
(4, '::1', NULL, '$2y$10$CwQBnCnHzqxzgkyj3FpEqOoUUY9MHrR8vATZI8nnrgPryd5ZQl3.m', 'fjjf02jf@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1628088949, NULL, 1, 'Mvan', '111111111111', 'nn n n n', '1111111111', '', ''),
(5, '::1', NULL, '$2y$10$RjetVPpxfhGekH7SjbVMHOPP0u9txKntdQXGJu9Cwkhop.DVq6euW', 'tiotsopvany01@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1628152117, 1628154281, 1, 'Nkolbisson', '654814503', 'www queenX.com', '656714579', '', ''),
(6, '::1', NULL, '$2y$10$Wo4BR1VUqc.O271f5ALACujDiu2LMl/9LF0Ksp9RgZtfWLl97.SxG', 'fjjfjf@oooo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1628510278, NULL, 1, 'Mvan', '111111111111', 'www queenX.com', '999999999', '', ''),
(7, '::1', NULL, '$2y$10$TvfdW4CoE/.PKMsNTMeqcu/neTySbfXzCHKCw.hCngx.ntRZAZZEm', 'jjjjjj@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1628510545, NULL, 1, '', '', '', '999999999', '', ''),
(8, '::1', NULL, '$2y$10$P2WD.m2hZMymUuDJIHn77OXsrWwpRTzzI9xkIflaRbQxVtf6q0pcu', 'nmtn@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1628511041, 1628511042, 1, '', '', '', '999999999', '', ''),
(9, '::1', NULL, '$2y$10$DR3EirnQyYOYScLbZTV5culTX3Y07ln74UPS.mSAtyMVVH82YnQ1O', 'nmtn0@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1628511100, 1628511100, 1, '', '', '', '999999999', '', ''),
(10, '::1', NULL, '$2y$10$JLANSr.nuMC5AMsgHIxUX.c0r.DCOawrn3yxfrT3.fx9wX57WzMde', 'nmtn01@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1628511256, NULL, 1, '', '', '', '999999999', '', ''),
(11, '::1', NULL, '$2y$10$kZOBUggp9BMhtzeCzHD2lu3vjU4tolsXqVbw8VVlxGFreJVph9ob6', 'fmio@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1628511403, NULL, 1, '', '', '', '999999999', '', ''),
(12, '::1', NULL, '$2y$10$UO./0xUMP5mvKDALBuXmTuLxok2n0Otzy7s4AywM7zbM5pZZ1aT2K', 'lok@gmail.vom', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1628518375, 1628518431, 1, 'Mvan', '111111111111', 'www queenX.com', '999999999', '', ''),
(13, '::1', NULL, '$2y$10$KDnmb6VhEd/hQ8fa.fXdOuJ/RxfwdHkgCvigKQ2A0ezfesKzNya7u', 'jnxjxnxnjnxjxnxn@hhh.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1628598993, NULL, 1, 'jnxjxnxn@hhh.com', 'jnxjxnxn', 'jnxjxnxn', 'jnxjxnxn', '', ''),
(14, '::1', NULL, '$2y$10$iMPXp1ACNkLRP0KaZ1bI4ePCl2SEaMrXUKCgEsj6R9lvJmhut1TDG', 'jnxjxnxnjnxj02xnxn@hhh.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1628600399, 1628600402, 1, 'jnxjxnxn@hhh.com', 'jnxjxnxn', 'jnxjxnxn', 'jnxjxnxn', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 3, 2),
(5, 4, 2),
(6, 5, 2),
(7, 6, 2),
(8, 7, 2),
(9, 8, 2),
(10, 9, 2),
(11, 10, 2),
(12, 11, 2),
(13, 12, 2),
(14, 13, 2),
(15, 14, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`codeBarProd`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Index pour la table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
