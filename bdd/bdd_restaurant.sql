-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  lun. 05 fév. 2018 à 16:27
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`) VALUES
('20180123102128');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(3) NOT NULL,
  `id_membre` int(3) DEFAULT NULL,
  `id_table` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_enregistrement` datetime NOT NULL,
  `etat` enum('En cours de réservation','Réservation enregistrée') COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tables`
--

CREATE TABLE `tables` (
  `id_table` int(3) NOT NULL,
  `id_numero` int(3) NOT NULL,
  `type_table` enum('2_pers','4_pers','6_pers','') COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(3) NOT NULL,
  `genre` enum('m','mlle','f','') COLLATE utf8_unicode_ci NOT NULL,
  `pseudo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_de_naissance` date NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mot_de_passe` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `genre`, `pseudo`, `date_de_naissance`, `prenom`, `nom`, `email`, `telephone`, `mot_de_passe`) VALUES
(24, 'mlle', 'guigui', '0000-00-00', 'Guillaume', 'Finaud', 'gfinaud@outlook.fr', '0962591716', '$2y$10$/zhleuX9eg0XFYqO.UvSsejbjHuqjeh/liHOprTb19iRuEZqPZe/y'),
(23, 'mlle', 'guigui', '0000-00-00', 'Guillaume', 'Finaud', 'gfinaud@outlook.fr', '0962591716', '$2y$10$/zhleuX9eg0XFYqO.UvSsejbjHuqjeh/liHOprTb19iRuEZqPZe/y'),
(22, 'mlle', 'guigui', '0000-00-00', 'Guillaume', 'Finaud', 'gfinaud@outlook.fr', '0962591716', '$2y$10$/zhleuX9eg0XFYqO.UvSsejbjHuqjeh/liHOprTb19iRuEZqPZe/y'),
(21, 'mlle', 'guigui', '0000-00-00', 'Guillaume', 'Finaud', 'gfinaud@outlook.fr', '0962591716', '$2y$10$Fx5K6VY/0PhEcume49EkleW/YPUXm7u4i0jbUoO1u/dFlEKsucNG.'),
(20, 'mlle', 'guigui', '0000-00-00', 'Guillaume', 'Finaud', 'gfinaud@outlook.fr', '0962591716', '$2y$10$Fx5K6VY/0PhEcume49EkleW/YPUXm7u4i0jbUoO1u/dFlEKsucNG.'),
(19, 'mlle', 'guigui', '0000-00-00', 'Guillaume', 'Finaud', 'gfinaud@outlook.fr', '0962591716', '$2y$10$Fx5K6VY/0PhEcume49EkleW/YPUXm7u4i0jbUoO1u/dFlEKsucNG.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`);

--
-- Index pour la table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id_table`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tables`
--
ALTER TABLE `tables`
  MODIFY `id_table` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;