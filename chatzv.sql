-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 11 juil. 2022 à 11:28
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tchatzv`
--
CREATE DATABASE IF NOT EXISTS `chatzv` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tchatzv`;

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

CREATE TABLE `messagerie` (
  `Id_Message` int(11) NOT NULL,
  `msg_dh_utc` datetime DEFAULT NULL,
  `message_contenu` varchar(250) NOT NULL,
  `Id_Utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `recevoir`
--

CREATE TABLE `recevoir` (
  `Id_Utilisateur` int(11) NOT NULL,
  `Id_Message` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `Id_Utilisateur` int(11) NOT NULL,
  `user_pseudo` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_mail` varchar(50) NOT NULL,
  `user_phone` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_forname` varchar(50) NOT NULL,
  `user_question` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Id_Utilisateur`, `user_pseudo`, `user_pass`, `user_mail`, `user_phone`, `user_name`, `user_forname`, `user_question`) VALUES
(1, 'Korials', 'dqdq', 'vincentbonnier49@gmail.com', '0611408622', 'Bonnier', 'Vincent', 'dqs'),
(2, 'Olka', 'dqdq', 'bonnier.20100@gmail.com', '010120121', 'Bonnier', 'Vincent', 'dqs');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `messagerie`
--
ALTER TABLE `messagerie`
  ADD PRIMARY KEY (`Id_Message`),
  ADD KEY `Id_Utilisateur` (`Id_Utilisateur`);

--
-- Index pour la table `recevoir`
--
ALTER TABLE `recevoir`
  ADD PRIMARY KEY (`Id_Utilisateur`,`Id_Message`),
  ADD KEY `Id_Message` (`Id_Message`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`Id_Utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `messagerie`
--
ALTER TABLE `messagerie`
  MODIFY `Id_Message` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `Id_Utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `messagerie`
--
ALTER TABLE `messagerie`
  ADD CONSTRAINT `messagerie_ibfk_1` FOREIGN KEY (`Id_Utilisateur`) REFERENCES `utilisateur` (`Id_Utilisateur`);

--
-- Contraintes pour la table `recevoir`
--
ALTER TABLE `recevoir`
  ADD CONSTRAINT `recevoir_ibfk_1` FOREIGN KEY (`Id_Utilisateur`) REFERENCES `utilisateur` (`Id_Utilisateur`),
  ADD CONSTRAINT `recevoir_ibfk_2` FOREIGN KEY (`Id_Message`) REFERENCES `messagerie` (`Id_Message`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
