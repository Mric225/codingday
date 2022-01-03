-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 17 nov. 2021 à 17:41
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `flutter`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `motdepasse` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `email`, `motdepasse`) VALUES
(1, 'Gohi', 'Frederick', 'gohifrederick@gmail.com', 'azerty@');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `email` text NOT NULL,
  `telephone` text NOT NULL,
  `motdepasse` text NOT NULL,
  `datepub` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `nom`, `prenom`, `email`, `telephone`, `motdepasse`, `datepub`) VALUES
(27, 'cedric', 'pene', 'cedricpene2@gmail.com', '007787777777', '123', '2021-11-13 23:56:30'),
(35, 'N\'GORAN', 'KOUAKOU GUILLAUME', 'kpantanoel@gmail.com', '64372478', '147258369', '2021-11-16 01:06:27'),
(36, 'fhvds', 'Claverie', 'severin@gmail.com', '0707184008', 't', '2021-11-16 01:07:06'),
(38, 'test', 'test', 'franckalex075@gmail.com', '', '', '2021-11-17 03:32:06'),
(39, 'franck', 'koffi', 'cedricpene23@gmail.com', '', 'mIQaH', '2021-11-17 03:37:07'),
(40, 'mani', 'joel', 'bi.mani@uvci.edu.ci', '', 'gif8L', '2021-11-17 04:10:07'),
(41, 'franck', 'dior', 'franckalex0755@gmail.com', '', 'QIxpt', '2021-11-17 05:16:02');

-- --------------------------------------------------------

--
-- Structure de la table `ocr`
--

CREATE TABLE `ocr` (
  `id` int(11) NOT NULL,
  `idu` int(11) NOT NULL,
  `image` text NOT NULL,
  `texte` text NOT NULL,
  `titre` text NOT NULL,
  `datepub` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ocr`
--

INSERT INTO `ocr` (`id`, `idu`, `image`, `texte`, `titre`, `datepub`) VALUES
(68, 0, 'image_cropper_1636919334399.jpg', 'Koné Mate Sirani a une nouvelle story :\n\'text_content\":\"la petite inossente\n\"\"text_background_color\":\"#000000\",\"t\next_color\":\"#FFFFFE\"}]\".\n\nSupprimer cette notification\n\nDésactiver les notifications\nconcernant les actualités de Koné\nMate Sirani\n\nDésactiver les n\nconcernant \"Not\nles amis proches pu\n\n \n', 'nnnn', '2021-11-14 19:49:12'),
(69, 0, 'image_cropper_1636919381209.jpg', 'MISSdI\n\n12 NOVEMBRE\n\nDEBUT\nDES VOTES\nCHALLENGE 2\n', 'olpki', '2021-11-14 19:49:57'),
(70, 0, 'image_cropper_1636920508268.jpg', '08:00 ® ivi ° QA ll! 80% HH\n\nb\n\n# mfumu-code-live-coding-... =\n238 membres =O O\n61 G\n2nonlu(s) xX\n6 nov.\nwillf80 12 h 38\n\nBonjour @ici chers développeurs,\n\nJe viens par ce canal que ma société est\nen plein recrutement immédiate en\nFrance :\n\nProfil recherches en développement :\n\ne Uniquement des fullstack angular de 4\nans minimum\n\ne Des profils back end .net ou\nfullstack .net de 2 ans minimum\n\ne Des profils data ingénieur 1 an\nminimum en spark Scala ou python ou\njava. Recherche de beaucoup de\njuniors.\n\ne Profils fullstack js de 4 ans minimum\n\ne Profils fullstack react avec java ou .net\nen back.\n\nDes développeurs dispo entre\nmaintenant et février.\n\nEnvoyez moi vos CV a l\'adresse :\nwillyfkouadio@gmail.com\n\nOu par WhatsApp au +33 766 177\n095\n\nEnvoyer un message a #mfumu-code-ii... +\n', 'pml', '2021-11-14 20:08:47'),
(71, 10, 'image_cropper_1636921338356.jpg', 'MISSdI\n\n12 NOVEMBRE\n\nDEBUT\nDES VOTES\nCHALLENGE 2\n', 'miss', '2021-11-14 20:22:54');

-- --------------------------------------------------------

--
-- Structure de la table `registre`
--

CREATE TABLE `registre` (
  `id` int(11) NOT NULL,
  `arrivé` datetime NOT NULL,
  `départ` datetime NOT NULL,
  `apprenant` int(11) NOT NULL,
  `formation` varchar(255) NOT NULL,
  `statut` tinyint(1) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ocr`
--
ALTER TABLE `ocr`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `registre`
--
ALTER TABLE `registre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `ocr`
--
ALTER TABLE `ocr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT pour la table `registre`
--
ALTER TABLE `registre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
