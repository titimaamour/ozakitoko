-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 26 juil. 2021 à 01:53
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ozakitoko`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `pwd` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `email`, `pwd`) VALUES
(1, 'Fatima', 'Barry', 'titima@gmail.com', 'berry1234'),
(2, 'Yacine', 'Diakhate', 'yacine@gmail.com', 'thiepyapp455'),
(3, 'Hamza', 'Sougou', 'hamzou@gmail.com', 'ujiko1234'),
(4, 'Geraud', 'Alphonse', 'draxx@gmail.com', 'trex1234'),
(5, 'Lamamba', 'San', 'mamba@gmail.com', 'zxc123');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `dateCommande` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT current_timestamp(),
  `adresseLivraison` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` varchar(25) COLLATE utf8_bin NOT NULL DEFAULT 'nouveau'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `idProduit`, `quantite`, `idClient`, `dateCommande`, `adresseLivraison`, `status`) VALUES
(3, 3, 2, 1, 'current_timestamp()', 'Dakar', 'nouveau'),
(7, 5, 2, 4, 'current_timestamp()', 'asdasd', 'fini'),
(8, 8, 1, 1, 'current_timestamp()', 'Sandaga', 'fini');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prix` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `prix`, `img`, `description`) VALUES
(7, 'kit de 3 masques', 5000, '3546e408a4.png', 'Un kit de 3 masques visage coco SEPHORA COLLECTION au prix de 2 ! Un tissu d\'origine végétale qui épouse parfaitement les contours du visage, un extrait de coco d\'origine naturelle et une formules désaltérante concentrée en actifs pour des résultats visibles en 15 minutes.'),
(8, 'TOO FACED', 7500, '13d00e9a1a.png', 'L\'influenceuse Star SANANAS habille le mascara emblématique d\'un design Alligator !\r\nLe mascara délivre des pigments noirs et permet de donner aux cils volume, longueur, courbe et effet muti-dimensionnel extrêmes. '),
(9, 'GUERLAIN Mon Guerlain', 12000, '0b94aab39e.png', '\r\nMon Guerlain Eau de Parfum est un hommage à la féminité d\'aujourd\'hui : une féminité forte, libre et sensuelle, inspirée par Angelina Jolie. Cette fragrance orientale fraîche sublime des matières premières d\'exception : la lavande française, le jasmin Sambac, le santal et la vanille Tahitensis. '),
(10, 'Rose Sleeping Mask', 4500, 'd32a1486ad.png', 'Le masque visage de nuit hydratant Rose Deep Hydration Sleeping Mask répare des agressions extérieures subit et redonne l\'hydratation perdue au cours de la journée. '),
(11, 'Duo soins bestseller', 6500, '47ccf8ba39.png', 'Soy Face Cleanser : un gel nettoyant visage ultra-doux qui élimine instantanément les impuretés quotidiennes et le maquillage, y compris le mascara. Composé de protéines de soja, d\'eau de rose et d\'extraits de concombre, ce nettoyant apaise la peau et préserve son hydratation pour un teint radieux et éclatant. Il est la première étape idéale de tout rituel de beauté, quel que soit le type de peau. '),
(12, 'Duo de Soins nettoyant', 15000, '606d089977.png', 'Soy Face Cleanser est un gel nettoyant visage ultra doux qui élimine instantanément les impuretés quotidiennes et le maquillage, y compris le mascara. Composé de protéines de soja, d\'eau de rose et d\'extraits de concombre, ce nettoyant apaise la peau et préserve son hydratation pour un teint radieux. Il est la première étape idéale de tout rituel de beauté, quel que soit le type de peau.'),
(13, 'Rose Deep Hydration', 12000, 'b6171aa548.png', '\r\nLa lotion tonique visage Rose Deep Hydration Facial Toner d’une sensorialité incomparable et dont la formule contient de véritables pétales de roses en suspension. Ce soin liquide unique et élaboré à partir d\'actifs bénéfiques de roses infusées, nettoie la peau, aide à éliminer les impuretés, la pollution et ses résidus.'),
(14, 'Rose Floral Toner', 8000, '9e6ace3e06.png', 'Rose Floral Toner est une lotion apaisante pour le visage. Sa formule sans alcool hydrate, rafraîchit et fixe le maquillage. Composée d\'eau de rose pure, cette lotion florale permet de parfaire le nettoyage de la peau : elle élimine les impuretés tout en offrant une hydratation intense. Elle illumine le visage pour une peau resplendissante. Une lotion florale proposée en spray, pour plus de praticité.');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `pwd` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `email`, `pwd`) VALUES
(1, 'Fatima', 'fatima@gmail.com', 'berry123');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
