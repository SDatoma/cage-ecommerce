-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 20 déc. 2020 à 02:48
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cage_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE `adresse` (
  `id_adresse` int(11) NOT NULL,
  `ville_adresse` varchar(100) DEFAULT NULL,
  `pays_adresse` varchar(100) DEFAULT NULL,
  `description_adresse` varchar(100) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `boutique`
--

CREATE TABLE `boutique` (
  `id_boutique` int(11) NOT NULL,
  `nom_boutique` varchar(100) DEFAULT NULL,
  `description_boutique` text,
  `ville_boutique` varchar(100) DEFAULT NULL,
  `pays_boutique` varchar(11) DEFAULT NULL,
  `nif_boutique` varchar(100) DEFAULT NULL,
  `contact_1_boutique` int(20) DEFAULT NULL,
  `contact_2_boutique` int(20) DEFAULT NULL,
  `email_boutique` varchar(100) DEFAULT NULL,
  `slogan_boutique` varchar(100) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL,
  `password_boutique` varchar(255) DEFAULT NULL,
  `etat_boutique` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `boutique`
--

INSERT INTO `boutique` (`id_boutique`, `nom_boutique`, `description_boutique`, `ville_boutique`, `pays_boutique`, `nif_boutique`, `contact_1_boutique`, `contact_2_boutique`, `email_boutique`, `slogan_boutique`, `id_role`, `password_boutique`, `etat_boutique`) VALUES
(1, 'SEBI Inc', 'reteryty tytuuyuy  tuyu', 'Sokode', 'togo', 'null', 90454345, 54454342, 'fof@gmail.com', 'rtyytyt', NULL, NULL, 1),
(2, 'Ets bamako', 'dfdgfghfh ghjgj', 'Sokode', 'togo', 'null', 90454345, 354565657, 'fofb@gmail.com', 'Vite vite', NULL, NULL, 0),
(3, 'DC 10', 'ghghj ghgjhkhk tyuuyi', 'Accra', 'Ghana', 'null', 34566678, 54656788, 'fofbilaii@gmail.com', 'DOUCEMENT', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `libelle_categorie` varchar(100) DEFAULT NULL,
  `image_categorie` varchar(50) DEFAULT NULL,
  `etat_categorie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `libelle_categorie`, `image_categorie`, `etat_categorie`) VALUES
(1, 'Alimentations', 'files_upload/categorie/Alimentations.jpg', 1),
(2, 'Bierre boisson', 'files_upload/categorie/Bierre.jpg', 1),
(3, 'Ordinateur', 'files_upload/categorie/Ordinateur.jpg', 1),
(4, 'Quincaillerie', 'files_upload/categorie/Quincaillerie.jpg', 1),
(5, 'Plomberie', 'files_upload/categorie/Plomberie.jpg', 1),
(6, 'Carreaux', 'files_upload/categorie/Carreaux.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `date_commande` datetime DEFAULT NULL,
  `etat_commande` int(1) DEFAULT NULL,
  `reference_commande` varchar(100) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_produit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `date_commande`, `etat_commande`, `reference_commande`, `id_user`, `id_produit`) VALUES
(1, '2020-12-15 00:00:00', 0, '4rf3r43', 1, 1),
(2, '2020-12-15 00:00:00', 0, 'd3ee45', 1, 2),
(3, '2020-12-14 00:00:00', 0, '4t56r6', 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

CREATE TABLE `ligne_commande` (
  `id_ligne_commande` int(11) NOT NULL,
  `quantite_commande` int(11) DEFAULT NULL,
  `prix_commande` int(100) DEFAULT NULL,
  `id_commande` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ligne_commande`
--

INSERT INTO `ligne_commande` (`id_ligne_commande`, `quantite_commande`, `prix_commande`, `id_commande`) VALUES
(1, 3, 1350, 1),
(2, 2, 1000, 2),
(3, 4, 2000, 3);

-- --------------------------------------------------------

--
-- Structure de la table `photo_produit`
--

CREATE TABLE `photo_produit` (
  `id_photo_produit` int(11) NOT NULL,
  `photo_produit` varchar(100) DEFAULT NULL,
  `id_produit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `photo_produit`
--

INSERT INTO `photo_produit` (`id_photo_produit`, `photo_produit`, `id_produit`) VALUES
(1, 'files_upload/produit/117847847_2342777705847453_3886967107264232118_o.jpg', 1),
(2, 'files_upload/produit/carte visite.jpeg', 1),
(3, 'files_upload/produit/118222442_2351207881671102_5219590186213770587_o.jpg', 2),
(4, 'files_upload/produit/117445394_2351219085003315_7313510420217429495_o.jpg', 2),
(5, 'files_upload/produit/117847847_2342777705847453_3886967107264232118_o.jpg', 2),
(6, 'files_upload/produit/courrier-ok.jpg', 3),
(7, 'files_upload/produit/118222442_2351207881671102_5219590186213770587_o.jpg', 3),
(8, 'files_upload/produit/home_picto_cmonsite.webp', 3),
(9, 'files_upload/produit/logoahde.jpg', 4),
(10, 'files_upload/produit/117413228_2337129259745631_4997223986152559912_o.jpg', 4),
(11, 'files_upload/produit/courrier-ok.jpg', 5),
(12, 'files_upload/produit/117413228_2337129259745631_4997223986152559912_o.jpg', 5),
(13, 'files_upload/produit/logoo.png', 5),
(14, 'files_upload/produit/unnamed (1).jpg', 6),
(15, 'files_upload/produit/unnamed (1).jpg', 6),
(16, 'files_upload/produit/istockphoto-1152767923-612x612.jpg', 6);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `nom_produit` varchar(100) DEFAULT NULL,
  `description_produit` varchar(255) DEFAULT NULL,
  `prix_ht_produit` int(11) DEFAULT NULL,
  `quantite_produit` int(11) DEFAULT NULL,
  `stock_produit` varchar(50) DEFAULT NULL,
  `etat_produit` int(1) DEFAULT NULL,
  `id_categorie` int(11) DEFAULT NULL,
  `id_sous_categorie` int(11) DEFAULT NULL,
  `id_boutique` int(11) DEFAULT NULL,
  `caracteristique_produit` text,
  `image_produit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `nom_produit`, `description_produit`, `prix_ht_produit`, `quantite_produit`, `stock_produit`, `etat_produit`, `id_categorie`, `id_sous_categorie`, `id_boutique`, `caracteristique_produit`, `image_produit`) VALUES
(1, 'Jus de citron bb', 'tytryutuy yuyuyu', 450, 30, 'En stock', 1, 1, 4, 3, 'ghghghjytuyuyu', 'files_upload/produit/1.jpg'),
(2, 'Savon liquide propre', 'C\'est un bon produit propre', 500, 2, 'En rupture', 1, 2, 1, 2, 'tytyuyiuyi yiuojhjk hkhjkj', 'files_upload/produit/2.jpg'),
(3, 'Portable Infinix', 'gghgjhgkkj', 30000, 24, 'En stock', 1, 1, 2, 2, 'hjhgkhjkjk', 'files_upload/produit/3.jpg'),
(4, 'Cahier 100 p', 'fgfdhgfhjhjh gjhkh hkhk', 340, 32, 'En stock', 1, 2, 4, 2, 'rytyt tytuyiy gjhkjhkjkl', 'files_upload/produit/4.jpg'),
(5, 'Lunette Recto', 'tyt tuyiuy jhk', 1330, 45, 'En rupture', 1, 1, 2, 3, 'rtrytuyi gjhkhl', 'files_upload/produit/5.jpg'),
(6, 'Ampoule', 'fghfghgjhk  hjhk hjhk', 430, 27, 'En stock', 1, 3, 5, 1, 'tytuyuyi gjhk yuyiui', 'files_upload/produit/Ampoule.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `id_promotion` int(11) NOT NULL,
  `pourcentage_promotion` int(5) DEFAULT NULL,
  `code_promotion` varchar(100) DEFAULT NULL,
  `date_debut_promotion` date DEFAULT NULL,
  `date_fin_promotion` date DEFAULT NULL,
  `id_produit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id_promotion`, `pourcentage_promotion`, `code_promotion`, `date_debut_promotion`, `date_fin_promotion`, `id_produit`) VALUES
(4, 40, '7i6tx', '2020-12-14', '2020-12-26', 1),
(5, 15, 'dezb4', '2020-12-16', '2020-12-26', 4);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `libelle_role` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sous_categorie`
--

CREATE TABLE `sous_categorie` (
  `id_sous_categorie` int(11) NOT NULL,
  `libelle_sous_categorie` varchar(100) DEFAULT NULL,
  `id_categorie` int(11) DEFAULT NULL,
  `image_sous_categorie` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sous_categorie`
--

INSERT INTO `sous_categorie` (`id_sous_categorie`, `libelle_sous_categorie`, `id_categorie`, `image_sous_categorie`) VALUES
(1, 'Mais', 1, NULL),
(2, 'Riz blanc', 1, NULL),
(3, 'Coctail', 2, NULL),
(4, 'Fanta BB', 2, NULL),
(5, 'Sumsung', 3, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(100) DEFAULT NULL,
  `prenom_user` varchar(100) DEFAULT NULL,
  `email_user` varchar(100) DEFAULT NULL,
  `password_user` varchar(100) DEFAULT NULL,
  `sexe_user` varchar(1) DEFAULT NULL,
  `telephone_user` int(20) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom_user`, `prenom_user`, `email_user`, `password_user`, `sexe_user`, `telephone_user`, `id_role`) VALUES
(1, 'FOFANA', 'Bilali', 'fofb@gmail.com', 'fofb1234', 'm', 90345753, NULL),
(2, 'ALASSANI', 'Mouhamed', 'alassani@gmail.com', '12345', 'f', 45433234, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`id_adresse`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `boutique`
--
ALTER TABLE `boutique`
  ADD PRIMARY KEY (`id_boutique`),
  ADD KEY `id_role` (`id_role`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_produit` (`id_produit`);

--
-- Index pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD PRIMARY KEY (`id_ligne_commande`),
  ADD KEY `id_commande` (`id_commande`);

--
-- Index pour la table `photo_produit`
--
ALTER TABLE `photo_produit`
  ADD PRIMARY KEY (`id_photo_produit`),
  ADD KEY `id_produit` (`id_produit`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `id_sous_categorie` (`id_sous_categorie`),
  ADD KEY `id_boutique` (`id_boutique`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id_promotion`),
  ADD KEY `id_produit` (`id_produit`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Index pour la table `sous_categorie`
--
ALTER TABLE `sous_categorie`
  ADD PRIMARY KEY (`id_sous_categorie`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `id_adresse` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `boutique`
--
ALTER TABLE `boutique`
  MODIFY `id_boutique` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  MODIFY `id_ligne_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `photo_produit`
--
ALTER TABLE `photo_produit`
  MODIFY `id_photo_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id_promotion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sous_categorie`
--
ALTER TABLE `sous_categorie`
  MODIFY `id_sous_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD CONSTRAINT `adresse_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `boutique`
--
ALTER TABLE `boutique`
  ADD CONSTRAINT `boutique_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `ligne_commande_ibfk_1` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `photo_produit`
--
ALTER TABLE `photo_produit`
  ADD CONSTRAINT `photo_produit_ibfk_1` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_sous_categorie`) REFERENCES `sous_categorie` (`id_sous_categorie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produit_ibfk_2` FOREIGN KEY (`id_boutique`) REFERENCES `boutique` (`id_boutique`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produit_ibfk_3` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `promotion_ibfk_1` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `sous_categorie`
--
ALTER TABLE `sous_categorie`
  ADD CONSTRAINT `sous_categorie_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
