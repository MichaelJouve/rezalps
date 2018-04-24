-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 04 avr. 2018 à 13:36
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `rezalps`
--

-- --------------------------------------------------------

--
-- Structure de la table `interactions`
--

DROP TABLE IF EXISTS `interactions`;
CREATE TABLE IF NOT EXISTS `interactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `like_status` tinyint(4) NOT NULL,
  `date_status` date NOT NULL,
  `members_id` int(10) UNSIGNED NOT NULL,
  `posts_id` int(10) UNSIGNED DEFAULT NULL,
  `post_comments_id` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `fk_interactions_posts1_idx` (`posts_id`),
  KEY `fk_interactions_post_comments1_idx` (`post_comments_id`),
  KEY `members_id` (`members_id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `interactions`
--

INSERT INTO `interactions` (`id`, `like_status`, `date_status`, `members_id`, `posts_id`, `post_comments_id`) VALUES
(1, 1, '2018-03-23', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `city` varchar(50) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `sub_date` datetime DEFAULT NULL,
  `entreprise` tinyint(4) DEFAULT NULL,
  `siret` int(11) DEFAULT NULL,
  `description` mediumtext,
  `pitch_video` varchar(45) DEFAULT NULL,
  `cv` varchar(45) DEFAULT NULL,
  `avatar` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `password`, `city`, `birthdate`, `phone_number`, `sub_date`, `entreprise`, `siret`, `description`, `pitch_video`, `cv`, `avatar`) VALUES
(1, 'Michael Jouve', 'jouvemichael@gmail.com', 'Michael26', 'Valence', '1987-03-13', 676942844, '2018-03-23 00:00:00', NULL, NULL, 'Salut c\'est moi !', NULL, NULL, 'michael-photo.jpg'),
(2, 'Nicolas Martinez', 'nicolas.martinez@gmail.com', 'Nico26', 'SP3C', NULL, NULL, NULL, NULL, NULL, 'Je vais te pokemoner.', NULL, NULL, 'nico.jpeg'),
(3, 'Marie Fontanel', 'marie.fontanel.pro@gmail.com', 'Marie07', 'alaneige', NULL, NULL, NULL, NULL, NULL, 'solar upsum', NULL, NULL, NULL),
(4, 'Damien Dubois', 'damien@gmail.com', 'Damien26', 'Valence', '2018-03-01', NULL, NULL, NULL, NULL, 'Coucou, alors c\'est moi, et vous c\'est vous.', NULL, NULL, NULL),
(5, 'Boulet', 'boulet@gmail.com', 'Boubou26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `personnal_messages`
--

DROP TABLE IF EXISTS `personnal_messages`;
CREATE TABLE IF NOT EXISTS `personnal_messages` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id unique du message personnel',
  `mp_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` text NOT NULL,
  `members_id` int(11) UNSIGNED NOT NULL,
  `members_id1` int(11) UNSIGNED NOT NULL COMMENT 'who receive the message',
  PRIMARY KEY (`id`),
  KEY `id_writer` (`members_id`),
  KEY `id_member` (`members_id1`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personnal_messages`
--

INSERT INTO `personnal_messages` (`id`, `mp_date`, `message`, `members_id`, `members_id1`) VALUES
(1, '2018-03-26 10:05:00', 'Salut, rdv demain au campus.', 1, 4),
(2, '2018-03-26 00:00:00', 'Oui je serais là.', 4, 1),
(3, '2018-03-27 00:00:00', 'Finalement je ne suis pas sur de venir !!!', 1, 4),
(4, '2018-03-30 00:00:00', 'Mais si il faut venir le PHP c\'est bien', 4, 1),
(5, '2018-03-28 13:49:51', 'HELLOOOOOO', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `content` mediumtext NOT NULL,
  `post_date` datetime NOT NULL,
  `media` varchar(254) DEFAULT NULL,
  `is_offer` tinyint(4) DEFAULT NULL,
  `members_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_posts_members1_idx` (`members_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `content`, `post_date`, `media`, `is_offer`, `members_id`) VALUES
(1, 'g', '2018-03-23 00:00:00', NULL, NULL, 2),
(2, 'Salut, je voudrais savoir comment installer bootstrap sur mon site internet.\r\nOu est le .exe?', '2018-03-23 00:00:00', NULL, NULL, 5),
(3, 'coucou', '2018-03-01 00:00:00', NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Structure de la table `post_comments`
--

DROP TABLE IF EXISTS `post_comments`;
CREATE TABLE IF NOT EXISTS `post_comments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `content` mediumtext NOT NULL,
  `date_content` varchar(45) DEFAULT NULL,
  `post_id` int(10) UNSIGNED DEFAULT NULL,
  `members_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_post_comments_posts1_idx` (`post_id`),
  KEY `fk_post_comments_members1_idx` (`members_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `post_comments`
--

INSERT INTO `post_comments` (`id`, `content`, `date_content`, `post_id`, `members_id`) VALUES
(1, 'Rooooo, ça ne s\'installe pas, mais s\'utilise. Va voir openclassrooms.', NULL, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `relationship`
--

DROP TABLE IF EXISTS `relationship`;
CREATE TABLE IF NOT EXISTS `relationship` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `members_id` int(10) UNSIGNED NOT NULL,
  `members_id1` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_relationship_members1_idx` (`members_id`),
  KEY `fk_relationship_members2_idx` (`members_id1`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `relationship`
--

INSERT INTO `relationship` (`id`, `date`, `status`, `members_id`, `members_id1`) VALUES
(1, '2018-03-24', 'friend', 1, 2),
(2, '2018-03-26', 'friend', 5, 1),
(3, '2018-03-07', 'friend', 1, 4),
(4, '2018-03-15', 'friend', 3, 1),
(5, '2018-03-14', 'friend', 4, 3),
(6, '2018-03-08', 'friend', 2, 4);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `interactions`
--
ALTER TABLE `interactions`
  ADD CONSTRAINT `fk_interactions_members1` FOREIGN KEY (`members_id`) REFERENCES `members` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_interactions_post_comments1` FOREIGN KEY (`post_comments_id`) REFERENCES `post_comments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_interactions_posts1` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `personnal_messages`
--
ALTER TABLE `personnal_messages`
  ADD CONSTRAINT `personnal_messages_ibfk_1` FOREIGN KEY (`members_id`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `personnal_messages_ibfk_2` FOREIGN KEY (`members_id1`) REFERENCES `members` (`id`);

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_posts_members1` FOREIGN KEY (`members_id`) REFERENCES `members` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `post_comments`
--
ALTER TABLE `post_comments`
  ADD CONSTRAINT `fk_post_comments_members1` FOREIGN KEY (`members_id`) REFERENCES `members` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_post_comments_posts1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `relationship`
--
ALTER TABLE `relationship`
  ADD CONSTRAINT `fk_relationship_members1` FOREIGN KEY (`members_id`) REFERENCES `members` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_relationship_members2` FOREIGN KEY (`members_id1`) REFERENCES `members` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
