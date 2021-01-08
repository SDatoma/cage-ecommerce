-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 08 jan. 2021 à 12:15
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
  `photos_boutique` varchar(255) DEFAULT NULL,
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

INSERT INTO `boutique` (`id_boutique`, `nom_boutique`, `description_boutique`, `photos_boutique`, `ville_boutique`, `pays_boutique`, `nif_boutique`, `contact_1_boutique`, `contact_2_boutique`, `email_boutique`, `slogan_boutique`, `id_role`, `password_boutique`, `etat_boutique`) VALUES
(1, 'SEBI Inc', 'reteryty tytuuyuy  tuyu', 'files_upload/boutique/1.jpg', 'Sokode', 'togo', 'null', 90454345, 54454342, 'fof@gmail.com', 'rtyytyt', NULL, NULL, 1),
(2, 'Ets bamako', 'dfdgfghfh ghjgj', 'files_upload/boutique/2.jpg', 'Sokode', 'togo', 'null', 90454345, 354565657, 'fofb@gmail.com', 'Vite vite', NULL, NULL, 1),
(3, 'DC 10', 'ghghj ghgjhkhk tyuuyi', 'files_upload/boutique/3.jpg', 'Accra', 'Ghana', 'null', 34566678, 54656788, 'fofbilaii@gmail.com', 'DOUCEMENT', NULL, NULL, 1),
(4, 'FOF B', 'tryyuyu huiuiuiu', 'files_upload/boutique/FOF B.jpg', 'lome', 'togo', 'null', 98787656, 90987873, 'fanaf@gmail.com', 'Document', NULL, NULL, 1);

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
(6, 'Carreaux', 'files_upload/categorie/Carreaux.jpg', 1),
(7, 'FER', 'files_upload/categorie/FER.jpg', 1);

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

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `commentaire_parent` int(11) DEFAULT NULL,
  `resume_commentaire` text CHARACTER SET utf8,
  `date_commentaire` date DEFAULT NULL,
  `id_produit` int(11) DEFAULT NULL,
  `nom_commentaire` varchar(50) DEFAULT NULL,
  `email_commentaire` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `commentaire_parent`, `resume_commentaire`, `date_commentaire`, `id_produit`, `nom_commentaire`, `email_commentaire`) VALUES
(1, 0, 'Salut', '2021-01-05', 1, 'Bilali', 'fof@gmail.com'),
(2, 0, 'dhgggggg\r\nfgggggfffff dfgdfgfggggggggggggg ghfhhgh trytyutuyuy\r\nfgfhghjgjhkj', '2021-01-05', 1, 'SALAM', 'fof@gmail.com'),
(3, 1, NULL, '2021-01-05', 1, 'Samadpo', 'fof@gmail.com'),
(4, 2, NULL, '2021-01-05', 1, 'garcon', 'fof@gmail.com'),
(5, 2, 'fgfgfg', '2021-01-05', 1, 'dfdfd', 'fof@gmail.com'),
(6, 1, 'Bonsoi a tous comment vous allez ?', '2021-01-05', 1, 'ETOO', 'fof@gmail.com'),
(7, 0, 'GFHGHGHGJ GHJHJHK HJHKJLJL RYTUYUYI GHGJHKK', '2021-01-05', 7, 'BILALI', 'fof@gmail.com'),
(8, 0, 'C\'est trop cool cette application ,jaoime ca', '2021-01-05', 7, 'Fridaous', 'fof@gmail.com'),
(9, 7, 'gfgfgfg gfhghvbv gj hgjhjh rtrytyut', '2021-01-05', 7, 'Kadija', 'fof@gmail.com'),
(10, 8, 'ERERT FHGJHJ YIUO HJHKK', '2021-01-05', 7, 'QERTY', 'fof@gmail.com'),
(11, 0, 'Salut a toutes l\'equipe de cage batiment', '2021-01-05', 2, 'Fofana', 'fofanabilali@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `envoi_mail`
--

CREATE TABLE `envoi_mail` (
  `id_envoi_mail` int(11) NOT NULL,
  `titre_mail` varchar(222) DEFAULT NULL,
  `description_mail` text,
  `etat_mail` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

CREATE TABLE `ligne_commande` (
  `id_ligne_commande` int(11) NOT NULL,
  `quantite_commande` int(11) DEFAULT NULL,
  `prix_commande` int(100) DEFAULT NULL,
  `id_commande` int(11) DEFAULT NULL,
  `reference_commande` varchar(255) DEFAULT NULL,
  `id_produit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(16, 'files_upload/produit/istockphoto-1152767923-612x612.jpg', 6),
(17, 'files_upload/produit/8131ed447305eec5f3adc7c0295bf553_L.jpg', 7),
(18, 'files_upload/produit/Elearning-cours-informatique-660x330.jpg', 7),
(19, 'files_upload/produit/8131ed447305eec5f3adc7c0295bf553_L.jpg', 8),
(20, 'files_upload/produit/crédit-photo-www.aeroschool.fr_.jpg', 9),
(21, 'files_upload/produit/contact-us_0.jpg', 9),
(22, 'files_upload/produit/unnamed (1).jpg', 9);

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
  `nouveau_produit` varchar(50) DEFAULT NULL,
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

INSERT INTO `produit` (`id_produit`, `nom_produit`, `description_produit`, `prix_ht_produit`, `quantite_produit`, `stock_produit`, `nouveau_produit`, `etat_produit`, `id_categorie`, `id_sous_categorie`, `id_boutique`, `caracteristique_produit`, `image_produit`) VALUES
(1, 'Jus de citron bb', 'tytryutuy yuyuyu', 450, 30, 'En stock', 'Existant', 1, 1, 4, 3, 'ghghghjytuyuyu', 'files_upload/produit/1.jpg'),
(2, 'Savon liquide propre', 'C\'est un bon produit propre', 500, 2, 'En rupture', 'Nouveau', 1, 2, 1, 2, 'tytyuyiuyi yiuojhjk hkhjkj', 'files_upload/produit/2.jpg'),
(3, 'Portable Infinix', 'gghgjhgkkj', 30000, 24, 'En stock', 'Existant', 1, 1, 2, 2, 'hjhgkhjkjk', 'files_upload/produit/3.jpg'),
(4, 'Cahier 100 p', 'fgfdhgfhjhjh gjhkh hkhk', 340, 32, 'En stock', 'Existant', 1, 2, 4, 2, 'rytyt tytuyiy gjhkjhkjkl', 'files_upload/produit/4.jpg'),
(5, 'Lunette Recto', 'tyt tuyiuy jhk', 1330, 45, 'En rupture', 'Existant', 1, 1, 2, 3, 'rtrytuyi gjhkhl', 'files_upload/produit/5.jpg'),
(6, 'Ampoule', 'fghfghgjhk  hjhk hjhk', 430, 3, 'En stock', 'Existant', 1, 3, 5, 1, 'tytuyuyi gjhk yuyiui', 'files_upload/produit/Ampoule.jpg'),
(7, 'Lait caille', 'dfd fgfhghj jhjk', 1700, 50, 'En stock', 'Existant', 1, 3, 5, 1, 'ghghjtytu hghjj', 'files_upload/produit/Lait caille.jpg'),
(8, 'Fer de 10', 'trtty jhjh', 2400, 28, 'En stock', 'Existant', 1, 7, 6, 4, 'rtrytu hjhjh', 'files_upload/produit/Fer de 10.jpg'),
(9, 'Alcool 95 degre', 'dffdg fgghg gjgj', 2800, 6, 'En stock', 'Nouveau', 1, 7, 6, 1, 'fgfhghghj', 'files_upload/produit/Alcool 95 degre.jpg');

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
(5, 15, 'dezb4', '2020-12-16', '2020-12-26', 4),
(6, 10, 'goypy', '2020-12-27', '2020-12-30', 2);

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
-- Structure de la table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `image_slider` varchar(222) DEFAULT NULL,
  `text_slider` text,
  `etat_slider` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `slider`
--

INSERT INTO `slider` (`id_slider`, `image_slider`, `text_slider`, `etat_slider`) VALUES
(1, 'files_upload/slider/1.jpg', 'fgfhhg hjhjhjhj ggfhghgj', 1),
(3, 'files_upload/slider/retrt tyuyi.jpg', 'retrt tyuyi', 1),
(4, 'files_upload/slider/rtryty.jpg', 'rtryty', 1),
(5, 'files_upload/slider/hghghg hjkjk.jpg', 'hghghg hjkjk', 1);

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
(5, 'Sumsung', 3, NULL),
(6, 'Fer lisse', 7, 'files_upload/categorie/Fer lisse.jpg');

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
  `sexe_user` varchar(20) DEFAULT NULL,
  `telephone_user` int(20) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL,
  `ok_newsletter` int(11) DEFAULT NULL,
  `type_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom_user`, `prenom_user`, `email_user`, `password_user`, `sexe_user`, `telephone_user`, `id_role`, `ok_newsletter`, `type_user`) VALUES
(1, 'FOFANA', 'Bilali', 'fofb@gmail.com', 'fofb1234', 'Masculin', 90345753, NULL, NULL, 2),
(2, 'ALASSANI', 'Mouhamed', 'alassani@gmail.com', '12345', 'Feminin', 45433234, NULL, NULL, 2),
(3, 'Fofana', 'bilali', 'fofanabilali@gmail.com', 'fofb1234', 'M', 90565453, NULL, 1, 2);

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
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`);

--
-- Index pour la table `envoi_mail`
--
ALTER TABLE `envoi_mail`
  ADD PRIMARY KEY (`id_envoi_mail`);

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
-- Index pour la table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

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
  MODIFY `id_boutique` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `envoi_mail`
--
ALTER TABLE `envoi_mail`
  MODIFY `id_envoi_mail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  MODIFY `id_ligne_commande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `photo_produit`
--
ALTER TABLE `photo_produit`
  MODIFY `id_photo_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id_promotion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `sous_categorie`
--
ALTER TABLE `sous_categorie`
  MODIFY `id_sous_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
