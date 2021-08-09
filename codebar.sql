-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 09 août 2021 à 11:02
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
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `idImg` int(11) NOT NULL,
  `nameImg` varchar(255) NOT NULL,
  `codeBarProd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`idImg`, `nameImg`, `codeBarProd`) VALUES
(77, 'client1.jpg', 0),
(78, 'client2.jpg', 0),
(79, 'client1.jpg', 0),
(80, 'client2.jpg', 0),
(81, 'client1.jpg', 0),
(82, 'client1.jpg', 65567819),
(83, '', 6556781),
(84, 'code bar2.png', 6556781),
(85, 'ajout produit.png', 6556781),
(86, 'accordion.png', 6556781),
(87, '', 5000),
(88, '', 50005),
(89, '', 50005),
(90, '', 55888),
(91, '', 85556),
(92, '', 2147483647),
(93, '', 2147483647),
(94, '', 2147483647),
(95, '', 2147483647),
(96, '', 2147483647),
(97, '', 2147483647),
(98, '', 2147483647),
(99, '', 2147483647),
(100, '', 2147483647),
(101, '', 2147483647),
(102, '', 2147483647),
(103, '', 2147483647),
(104, '', 2147483647),
(105, '', 2147483647),
(106, '', 2147483647),
(107, '', 2147483647),
(108, 'client1.jpg', 2147483647),
(109, '', 2147483647),
(110, '', 2147483647),
(111, '', 2147483647),
(112, '', 2147483647),
(113, '', 2147483647),
(114, '', 2147483647),
(115, '', 2147483647),
(116, '', 2147483647),
(117, '', 2147483647),
(118, '', 2147483647),
(119, '', 2147483647),
(120, '', 2147483647),
(121, '', 2147483647),
(122, '', 2147483647),
(123, '', 2147483647),
(124, '', 2147483647);

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

--
-- Déchargement des données de la table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(1, '::1', '5555', 1628083022),
(2, '::1', 'administrator', 1628083999),
(3, '::1', 'fjjfjf', 1628152799),
(4, '::1', 'fjjfjf', 1628155004);

-- --------------------------------------------------------

--
-- Structure de la table `pointvente`
--

CREATE TABLE `pointvente` (
  `idPtVte` int(11) NOT NULL,
  `paysPtVte` varchar(255) NOT NULL,
  `villePtVte` varchar(255) NOT NULL,
  `adressePtVte` varchar(255) NOT NULL,
  `nomPtVte` varchar(255) NOT NULL,
  `telSitePtVte` varchar(255) NOT NULL,
  `codeBarProd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pointvente`
--

INSERT INTO `pointvente` (`idPtVte`, `paysPtVte`, `villePtVte`, `adressePtVte`, `nomPtVte`, `telSitePtVte`, `codeBarProd`) VALUES
(29, 'cameroun', '', '', '', '', 0),
(30, 'Congo', '', '', '', '', 0),
(31, '', 'yaoundé', '', '', '', 0),
(32, '', 'Cotonou', '', '', '', 0),
(33, '', '', 'Mvan', '', '', 0),
(34, '', '', 'Mvane', '', '', 0),
(35, 'cameroun', '', '', '', '', 0),
(36, 'Congo', '', '', '', '', 0),
(37, '', 'yaoundé', '', '', '', 0),
(38, '', 'Cotonou', '', '', '', 0),
(39, '', '', 'Mvan', '', '', 0),
(40, '', '', 'Mvane', '', '', 0),
(41, 'cameroun', '', '', '', '', 0),
(42, '', 'yaoundé', '', '', '', 0),
(43, '', '', 'Mvan', '', '', 0),
(44, 'cameroun', '', '', '', '', 0),
(45, '', 'yaoundé', '', '', '', 0),
(46, '', '', 'Mvan', '', '', 0),
(47, 'cameroun', '', '', '', '', 0),
(48, '', 'yaoundé', '', '', '', 0),
(49, '', '', 'Mvan', '', '', 0),
(50, 'cameroun', '', '', '', '', 5000),
(51, '', 'yaoundé', '', '', '', 5000),
(52, '', '', 'Mvan', '', '', 5000),
(53, 'cameroun', '', '', '', '', 50005),
(54, '', 'yaoundé', '', '', '', 50005),
(55, '', '', 'Mvan', '', '', 50005),
(56, '', '', '', '', '', 55888),
(57, '', '', '', '', '', 55888),
(58, '', '', '', '', '', 55888),
(59, '', '', '', '', '', 85556),
(60, '', '', '', '', '', 85556),
(61, '', '', '', '', '', 85556),
(62, '', '', '', '', '', 2147483647),
(63, '', '', '', '', '', 2147483647),
(64, '', '', '', '', '', 2147483647),
(65, '', '', '', '', '', 2147483647),
(66, '', '', '', '', '', 2147483647),
(67, '', '', '', '', '', 2147483647),
(68, '', '', '', '', '', 2147483647),
(69, '', '', '', '', '', 2147483647),
(70, '', '', '', '', '', 2147483647),
(71, '', '', '', '', '', 2147483647),
(72, '', '', '', '', '', 2147483647),
(73, '', '', '', '', '', 2147483647),
(74, '', '', '', '', '', 2147483647),
(75, '', '', '', '', '', 2147483647),
(76, '', '', '', '', '', 2147483647),
(77, '', '', '', '', '', 2147483647),
(78, '', '', '', '', '', 2147483647),
(79, '', '', '', '', '', 2147483647),
(80, '', '', '', '', '', 2147483647),
(81, '', '', '', '', '', 2147483647),
(82, '', '', '', '', '', 2147483647),
(83, '', '', '', '', '', 2147483647),
(84, '', '', '', '', '', 2147483647),
(85, '', '', '', '', '', 2147483647),
(86, '', '', '', '', '', 2147483647),
(87, '', '', '', '', '', 2147483647),
(88, '', '', '', '', '', 2147483647),
(89, '', '', '', '', '', 2147483647),
(90, '', '', '', '', '', 2147483647),
(91, '', '', '', '', '', 2147483647),
(92, '', '', '', '', '', 2147483647),
(93, '', '', '', '', '', 2147483647),
(94, '', '', '', '', '', 2147483647),
(95, '', '', '', '', '', 2147483647),
(96, '', '', '', '', '', 2147483647),
(97, '', '', '', '', '', 2147483647),
(98, '', '', '', '', '', 2147483647),
(99, '', '', '', '', '', 2147483647),
(100, '', '', '', '', '', 2147483647),
(101, '', '', '', '', '', 2147483647),
(102, '', '', '', '', '', 2147483647),
(103, '', '', '', '', '', 2147483647),
(104, '', '', '', '', '', 2147483647),
(105, '', '', '', '', '', 2147483647),
(106, '', '', '', '', '', 2147483647),
(107, '', '', '', '', '', 2147483647),
(108, '', '', '', '', '', 2147483647),
(109, '', '', '', '', '', 2147483647),
(110, '', '', '', '', '', 2147483647),
(111, '', '', '', '', '', 2147483647),
(112, '', '', '', '', '', 2147483647),
(113, '', '', '', '', '', 2147483647),
(114, '', '', '', '', '', 2147483647),
(115, '', '', '', '', '', 2147483647),
(116, '', '', '', '', '', 2147483647),
(117, '', '', '', '', '', 2147483647),
(118, '', '', '', '', '', 2147483647),
(119, '', '', '', '', '', 2147483647),
(120, '', '', '', '', '', 2147483647),
(121, '', '', '', '', '', 2147483647),
(122, '', '', '', '', '', 2147483647),
(123, '', '', '', '', '', 2147483647),
(124, '', '', '', '', '', 2147483647),
(125, '', '', '', '', '', 2147483647),
(126, '', '', '', '', '', 2147483647),
(127, '', '', '', '', '', 2147483647),
(128, '', '', '', '', '', 2147483647),
(129, '', '', '', '', '', 2147483647),
(130, '', '', '', '', '', 2147483647),
(131, '', '', '', '', '', 2147483647),
(132, '', '', '', '', '', 2147483647),
(133, '', '', '', '', '', 2147483647),
(134, '', '', '', '', '', 2147483647),
(135, '', '', '', '', '', 2147483647),
(136, '', '', '', '', '', 2147483647),
(137, '', '', '', '', '', 2147483647),
(138, '', '', '', '', '', 2147483647),
(139, '', '', '', '', '', 2147483647),
(140, '', '', '', '', '', 2147483647),
(141, '', '', '', '', '', 2147483647),
(142, '', '', '', '', '', 2147483647),
(143, '', '', '', '', '', 2147483647),
(144, '', '', '', '', '', 2147483647),
(145, '', '', '', '', '', 2147483647),
(146, '', '', '', '', '', 2147483647),
(147, '', '', '', '', '', 2147483647),
(148, '', '', '', '', '', 2147483647),
(149, '', '', '', '', '', 2147483647),
(150, '', '', '', '', '', 2147483647),
(151, '', '', '', '', '', 2147483647),
(152, '', '', '', '', '', 2147483647),
(153, '', '', '', '', '', 2147483647),
(154, '', '', '', '', '', 2147483647),
(155, '', '', '', '', '', 2147483647),
(156, '', '', '', '', '', 2147483647),
(157, '', '', '', '', '', 2147483647),
(158, '', '', '', '', '', 2147483647),
(159, '', '', '', '', '', 2147483647),
(160, '', '', '', '', '', 2147483647),
(161, '', '', '', '', '', 2147483647),
(162, '', '', '', '', '', 2147483647),
(163, '', '', '', '', '', 2147483647),
(164, '', '', '', '', '', 2147483647),
(165, '', '', '', '', '', 2147483647),
(166, '', '', '', '', '', 2147483647),
(167, '', '', '', '', '', 2147483647),
(168, '', '', '', '', '', 2147483647),
(169, '', '', '', '', '', 2147483647);

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
  `id` int(11) NOT NULL,
  `prodState` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`codeBarProd`, `nameProd`, `sellNameProd`, `markProd`, `descripProd`, `composProd`, `useCounsProd`, `originCountryProd`, `FormatProd`, `colorProd`, `priceProd`, `autorisationProd`, `presentVideo`, `othersVideo`, `urlFacebook`, `urlTwiter`, `urlYoutube`, `urlPinterest`, `othersUrl`, `id`, `prodState`) VALUES
('0123456789012', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
('0123456789123', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
('0123456789128', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
('0123456789456', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
('0123456897411', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
('0123456897418', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
('0125523333335', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
('0455555555550', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
('0523456789883', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
('0789456123789', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
('123456789124', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
('1234567891284', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
('4561237894560', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
('5234567089883', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
('5234567891283', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
('5234567891288', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
('5641239871250', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
('7894561237890', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
('8234567891284', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0),
('8234567891288', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `urlmaker`
--

CREATE TABLE `urlmaker` (
  `idUrl` int(11) NOT NULL,
  `nameUrl` varchar(255) NOT NULL,
  `codeBarProd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `urlmaker`
--

INSERT INTO `urlmaker` (`idUrl`, `nameUrl`, `codeBarProd`) VALUES
(5, 'bbbbbbbbbb', 0),
(6, 'bbbbbbbbbb', 0),
(7, 'bbbbbbbbbbx', 50005);

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
(1, '127.0.0.1', 'administrator', '$2y$10$jzwNvIDrozaHm.tQ/711FOZx9eFNZ3YWg2UgjucFKf6Aw20I5aApW', 'admin@admin.com', NULL, '', '7c4218f3d0002d57c415', '$2y$10$OqBS98yw7dmlgtIZZRB3d.VvlRtCKDnw3May0fE.ym3aUGc7XNXhe', 1628154138, NULL, NULL, 1268889823, 1628151500, 1, 'Admin', 'istrator', 'ADMIN', '0', '', ''),
(2, '::1', NULL, '$2y$10$VkV0NAsFBK1DpdPdeVzlzuCYN0di/qQBwHw81vwcVWypIr9HEZg4G', 'fjjfjf@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1628086078, NULL, 1, 'jjcc', 'ccnn', 'nn n n n', '4555555555555', '', ''),
(3, '::1', NULL, '$2y$10$APXhmP9iqLG88ECx/1MayOTrsjZx3DIl1b5rn34JxYfK9fvT3aLkS', 'dddddd@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1628086122, NULL, 1, 'jjcc', 'ccnn', 'nn n n n', '999999999', '', ''),
(4, '::1', NULL, '$2y$10$CwQBnCnHzqxzgkyj3FpEqOoUUY9MHrR8vATZI8nnrgPryd5ZQl3.m', 'fjjf02jf@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1628088949, NULL, 1, 'Mvan', '111111111111', 'nn n n n', '1111111111', '', ''),
(5, '::1', NULL, '$2y$10$RjetVPpxfhGekH7SjbVMHOPP0u9txKntdQXGJu9Cwkhop.DVq6euW', 'tiotsopvany01@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1628152117, 1628154281, 1, 'Nkolbisson', '654814503', 'www queenX.com', '656714579', '', '');

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
(6, 5, 2);

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

CREATE TABLE `videos` (
  `idVideo` int(11) NOT NULL,
  `nameVideo` varchar(255) NOT NULL,
  `codeBarProd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `videos`
--

INSERT INTO `videos` (`idVideo`, `nameVideo`, `codeBarProd`) VALUES
(38, 'team1.jpg', 0),
(39, 'team2.jpg', 0),
(40, 'team1.jpg', 0),
(41, 'team2.jpg', 0),
(42, 'team1.jpg', 0),
(43, 'team1.jpg', 0),
(44, 'team1.jpg', 0),
(45, 'team1.jpg', 5000),
(46, 'team1.jpg', 50005),
(47, '', 55888),
(48, '', 85556),
(49, '', 2147483647),
(50, '', 2147483647),
(51, '', 2147483647),
(52, '', 2147483647),
(53, '', 2147483647),
(54, '', 2147483647),
(55, '', 2147483647),
(56, '', 2147483647),
(57, '', 2147483647),
(58, '', 2147483647),
(59, '', 2147483647),
(60, '', 2147483647),
(61, '', 2147483647),
(62, '', 2147483647),
(63, '', 2147483647),
(64, '', 2147483647),
(65, '', 2147483647),
(66, '', 2147483647),
(67, '', 2147483647),
(68, '', 2147483647),
(69, '', 2147483647),
(70, '', 2147483647),
(71, '', 2147483647),
(72, '', 2147483647),
(73, '', 2147483647),
(74, '', 2147483647),
(75, '', 2147483647),
(76, '', 2147483647),
(77, '', 2147483647),
(78, '', 2147483647),
(79, '', 2147483647),
(80, '', 2147483647),
(81, '', 2147483647),
(82, '', 2147483647),
(83, '', 2147483647),
(84, '', 2147483647),
(85, '', 2147483647),
(86, '', 2147483647),
(87, '', 2147483647),
(88, '', 2147483647),
(89, '', 2147483647);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`idImg`),
  ADD KEY `codeBarProd` (`codeBarProd`);

--
-- Index pour la table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pointvente`
--
ALTER TABLE `pointvente`
  ADD PRIMARY KEY (`idPtVte`),
  ADD KEY `codeBarProd` (`codeBarProd`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`codeBarProd`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `urlmaker`
--
ALTER TABLE `urlmaker`
  ADD PRIMARY KEY (`idUrl`),
  ADD KEY `codeBarProd` (`codeBarProd`);

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
-- Index pour la table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`idVideo`),
  ADD KEY `codeBarProd` (`codeBarProd`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `idImg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT pour la table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `pointvente`
--
ALTER TABLE `pointvente`
  MODIFY `idPtVte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT pour la table `urlmaker`
--
ALTER TABLE `urlmaker`
  MODIFY `idUrl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `videos`
--
ALTER TABLE `videos`
  MODIFY `idVideo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

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
