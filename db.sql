-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Sam 04 Mars 2017 à 15:08
-- Version du serveur :  5.6.33
-- Version de PHP :  7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `oc-minichat`
--

-- --------------------------------------------------------

--
-- Structure de la table `main`
--

CREATE TABLE `main` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `main`
--

INSERT INTO `main` (`id`, `pseudo`, `message`, `date`) VALUES
(1, 'Guillaume', 'Hello world !', '2017-03-04 11:49:02'),
(2, 'John Doe', 'Hey boy !', '2017-03-04 11:49:02'),
(3, 'Guillaume', 'Hey john :)', '2017-03-04 11:49:02'),
(4, 'John Doe', 'How are you my friend ?', '2017-03-04 11:49:02'),
(5, 'Guillaume', 'I&#39;m fine, thanks. Do you see the new ryzen amd precessors ?', '2017-03-04 11:49:02'),
(6, 'John Doe', 'Yeah, they look great !', '2017-03-04 11:49:27'),
(7, 'John Doe', 'But a little bit overated', '2017-03-04 12:16:00'),
(8, 'John Doe', 'Test', '2017-03-04 14:10:36'),
(9, 'John Doe', 'Test', '2017-03-04 14:10:42'),
(10, 'John Doe', 'And this is the 10th msg !', '2017-03-04 14:42:32'),
(11, 'John Doe', 'And another one', '2017-03-04 14:55:17'),
(12, 'Guillaume', 'Hey man, it&#39;s working now ! :)', '2017-03-04 15:03:00');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `main`
--
ALTER TABLE `main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
