-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 16 jan. 2020 à 14:11
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `restdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cart_product`
--

CREATE TABLE `cart_product` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(5, 'tech'),
(6, 'accessory'),
(7, 'phones');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `name`, `product_id`, `location`) VALUES
(8, '41396917_1727155157382224_3362013799883210752_n-5e19f3f562b64.jpeg', 6, 'http://localhost:8000/images/'),
(9, '41396917_1727155157382224_3362013799883210752_n-5e19f3f562b64.jpeg', 7, 'http://localhost:8000/images/'),
(10, '41396917_1727155157382224_3362013799883210752_n-5e19f3f562b64.jpeg', 8, 'http://localhost:8000/images/'),
(11, '41396917_1727155157382224_3362013799883210752_n-5e19f3f562b64.jpeg', 9, 'http://localhost:8000/images/'),
(12, '31949968_143541203168101_8119464540116090880_n-5e19f3a682e69.jpeg', 9, 'http://localhost:8000/images/'),
(13, '41396917_1727155157382224_3362013799883210752_n-5e19f3f562b64.jpeg', 11, 'http://localhost:8000/images/'),
(14, '41396917_1727155157382224_3362013799883210752_n-5e19f3f562b64.jpeg', 12, 'http://localhost:8000/images/'),
(15, '41396917_1727155157382224_3362013799883210752_n-5e19f3f562b64.jpeg', 13, 'http://localhost:8000/images/'),
(16, '41396917_1727155157382224_3362013799883210752_n-5e19f3f562b64.jpeg', 14, 'http://localhost:8000/images/'),
(17, '41396917_1727155157382224_3362013799883210752_n-5e19f3f562b64.jpeg', 15, 'http://localhost:8000/images/'),
(18, 'ecriture-complete-condition-if-php-5e2044a9aa79f.png', 16, 'http://localhost:8000/images/'),
(19, 'electrecite-5e2044a9ac860.jpeg', 16, 'http://localhost:8000/images/'),
(20, 'ecriture-complete-condition-if-php-5e2045fd7e105.png', 17, 'http://localhost:8000/images/'),
(21, 'electrecite-5e2045fd7e5bc.jpeg', 17, 'http://localhost:8000/images/'),
(22, 'images-5e2045fd7eb79.jpeg', 17, 'http://localhost:8000/images/'),
(23, 'images-5e2046fd196ba.jpeg', 6, 'http://localhost:8000/images/');

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20200111154810', '2020-01-11 15:51:41'),
('20200111155239', '2020-01-11 15:52:53');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` double NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qunatity` int(11) NOT NULL,
  `likes` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `title`, `rating`, `description`, `price`, `thumb`, `color`, `qunatity`, `likes`, `category_id`) VALUES
(6, 'iPhone 3GS', 100, 'Danger OS', 99, 'images.jpg', 'black', 100, 5, 6),
(7, 'iPhone 3G', 100, 'BlackBerry', 99, '41396917_1727155157382224_3362013799883210752_n-5e19f3f562b64.jpeg', 'black', 100, 0, 6),
(8, 'iPhone SE', 100, 'Danger OS', 99, '41396917_1727155157382224_3362013799883210752_n-5e19f3f562b64.jpeg', 'black', 100, 0, 6),
(9, 'iPhone 5', 100, 'Firefox OS', 99, '41396917_1727155157382224_3362013799883210752_n-5e19f3f562b64.jpeg', 'black', 100, 0, 6),
(10, 'iPhone 3G', 100, 'Windows 8.1', 99, '41396917_1727155157382224_3362013799883210752_n-5e19f3f562b64.jpeg', 'black', 100, 0, 6),
(11, 'iPhone 3G', 100, 'Ubuntu Touch', 99, '41396917_1727155157382224_3362013799883210752_n-5e19f3f562b64.jpeg', 'black', 100, 0, 6),
(12, 'iPhone 4S', 100, 'Windows 10 Mobile', 99, '41396917_1727155157382224_3362013799883210752_n-5e19f3f562b64.jpeg', 'black', 100, 0, 6),
(13, 'iPhone 8 / 8 Plus', 100, 'Android OS', 99, '41396917_1727155157382224_3362013799883210752_n-5e19f3f562b64.jpeg', 'black', 100, 0, 6),
(14, 'iPhone 5S', 100, 'Windows RT', 99, '41396917_1727155157382224_3362013799883210752_n-5e19f3f562b64.jpeg', 'black', 100, 0, 6),
(15, 'iPhone 3G', 100, 'Windows 8', 99, '41396917_1727155157382224_3362013799883210752_n-5e19f3f562b64.jpeg', 'black', 100, 0, 6),
(16, 'title', 112, 'oijdzi', 10, 'ecriture-complete-condition-if-php.png', '10', 10, 10, NULL),
(17, '321', 32, '1321', 321, 'images-5e2045fd7eb79.jpeg', '32', 1321, 321, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `whish_list`
--

CREATE TABLE `whish_list` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `whish_list_product`
--

CREATE TABLE `whish_list_product` (
  `whish_list_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_BA388B7A76ED395` (`user_id`);

--
-- Index pour la table `cart_product`
--
ALTER TABLE `cart_product`
  ADD PRIMARY KEY (`cart_id`,`product_id`),
  ADD KEY `IDX_2890CCAA1AD5CDBF` (`cart_id`),
  ADD KEY `IDX_2890CCAA4584665A` (`product_id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C53D045F4584665A` (`product_id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D34A04AD12469DE2` (`category_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `whish_list`
--
ALTER TABLE `whish_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_39E85624A76ED395` (`user_id`);

--
-- Index pour la table `whish_list_product`
--
ALTER TABLE `whish_list_product`
  ADD PRIMARY KEY (`whish_list_id`,`product_id`),
  ADD KEY `IDX_CC1D16E91B35BBAD` (`whish_list_id`),
  ADD KEY `IDX_CC1D16E94584665A` (`product_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `whish_list`
--
ALTER TABLE `whish_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_BA388B7A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `cart_product`
--
ALTER TABLE `cart_product`
  ADD CONSTRAINT `FK_2890CCAA1AD5CDBF` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_2890CCAA4584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `FK_C53D045F4584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04AD12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Contraintes pour la table `whish_list`
--
ALTER TABLE `whish_list`
  ADD CONSTRAINT `FK_39E85624A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `whish_list_product`
--
ALTER TABLE `whish_list_product`
  ADD CONSTRAINT `FK_CC1D16E91B35BBAD` FOREIGN KEY (`whish_list_id`) REFERENCES `whish_list` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_CC1D16E94584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
