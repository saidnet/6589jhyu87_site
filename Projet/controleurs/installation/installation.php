<?php

mysql_connect($bd_host,$bd_login,$bd_mdp);
$req ="DROP DATABASE IF EXISTS ".$bd_name.";";	
mysql_query($req) or die(mysql_error());

$req ="CREATE DATABASE IF NOT EXISTS ".$bd_name.";";  
mysql_query($req) or die(mysql_error());

$req ="USE ".$bd_name.";";
mysql_query($req) or die(mysql_error());

// Structure de la table `alerte`

$req ="
CREATE TABLE IF NOT EXISTS `alerte` (
  `id_alerte` int(11) NOT NULL AUTO_INCREMENT,
  `date_heure` date NOT NULL,
  `position` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `id_lanceur` int(11) NOT NULL,
  `id_repondeur` int(11) NOT NULL,
  `id_etat_alerte` int(11) NOT NULL,
  `id_nature_lanceur` int(11) NOT NULL,
  `id_attachement` int(11) NOT NULL,
  `id_type_alerte` int(11) NOT NULL,
  PRIMARY KEY (`id_alerte`),
  KEY `id_lanceur` (`id_lanceur`,`id_repondeur`,`id_etat_alerte`,`id_nature_lanceur`,`id_attachement`,`id_type_alerte`),
  KEY `id_repondeur` (`id_repondeur`,`id_etat_alerte`,`id_nature_lanceur`,`id_attachement`,`id_type_alerte`),
  KEY `id_etat_alerte` (`id_etat_alerte`),
  KEY `id_nature_lanceur` (`id_nature_lanceur`),
  KEY `id_attachement` (`id_attachement`),
  KEY `id_type_alerte` (`id_type_alerte`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
";
mysql_query($req) or die(mysql_error());

// --------------------------------------------------------
//Structure de la table `ami`

$req ="
";
mysql_query($req) or die(mysql_error());

CREATE TABLE IF NOT EXISTS `ami` (
  `id_ami` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `num_telef` varchar(10) NOT NULL,
  PRIMARY KEY (`id_ami`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

// --------------------------------------------------------

// Structure de la table `attachement`
$req ="
";
mysql_query($req) or die(mysql_error());

CREATE TABLE IF NOT EXISTS `attachement` (
  `id_attachement` int(11) NOT NULL AUTO_INCREMENT,
  `lien` varchar(50) NOT NULL,
  PRIMARY KEY (`id_attachement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

// --------------------------------------------------------

// Structure de la table `comissariat`
$req ="
";
mysql_query($req) or die(mysql_error());

CREATE TABLE IF NOT EXISTS `comissariat` (
  `id_comissariat` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `position` varchar(50) NOT NULL,
  PRIMARY KEY (`id_comissariat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

// --------------------------------------------------------

// Structure de la table `etat_alerte`
$req ="
";
mysql_query($req) or die(mysql_error());

CREATE TABLE IF NOT EXISTS `etat_alerte` (
  `id_etat_alerte` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) NOT NULL,
  PRIMARY KEY (`id_etat_alerte`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

// --------------------------------------------------------
// Structure de la table `etat_user`
$req ="
";
mysql_query($req) or die(mysql_error());

CREATE TABLE IF NOT EXISTS `etat_user` (
  `id_etat_user` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(30) NOT NULL,
  PRIMARY KEY (`id_etat_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

// --------------------------------------------------------
 Structure de la table `hopital`

$req ="
";
mysql_query($req) or die(mysql_error());


CREATE TABLE IF NOT EXISTS `hopital` (
  `id_hopital` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  PRIMARY KEY (`id_hopital`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `nature_lanceur`
--

CREATE TABLE IF NOT EXISTS `nature_lanceur` (
  `id_nature_lanceur` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) NOT NULL,
  PRIMARY KEY (`id_nature_lanceur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(30) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `type_alerte`
--

CREATE TABLE IF NOT EXISTS `type_alerte` (
  `id_type_alerte` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) NOT NULL,
  PRIMARY KEY (`id_type_alerte`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `type_user`
--

CREATE TABLE IF NOT EXISTS `type_user` (
  `id_type_user` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) NOT NULL,
  PRIMARY KEY (`id_type_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `cin` varchar(10) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `num_telef` varchar(10) NOT NULL,
  `id_etat_user` int(11) NOT NULL,
  `id_type_user` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_etat_user` (`id_etat_user`),
  KEY `id_type_user` (`id_type_user`),
  KEY `id_role` (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user_alerte`
--

CREATE TABLE IF NOT EXISTS `user_alerte` (
  `id_alerte` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_alerte`,`id_user`),
  KEY `id_alerte` (`id_alerte`,`id_user`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `alerte`
--
ALTER TABLE `alerte`
  ADD CONSTRAINT `alerte_ibfk_7` FOREIGN KEY (`id_type_alerte`) REFERENCES `type_alerte` (`id_type_alerte`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alerte_ibfk_2` FOREIGN KEY (`id_repondeur`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alerte_ibfk_3` FOREIGN KEY (`id_lanceur`) REFERENCES `user` (`id_etat_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alerte_ibfk_4` FOREIGN KEY (`id_etat_alerte`) REFERENCES `etat_alerte` (`id_etat_alerte`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alerte_ibfk_5` FOREIGN KEY (`id_nature_lanceur`) REFERENCES `nature_lanceur` (`id_nature_lanceur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alerte_ibfk_6` FOREIGN KEY (`id_attachement`) REFERENCES `attachement` (`id_attachement`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_etat_user`) REFERENCES `etat_user` (`id_etat_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_type_user`) REFERENCES `type_user` (`id_type_user`) ON DELETE CASCADE ON UPDATE CASCADE;

//Contraintes pour la table `user_alerte`

ALTER TABLE `user_alerte`
  ADD CONSTRAINT `user_alerte_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_alerte_ibfk_1` FOREIGN KEY (`id_alerte`) REFERENCES `alerte` (`id_alerte`) ON DELETE CASCADE ON UPDATE CASCADE;



$req ="CREATE TABLE IF NOT EXISTS `accessoire` (
  `Id_accessoire` int(11) NOT NULL AUTO_INCREMENT,
  `accessoire` varchar(40) NOT NULL,
  PRIMARY KEY (`Id_accessoire`),
  UNIQUE KEY `accessoire` (`accessoire`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;
";
mysql_query($req) or die(mysql_error());

$req ="INSERT INTO `accessoire` (`Id_accessoire`, `accessoire`) VALUES
(10, 'celecon'),
(22, 'claiment'),
(1, 'dormant'),
(2, 'equerre'),
(7, 'Glaissaire'),
(20, 'Jointparclouse'),
(8, 'Joint_Brosse'),
(9, 'Joint_vitrage'),
(15, 'Lame'),
(16, 'larbe'),
(18, 'mecanisme'),
(12, 'Mnt_central'),
(6, 'Mnt_Laterale'),
(19, 'moteur'),
(21, 'Parclouse'),
(17, 'rail'),
(4, 'roulette'),
(13, 'T'),
(3, 'traverse'),
(5, 'union'),
(11, 'Verrou'),
(23, 'Paumelle'),
(24, 'Serrure'),
(14, 'Z');";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `article_com` (
  `Id_article_com` int(11) NOT NULL AUTO_INCREMENT,
  `qte` int(6) NOT NULL,
  `designation` int(200) NOT NULL,
  `Id_bon_commande` int(11) NOT NULL,
  PRIMARY KEY (`Id_article_com`),
  KEY `Id_bon_commande` (`Id_bon_commande`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `article_devis` (
  `Id_article` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(800) CHARACTER SET latin1 DEFAULT NULL,
  `largeur` decimal(8,2) DEFAULT NULL,
  `haut` decimal(8,2) DEFAULT NULL,
  `qte` int(11) DEFAULT NULL,
  `pu` decimal(8,2) DEFAULT NULL,
  `Id_croquet` int(11) NOT NULL,
  `Id_doc` int(11) NOT NULL,
  PRIMARY KEY (`Id_article`),
  KEY `Id_doc` (`Id_doc`),
  KEY `Id_croquet` (`Id_croquet`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;
;";
mysql_query($req) or die(mysql_error());

$req ="INSERT INTO `article_devis` (`Id_article`, `designation`, `largeur`, `haut`, `qte`, `pu`, `Id_croquet`, `Id_doc`) VALUES
(36, 'Chasis colis ELEGANCE 60 laque blanc verre claire epaisseur 2 claire nombre V/T 70', '1.00', '1.00', 1, '4129.88', 1, 19),
(37, 'Chasis colis ELEGANCE 60 laque blanc verre claire epaisseur 2 claire nombre V/T 2', '1.00', '1.00', 1, '699.66', 1, 19),
(38, 'Chasis colis ELEGANCE 70 laque blanc verre claire epaisseur 6 claire nombre V/T 2', '1.00', '1.00', 1, '2568.00', 1, 19),
(39, 'Chasis colis ELEGANCE 70 laque blanc verre claire epaisseur 6 claire nombre V/T 70', '1.00', '1.00', 1, '40277.78', 1, 19),
(40, 'Chasis colis ELEGANCE 60 laque blanc verre claire epaisseur 2 claire nombre V/T 2', '1.00', '1.00', 3, '699.66', 6, 20),
(41, 'Chasis colis ELEGANCE 60 laque blanc verre claire epaisseur 2 claire nombre V/T 2', '1.00', '1.00', 1, '699.66', 16, 20),
(42, 'Chasis colis ELEGANCE 60 laque blanc verre claire epaisseur 2 claire nombre V/T 2', '1.00', '1.00', 2, '700.00', 5, 20),
(44, 'Chasis colis ELEGANCE 60 laque blanc verre claire epaisseur 2 claire nombre V/T 2', '1.00', '1.00', 3, '699.66', 13, 20),
(49, 'Chasis colis ELEGANCE 70 laque blanc verre claire epaisseur 6 claire nombre V/T 2', '1.00', '1.00', 1, '2568.00', 1, 20),
(50, 'Chasis colis ELEGANCE 70 laque blanc verre claire epaisseur 6 claire nombre V/T 2', '12.00', '12.00', 1, '46817.33', 1, 21),
(51, 'Chasis OB ELEGANCE 70 laque blanc verre claire epaisseur 6 claire nombre V/T 2', '1.00', '1.00', 3, '2568.00', 15, 21);
";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `article_vue` (
`Id_article` int(11)
,`designation` varchar(800)
,`largeur` decimal(8,2)
,`haut` decimal(8,2)
,`qte` int(11)
,`pu` decimal(8,2)
,`Id_croquet` int(11)
,`Id_doc` int(11)
,`montant` decimal(18,2)
);";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `ass_prod_prof` (
  `Id_ass_prod_profil` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Produit` int(11) NOT NULL,
  `Id_Profil` int(11) NOT NULL,
  PRIMARY KEY (`Id_ass_prod_profil`),
  UNIQUE KEY `Id_Produit_2` (`Id_Produit`,`Id_Profil`),
  KEY `Id_Produit` (`Id_Produit`),
  KEY `Id_Profil` (`Id_Profil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `ass_prof_acc_coul` (
  `Id_ass_prof_acc_coul` int(11) NOT NULL AUTO_INCREMENT,
  `Id_accessoire` int(11) NOT NULL,
  `Id_profil` int(11) NOT NULL,
  `Id_couleur` int(11) NOT NULL,
  `prix` decimal(8,2) NOT NULL,
  PRIMARY KEY (`Id_ass_prof_acc_coul`),
  UNIQUE KEY `Id_profil_2` (`Id_profil`,`Id_couleur`,`Id_accessoire`),
  KEY `Id_Profil` (`Id_profil`),
  KEY `Id_couleur` (`Id_couleur`),
  KEY `Id_accessoire` (`Id_accessoire`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=395 ;";
mysql_query($req) or die(mysql_error());

$req ="INSERT INTO `ass_prof_acc_coul` (`Id_ass_prof_acc_coul`, `Id_accessoire`, `Id_profil`, `Id_couleur`, `prix`) VALUES
(1, 1, 1, 1, '400.00'),
(2, 2, 1, 1, '12.00'),
(3, 3, 1, 1, '600.00'),
(21, 4, 1, 1, '12.00'),
(22, 5, 1, 1, '0.00'),
(23, 6, 1, 1, '480.00'),
(24, 7, 1, 1, '60.00'),
(25, 8, 1, 1, '3.00'),
(26, 9, 1, 1, '3.00'),
(27, 10, 1, 1, '20.00'),
(28, 11, 1, 1, '0.00'),
(29, 12, 1, 1, '480.00'),
(30, 1, 5, 4, '43.00'),
(31, 1, 2, 1, '692.00'),
(32, 2, 2, 1, '12.00'),
(33, 3, 2, 1, '384.00'),
(34, 4, 2, 1, '40.00'),
(35, 5, 2, 1, '12.00'),
(36, 6, 2, 1, '600.00'),
(37, 7, 2, 1, '60.00'),
(38, 8, 2, 1, '3.00'),
(39, 9, 2, 1, '20.00'),
(40, 10, 2, 1, '20.00'),
(41, 11, 2, 1, '160.00'),
(42, 12, 2, 1, '704.00'),
(43, 13, 2, 1, '0.00'),
(44, 14, 2, 1, '0.00'),
(45, 15, 2, 1, '200.00'),
(46, 22, 1, 1, '0.00'),
(47, 15, 1, 1, '200.00'),
(48, 18, 1, 1, '280.00'),
(49, 19, 1, 1, '860.00'),
(50, 10, 3, 1, '280.00'),
(51, 1, 3, 1, '350.00'),
(52, 2, 3, 1, '12.00'),
(53, 7, 3, 1, '25.00'),
(54, 20, 3, 1, '0.00'),
(55, 15, 3, 1, '200.00'),
(56, 16, 3, 1, '25.00'),
(57, 18, 3, 1, '280.00'),
(58, 12, 3, 1, '198.00'),
(59, 6, 3, 1, '195.00'),
(60, 19, 3, 1, '600.00'),
(61, 17, 3, 1, '350.00'),
(62, 3, 3, 1, '190.00'),
(63, 10, 4, 1, '20.00'),
(64, 1, 4, 1, '860.00'),
(65, 9, 4, 1, '18.00'),
(66, 6, 4, 1, '600.00'),
(67, 12, 4, 1, '600.00'),
(68, 21, 4, 1, '70.00'),
(69, 3, 4, 1, '400.00'),
(70, 10, 5, 1, '600.00'),
(71, 1, 5, 1, '400.00'),
(72, 18, 5, 1, '0.00'),
(73, 12, 5, 1, '340.00'),
(74, 6, 5, 1, '340.00'),
(75, 13, 5, 1, '400.00'),
(76, 14, 5, 1, '400.00'),
(77, 10, 9, 1, '300.00'),
(78, 1, 9, 1, '194.00'),
(79, 13, 9, 1, '156.00'),
(80, 14, 9, 1, '248.00'),
(81, 10, 10, 1, '200.00'),
(82, 1, 10, 1, '180.00'),
(83, 21, 10, 1, '70.00'),
(84, 13, 10, 1, '210.00'),
(85, 14, 10, 1, '0.00'),
(86, 21, 15, 1, '0.00'),
(87, 21, 9, 1, '80.00'),
(88, 12, 10, 1, '210.00'),
(89, 6, 10, 1, '210.00'),
(90, 3, 10, 1, '210.00'),
(91, 10, 11, 1, '600.00'),
(92, 1, 11, 1, '370.00'),
(93, 12, 11, 1, '300.00'),
(94, 6, 11, 1, '300.00'),
(95, 21, 11, 1, '0.00'),
(96, 3, 11, 1, '280.00'),
(97, 10, 12, 1, '12.00'),
(98, 1, 12, 1, '176.00'),
(99, 21, 12, 1, '80.00'),
(100, 13, 12, 1, '200.00'),
(101, 14, 12, 1, '284.00'),
(102, 15, 13, 1, '220.00'),
(103, 16, 13, 1, '25.00'),
(104, 18, 13, 1, '280.00'),
(105, 19, 13, 1, '864.00'),
(106, 17, 13, 1, '30.00'),
(107, 15, 14, 1, '340.00'),
(108, 16, 14, 1, '30.00'),
(109, 18, 14, 1, '280.00'),
(110, 19, 14, 1, '864.00'),
(111, 17, 14, 1, '30.00'),
(112, 15, 15, 1, '500.00'),
(113, 16, 15, 1, '100.00'),
(114, 18, 15, 1, '0.00'),
(115, 19, 15, 1, '2400.00'),
(116, 17, 15, 1, '100.00'),
(117, 10, 1, 27, '20.00'),
(118, 1, 1, 27, '960.00'),
(119, 12, 1, 27, '960.00'),
(120, 6, 1, 27, '664.00'),
(121, 21, 1, 27, '60.00'),
(122, 3, 1, 27, '400.00'),
(123, 10, 2, 27, '20.00'),
(124, 1, 2, 27, '960.00'),
(125, 12, 2, 27, '960.00'),
(126, 6, 2, 27, '664.00'),
(127, 13, 2, 27, '0.00'),
(128, 10, 9, 27, '400.00'),
(129, 1, 9, 27, '400.00'),
(130, 12, 9, 27, '0.00'),
(131, 6, 9, 27, '0.00'),
(132, 21, 9, 27, '80.00'),
(133, 13, 9, 27, '380.00'),
(134, 3, 9, 27, '0.00'),
(135, 14, 9, 27, '400.00'),
(136, 10, 1, 2, '20.00'),
(137, 1, 1, 2, '500.00'),
(138, 2, 1, 2, '12.00'),
(139, 8, 1, 2, '3.00'),
(140, 9, 1, 2, '18.00'),
(141, 15, 1, 2, '200.00'),
(142, 16, 1, 2, '30.00'),
(143, 18, 1, 2, '280.00'),
(144, 12, 1, 2, '450.00'),
(145, 6, 1, 2, '450.00'),
(146, 19, 1, 2, '864.00'),
(147, 21, 1, 2, '80.00'),
(148, 17, 1, 2, '30.00'),
(149, 4, 1, 2, '40.00'),
(150, 3, 1, 2, '400.00'),
(151, 5, 1, 2, '12.00'),
(152, 11, 1, 2, '80.00'),
(153, 20, 1, 1, '3.00'),
(154, 16, 1, 1, '30.00'),
(155, 21, 1, 1, '80.00'),
(156, 17, 1, 1, '30.00'),
(157, 13, 1, 1, '0.00'),
(158, 14, 1, 1, '0.00'),
(159, 22, 1, 2, '60.00'),
(160, 7, 1, 2, '60.00'),
(161, 20, 1, 2, '3.00'),
(162, 13, 1, 2, '0.00'),
(163, 14, 1, 2, '0.00'),
(164, 10, 1, 3, '20.00'),
(165, 22, 1, 3, '60.00'),
(166, 1, 1, 3, '550.00'),
(167, 2, 1, 3, '12.00'),
(168, 7, 1, 3, '60.00'),
(169, 20, 1, 3, '3.00'),
(170, 8, 1, 3, '3.00'),
(171, 9, 1, 3, '18.00'),
(172, 15, 1, 3, '200.00'),
(173, 16, 1, 3, '30.00'),
(174, 18, 1, 3, '280.00'),
(175, 12, 1, 3, '450.00'),
(176, 6, 1, 3, '450.00'),
(177, 19, 1, 3, '864.00'),
(178, 21, 1, 3, '80.00'),
(179, 17, 1, 3, '30.00'),
(180, 4, 1, 3, '40.00'),
(181, 13, 1, 3, '0.00'),
(182, 3, 1, 3, '350.00'),
(183, 5, 1, 3, '12.00'),
(184, 11, 1, 3, '80.00'),
(185, 14, 1, 3, '0.00'),
(186, 10, 1, 4, '20.00'),
(187, 22, 1, 4, '60.00'),
(188, 1, 1, 4, '450.00'),
(189, 2, 1, 4, '12.00'),
(190, 7, 1, 4, '60.00'),
(191, 20, 1, 4, '3.00'),
(192, 8, 1, 4, '3.00'),
(193, 9, 1, 4, '18.00'),
(194, 15, 1, 4, '200.00'),
(195, 16, 1, 4, '30.00'),
(196, 18, 1, 4, '280.00'),
(197, 12, 1, 4, '400.00'),
(198, 6, 1, 4, '400.00'),
(199, 19, 1, 4, '864.00'),
(200, 21, 1, 4, '80.00'),
(201, 17, 1, 4, '30.00'),
(202, 4, 1, 4, '40.00'),
(203, 13, 1, 4, '0.00'),
(204, 3, 1, 4, '0.00'),
(205, 5, 1, 4, '12.00'),
(206, 11, 1, 4, '80.00'),
(207, 14, 1, 4, '0.00'),
(208, 22, 1, 27, '160.00'),
(209, 2, 1, 27, '12.00'),
(210, 7, 1, 27, '60.00'),
(211, 20, 1, 27, '3.00'),
(212, 8, 1, 27, '3.00'),
(213, 9, 1, 27, '20.00'),
(214, 15, 1, 27, '200.00'),
(215, 16, 1, 27, '30.00'),
(216, 18, 1, 27, '280.00'),
(217, 19, 1, 27, '691.00'),
(218, 17, 1, 27, '60.00'),
(219, 4, 1, 27, '40.00'),
(220, 13, 1, 27, '0.00'),
(221, 5, 1, 27, '12.00'),
(222, 11, 1, 27, '160.00'),
(223, 14, 1, 27, '0.00'),
(224, 22, 2, 27, '160.00'),
(225, 2, 2, 27, '12.00'),
(226, 7, 2, 27, '60.00'),
(227, 20, 2, 27, '3.00'),
(228, 8, 2, 27, '3.00'),
(229, 9, 2, 27, '20.00'),
(230, 15, 2, 27, '200.00'),
(231, 16, 2, 27, '30.00'),
(232, 18, 2, 27, '280.00'),
(233, 19, 2, 27, '864.00'),
(234, 21, 2, 27, '80.00'),
(235, 17, 2, 27, '30.00'),
(236, 4, 2, 27, '40.00'),
(237, 3, 2, 27, '560.00'),
(238, 5, 2, 27, '12.00'),
(239, 11, 2, 27, '160.00'),
(240, 14, 2, 27, '0.00'),
(241, 10, 2, 4, '20.00'),
(242, 22, 2, 4, '60.00'),
(243, 1, 2, 4, '900.00'),
(244, 2, 2, 4, '12.00'),
(245, 7, 2, 4, '60.00'),
(246, 20, 2, 4, '3.00'),
(247, 8, 2, 4, '3.00'),
(248, 9, 2, 4, '20.00'),
(249, 15, 2, 4, '220.00'),
(250, 16, 2, 4, '30.00'),
(251, 18, 2, 4, '280.00'),
(252, 12, 2, 4, '800.00'),
(253, 6, 2, 4, '800.00'),
(254, 19, 2, 4, '864.00'),
(255, 21, 2, 4, '80.00'),
(256, 17, 2, 4, '30.00'),
(257, 4, 2, 4, '40.00'),
(258, 13, 2, 4, '0.00'),
(259, 3, 2, 4, '600.00'),
(260, 5, 2, 4, '12.00'),
(261, 11, 2, 4, '80.00'),
(262, 14, 2, 4, '0.00'),
(263, 10, 2, 3, '20.00'),
(264, 22, 2, 3, '160.00'),
(265, 1, 2, 3, '692.00'),
(266, 2, 2, 3, '12.00'),
(267, 7, 2, 3, '60.00'),
(268, 20, 2, 3, '3.00'),
(269, 8, 2, 3, '3.00'),
(270, 9, 2, 3, '20.00'),
(271, 15, 2, 3, '200.00'),
(272, 16, 2, 3, '30.00'),
(273, 18, 2, 3, '280.00'),
(274, 12, 2, 3, '480.00'),
(275, 6, 2, 3, '560.00'),
(276, 19, 2, 3, '691.00'),
(277, 21, 2, 3, '80.00'),
(278, 17, 2, 3, '30.00'),
(279, 4, 2, 3, '40.00'),
(280, 13, 2, 3, '0.00'),
(281, 3, 2, 3, '384.00'),
(282, 5, 2, 3, '12.00'),
(283, 11, 2, 3, '160.00'),
(284, 14, 2, 3, '0.00'),
(285, 10, 2, 2, '20.00'),
(286, 22, 2, 2, '160.00'),
(287, 1, 2, 2, '748.00'),
(288, 2, 2, 2, '12.00'),
(289, 22, 4, 1, '60.00'),
(290, 2, 4, 1, '12.00'),
(291, 7, 4, 1, '60.00'),
(292, 20, 4, 1, '3.00'),
(293, 8, 4, 1, '3.00'),
(294, 15, 4, 1, '200.00'),
(295, 16, 4, 1, '30.00'),
(296, 18, 4, 1, '280.00'),
(297, 19, 4, 1, '884.00'),
(298, 17, 4, 1, '30.00'),
(299, 4, 4, 1, '40.00'),
(300, 13, 4, 1, '0.00'),
(301, 5, 4, 1, '12.00'),
(302, 11, 4, 1, '80.00'),
(303, 14, 4, 1, '0.00'),
(304, 22, 2, 1, '160.00'),
(305, 20, 2, 1, '3.00'),
(306, 16, 2, 1, '30.00'),
(307, 18, 2, 1, '280.00'),
(308, 19, 2, 1, '691.00'),
(309, 21, 2, 1, '80.00'),
(310, 17, 2, 1, '30.00'),
(311, 20, 2, 2, '3.00'),
(312, 8, 2, 2, '3.00'),
(313, 9, 2, 2, '20.00'),
(314, 15, 2, 2, '200.00'),
(315, 16, 2, 2, '30.00'),
(316, 18, 2, 2, '280.00'),
(317, 12, 2, 2, '728.00'),
(318, 6, 2, 2, '520.00'),
(319, 7, 2, 2, '60.00'),
(320, 19, 2, 2, '691.00'),
(321, 21, 2, 2, '80.00'),
(322, 17, 2, 2, '30.00'),
(323, 4, 2, 2, '40.00'),
(324, 13, 2, 2, '0.00'),
(325, 3, 2, 2, '200.00'),
(326, 5, 2, 2, '12.00'),
(327, 11, 2, 2, '160.00'),
(328, 14, 2, 2, '0.00'),
(329, 22, 12, 1, '160.00'),
(330, 2, 12, 1, '12.00'),
(331, 7, 12, 1, '60.00'),
(332, 20, 12, 1, '3.00'),
(333, 8, 12, 1, '3.00'),
(334, 9, 12, 1, '20.00'),
(335, 15, 12, 1, '200.00'),
(336, 16, 12, 1, '30.00'),
(337, 18, 12, 1, '280.00'),
(338, 12, 12, 1, '200.00'),
(339, 6, 12, 1, '200.00'),
(340, 19, 12, 1, '691.00'),
(341, 17, 12, 1, '40.00'),
(342, 4, 12, 1, '40.00'),
(343, 3, 12, 1, '128.00'),
(344, 5, 12, 1, '12.00'),
(345, 11, 12, 1, '160.00'),
(346, 10, 12, 3, '20.00'),
(347, 22, 12, 3, '30.00'),
(348, 1, 12, 3, '208.00'),
(349, 2, 12, 3, '12.00'),
(350, 7, 12, 3, '60.00'),
(351, 20, 12, 3, '3.00'),
(352, 8, 12, 3, '3.00'),
(353, 9, 12, 3, '20.00'),
(354, 15, 12, 3, '200.00'),
(355, 16, 12, 3, '30.00'),
(356, 18, 12, 3, '280.00'),
(357, 12, 12, 3, '224.00'),
(358, 6, 12, 3, '224.00'),
(359, 19, 12, 3, '691.00'),
(360, 21, 12, 3, '80.00'),
(361, 17, 12, 3, '30.00'),
(362, 4, 12, 3, '40.00'),
(363, 13, 12, 3, '224.00'),
(364, 3, 12, 3, '144.00'),
(365, 5, 12, 3, '12.00'),
(366, 11, 12, 3, '160.00'),
(367, 14, 12, 3, '296.00'),
(368, 10, 12, 2, '12.00'),
(369, 22, 12, 2, '160.00'),
(370, 10, 12, 27, '12.00'),
(371, 22, 12, 27, '160.00'),
(372, 1, 12, 27, '320.00'),
(373, 2, 12, 27, '12.00'),
(374, 7, 12, 27, '60.00'),
(375, 20, 12, 27, '3.00'),
(376, 8, 12, 27, '3.00'),
(377, 9, 12, 27, '20.00'),
(378, 15, 12, 27, '200.00'),
(379, 16, 12, 27, '30.00'),
(380, 18, 12, 27, '280.00'),
(381, 12, 12, 27, '296.00'),
(382, 6, 12, 27, '296.00'),
(383, 19, 12, 27, '691.00'),
(384, 21, 12, 27, '80.00'),
(385, 17, 12, 27, '30.00'),
(386, 4, 12, 27, '40.00'),
(387, 13, 12, 27, '344.00'),
(388, 3, 12, 27, '224.00'),
(389, 5, 12, 27, '12.00'),
(390, 11, 12, 27, '160.00'),
(391, 14, 12, 27, '416.00'),
(393, 24, 1, 1, '10.00'),
(394, 23, 1, 1, '16.00'),
(392, 10, 9, 4, '300.00');
";
mysql_query($req) or die(mysql_error());


$req ="CREATE TABLE IF NOT EXISTS `ass_remp_coul_epais` (
  `Id_ass_remp_coul_epais` int(11) NOT NULL AUTO_INCREMENT,
  `prix` decimal(8,2) NOT NULL,
  `Id_remplissage` int(11) NOT NULL,
  `Id_couleur` int(11) NOT NULL,
  `Id_epaisseur` int(11) NOT NULL,
  PRIMARY KEY (`Id_ass_remp_coul_epais`),
  UNIQUE KEY `Id_remplissage_2` (`Id_remplissage`,`Id_couleur`,`Id_epaisseur`),
  KEY `Id_remplissage` (`Id_remplissage`),
  KEY `Id_couleur` (`Id_couleur`),
  KEY `Id_epaisseur` (`Id_epaisseur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;;";
mysql_query($req) or die(mysql_error());

$req ="INSERT INTO `ass_remp_coul_epais` (`Id_ass_remp_coul_epais`, `prix`, `Id_remplissage`, `Id_couleur`, `Id_epaisseur`) VALUES
(4, '2.00', 1, 2, 1),
(5, '1.23', 2, 2, 3),
(6, '11.00', 2, 2, 1),
(7, '4.00', 2, 2, 4),
(8, '70.00', 1, 28, 1),
(9, '80.00', 1, 28, 3),
(10, '135.00', 1, 28, 4),
(11, '200.00', 1, 28, 5),
(12, '0.00', 1, 28, 6),
(13, '0.00', 1, 28, 7),
(14, '500.00', 1, 28, 8),
(15, '700.00', 1, 28, 9),
(16, '500.00', 1, 28, 10),
(17, '700.00', 1, 28, 11),
(18, '1100.00', 1, 28, 12),
(19, '1200.00', 1, 28, 13);";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `bon_commande` (
  `Id_bon_commande` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `N_bon_commande` varchar(10) NOT NULL,
  `Id_fournisseur` int(11) NOT NULL,
  PRIMARY KEY (`Id_bon_commande`),
  KEY `Id_fournisseur` (`Id_fournisseur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `bon_livraison` (
  `id_bon_livraison` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `N_bon` varchar(15) NOT NULL,
  `Id_doc` int(11) NOT NULL,
  PRIMARY KEY (`id_bon_livraison`),
  KEY `Id_doc` (`Id_doc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;
";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `bon_vue` (
`id_bon_livraison` int(11)
,`date` date
,`N_bon` varchar(15)
,`Id_doc` int(11)
,`nom` varchar(20)
,`TTC` decimal(17,8)
);";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `client` (
  `Id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `tel` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_client`),
  UNIQUE KEY `nom` (`nom`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;";
mysql_query($req) or die(mysql_error());

$req ="
INSERT INTO `client` (`Id_client`, `nom`, `adresse`, `tel`) VALUES
(1, 'ACER', 'AGADIR', '0612345678'),
(3, 'IBM', 'CASABLANCA', '0687654321'),
(5, 'KHALID', 'RABAT', '0628346574'),
(8, 'SAID', 'AGADIR NAHDA', '0528234587'),
(9, 'AYMANE', 'TAROUDANTE', '0666342567'),
(11, 'SOPSI', 'AGADIR TALBERJT', '0634568723'),
(13, 'BMCI', 'AGADIR SIDI YOUSSEF', '0623923984');";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `couleur` (
  `Id_couleur` int(11) NOT NULL AUTO_INCREMENT,
  `couleur` varchar(15) NOT NULL,
  `id_type` int(11) NOT NULL,
  PRIMARY KEY (`Id_couleur`),
  KEY `id_type` (`id_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;";
mysql_query($req) or die(mysql_error());

$req ="INSERT INTO `couleur` (`Id_couleur`, `couleur`, `id_type`) VALUES
(1, 'laque blanc', 1),
(2, 'Bronze', 1),
(3, 'naturel', 1),
(4, 'dore', 1),
(27, 'Faux bois', 1),
(28, 'claire', 2),
(29, 'vert', 2),
(30, 'mirroire', 2),
(31, 'fume', 2),
(32, 'gris', 2),
(33, 'coleur', 2),
(34, 'Standard', 1),
(35, 'Standard', 2);";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `croquet` (
  `Id_croquet` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_croquet`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;
";
mysql_query($req) or die(mysql_error());

$req ="INSERT INTO `croquet` (`Id_croquet`, `libelle`) VALUES
(1, 'Chasis colis'),
(2, 'Chasis colis 2'),
(3, 'Chasis ouvrant 3'),
(4, 'Chasis ouvrant'),
(5, 'cloison fixe avec porte'),
(6, 'cloison fixe'),
(7, 'Chasis ouvrant 4'),
(8, 'Chasis colis 3'),
(9, 'Chasis ouvrant 5'),
(10, 'volet roullant manuel'),
(11, 'volet roullant electrique'),
(12, 'soufflet 2'),
(13, 'soufflet'),
(14, 'OB 3'),
(15, 'OB'),
(16, 'OB 2');";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `devis` (
  `Id_devis` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `N_devis` varchar(15) NOT NULL,
  `Id_doc` int(11) NOT NULL,
  PRIMARY KEY (`Id_devis`),
  KEY `Id_doc` (`Id_doc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;
";
mysql_query($req) or die(mysql_error());

$req ="INSERT INTO `devis` (`Id_devis`, `date`, `N_devis`, `Id_doc`) VALUES
(35, '2012-06-10', '1/2012', 19);";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `devis_vue` (
`Id_devis` int(11)
,`date` date
,`N_devis` varchar(15)
,`Id_doc` int(11)
,`nom` varchar(20)
,`TTC` decimal(17,8)
);";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `doc` (
  `Id_doc` int(11) NOT NULL AUTO_INCREMENT,
  `totalHT` decimal(8,2) DEFAULT NULL,
  `TVA` decimal(4,2) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `Id_client` int(11) NOT NULL,
  `validate` int(1) NOT NULL,
  PRIMARY KEY (`Id_doc`),
  KEY `Id_client` (`Id_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;
";
mysql_query($req) or die(mysql_error());

$req ="INSERT INTO `doc` (`Id_doc`, `totalHT`, `TVA`, `date`, `Id_client`, `validate`) VALUES
(19, '47675.32', '30.00', NULL, 11, 1),
(20, '8865.62', '20.00', NULL, 13, 0),
(21, '54521.33', '20.00', NULL, 5, 0);";

mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `doc_vue` (
`Id_doc` int(11)
,`totalHT` decimal(8,2)
,`TVA` decimal(4,2)
,`TTC` decimal(17,8)
,`date` date
,`Id_client` int(11)
,`validate` int(1)
,`nom` varchar(20)
,`TVA_prix` decimal(16,8)
);";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `epaisseur` (
  `Id_epaisseur` int(11) NOT NULL AUTO_INCREMENT,
  `epaisseur` varchar(25) NOT NULL,
  PRIMARY KEY (`Id_epaisseur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;
";
mysql_query($req) or die(mysql_error());


$req ="INSERT INTO `epaisseur` (`Id_epaisseur`, `epaisseur`) VALUES
(1, '2'),
(3, '4'),
(4, '6'),
(5, '8'),
(6, '12'),
(7, '16'),
(8, 'double vitrage 4/4'),
(9, 'double vitrage 6/6'),
(10, 'stadeep 4/4'),
(11, 'stadeep  6/6'),
(12, 'trompe 10'),
(13, 'trompe 12');";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `facture` (
  `Id_facture` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `N_facture` varchar(15) NOT NULL,
  `Id_doc` int(11) NOT NULL,
  PRIMARY KEY (`Id_facture`),
  KEY `Id_doc` (`Id_doc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;
";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `facture_vue` (
`Id_facture` int(11)
,`date` date
,`N_facture` varchar(15)
,`Id_doc` int(11)
,`nom` varchar(20)
,`TTC` decimal(17,8)
);";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `fournisseur` (
  `Id_fournisseur` int(11) NOT NULL AUTO_INCREMENT,
  `ste` varchar(50) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_fournisseur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;
";
mysql_query($req) or die(mysql_error());

$req ="INSERT INTO `fournisseur` (`Id_fournisseur`, `ste`, `ville`, `tel`, `fax`) VALUES
(3, 'MAVAL', 'AGADIR', '0624569856', '0628347582'),
(4, 'ALUMINIUM CASA', 'CASABLANCA', '0614873432', '0627838929'),
(5, 'PVC DAKHLA', 'AGADIR', '0565345445', '0634567246');";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `galerie` (
  `id_galerie` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id_galerie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;
";
mysql_query($req) or die(mysql_error());

$req ="INSERT INTO `galerie` (`id_galerie`, `description`) VALUES
(5, 'Les Fenetres De Lux ... C''est ORALUM'),
(6, 'ORALUM ... C''est Le bon choix pour les Meilleur Projet'),
(7, 'Les Fenetres et les Portes Creer de joie avec ORALUM'),
(8, 'Les Fenetres de La nature. C''est Toujours ORALUM !!!');";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `info_site` (
  `id_info_site` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  `valeur` varchar(800) NOT NULL,
  PRIMARY KEY (`id_info_site`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;
";
mysql_query($req) or die(mysql_error());

$req ="INSERT INTO `info_site` (`id_info_site`, `libelle`, `valeur`) VALUES
(1, 'Titre', 'ORALUM'),
(2, 'Logo', 'mounji'),
(3, 'Copyright', 'Copyright (C) 2012 Oralum'),
(4, 'Adresse', 'BLOC 6 N 119 CITE EL HOUD AGADIR'),
(5, 'Tel', '06-28-32-09-52'),
(6, 'Fax', '06-28-32-09-52'),
(7, 'Email', 'oralum@hotmail.fr'),
(8, 'TVA', '20'),
(9, 'Patente', '067570277'),
(10, 'IF', '06928833'),
(11, 'RC', '13785'),
(12, 'e_devis', 'false');";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `message` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) DEFAULT NULL,
  `ste` varchar(200) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `sujet` varchar(50) DEFAULT NULL,
  `message` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id_message`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;
";
mysql_query($req) or die(mysql_error());

$req ="INSERT INTO `message` (`id_message`, `nom`, `ste`, `email`, `tel`, `sujet`, `message`) VALUES
(1, 'said', '', 'saidnet@live.fr', 'M', '', 'az');";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;
";
mysql_query($req) or die(mysql_error());

$req ="INSERT INTO `news` (`id_news`, `titre`, `description`) VALUES
(14, 'Bienvenue', 'Pour Etre proche de nous client et pour suivre la nouvelle technologie nous avons creer ce site !!'),
(15, 'Avantage de L\'aluminium', 'les Avantages de l\'aluminium !!!'),
(16, 'Contacter Nous', 'Les outils de contact.');";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `produit` (
  `Id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `Produit` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_produit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;
";
mysql_query($req) or die(mysql_error());

$req ="INSERT INTO `produit` (`Id_produit`, `Produit`) VALUES
(1, 'Chasis colis'),
(2, 'Chasis ouvrant'),
(3, 'cloison fixe'),
(4, 'cloison fixe avec porte'),
(5, 'OB'),
(6, 'soufflet'),
(7, 'volet roullant manuel'),
(8, 'volet roullant electrique');";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `profil` (
  `Id_profil` int(11) NOT NULL AUTO_INCREMENT,
  `Profil` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Societe` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`Id_profil`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;
";
mysql_query($req) or die(mysql_error());

$req ="
INSERT INTO `profil` (`Id_profil`, `Profil`, `Societe`) VALUES
(1, 'ELEGANCE 60', ''),
(2, 'ELEGANCE 70', ''),
(3, 'BA 61', ''),
(4, 'MAVAL 75', 'MAVAL'),
(5, 'MAVAL 43 ouvrant', ''),
(6, 'Seplumc 4200 ouvrant', ''),
(7, 'Seplumc 2600 colis', ''),
(8, 'Giralda colis', ''),
(9, 'Serie 800 ouvrant', ''),
(10, 'Triana colis', ''),
(11, 'Targa colis', ''),
(12, 'ELEGANCE OUVRANT', ''),
(13, 'Volet Roulant Lame mousse 4.5', ''),
(14, 'Volet Roulant Lame Bombe', ''),
(15, 'Volet Roulant Lame Extridiy', '');";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `question` (
  `id_ques` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  PRIMARY KEY (`id_ques`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;";
mysql_query($req) or die(mysql_error());

$req ="INSERT INTO `question` (`id_ques`, `question`) VALUES
(1, 'lieu de naissance de votre mère'),
(2, 'personnage historique préféré');";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `remplissage` (
  `Id_remplissage` int(11) NOT NULL AUTO_INCREMENT,
  `remplissage` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_remplissage`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;
";
mysql_query($req) or die(mysql_error());

$req ="INSERT INTO `remplissage` (`Id_remplissage`, `remplissage`) VALUES
(1, 'verre claire'),
(2, 'verre stop sol'),
(3, 'sandwish'),
(5, 'stratÃ© dÃ©core'),
(6, 'lexon'),
(7, 'plexiglasse'),
(8, 'lamme');
";
mysql_query($req) or die(mysql_error());

$req ="
CREATE TABLE IF NOT EXISTS `type_compte` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(25) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;
";
mysql_query($req) or die(mysql_error());

$req ="INSERT INTO `type_compte` (`id_type`, `type_name`) VALUES
(1, 'Administrateur'),
(2, 'Non-Administrateur');";
mysql_query($req) or die(mysql_error());

$req ="
CREATE TABLE IF NOT EXISTS `type_couleur` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `type_couleur` varchar(15) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;";
mysql_query($req) or die(mysql_error());

$req ="INSERT INTO `type_couleur` (`id_type`, `type_couleur`) VALUES
(1, 'Acc'),
(2, 'Rem');";
mysql_query($req) or die(mysql_error());

$req ="CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `pass1` varchar(50) NOT NULL,
  `pass2` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `id_ques` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  PRIMARY KEY (`id_utilisateur`),
  KEY `id_ques` (`id_ques`),
  KEY `id_type` (`id_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;
";

mysql_query($req) or die(mysql_error());

$req ="DROP TABLE IF EXISTS `article_vue`;
";
mysql_query($req) or die(mysql_error());

$req ="CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`127.0.0.1` SQL SECURITY DEFINER VIEW `article_vue` AS select `article_devis`.`Id_article` AS `Id_article`,`article_devis`.`designation` AS `designation`,`article_devis`.`largeur` AS `largeur`,`article_devis`.`haut` AS `haut`,`article_devis`.`qte` AS `qte`,`article_devis`.`pu` AS `pu`,`article_devis`.`Id_croquet` AS `Id_croquet`,`article_devis`.`Id_doc` AS `Id_doc`,(`article_devis`.`pu` * `article_devis`.`qte`) AS `montant` from `article_devis`;
";
mysql_query($req) or die(mysql_error());

$req ="DROP TABLE IF EXISTS `bon_vue`;
";
mysql_query($req) or die(mysql_error());

$req ="CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`127.0.0.1` SQL SECURITY DEFINER VIEW `bon_vue` AS select `d`.`id_bon_livraison` AS `id_bon_livraison`,`d`.`date` AS `date`,`d`.`N_bon` AS `N_bon`,`d`.`Id_doc` AS `Id_doc`,`v`.`nom` AS `nom`,`v`.`TTC` AS `TTC` from (`bon_livraison` `d` join `doc_vue` `v`) where (`d`.`Id_doc` = `v`.`Id_doc`);
";
mysql_query($req) or die(mysql_error());

$req ="DROP TABLE IF EXISTS `devis_vue`;";
mysql_query($req) or die(mysql_error());

$req ="CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`127.0.0.1` SQL SECURITY DEFINER VIEW `devis_vue` AS select `d`.`Id_devis` AS `Id_devis`,`d`.`date` AS `date`,`d`.`N_devis` AS `N_devis`,`d`.`Id_doc` AS `Id_doc`,`v`.`nom` AS `nom`,`v`.`TTC` AS `TTC` from (`devis` `d` join `doc_vue` `v`) where (`d`.`Id_doc` = `v`.`Id_doc`);
";
mysql_query($req) or die(mysql_error());

$req ="DROP TABLE IF EXISTS `doc_vue`;";
mysql_query($req) or die(mysql_error());

$req ="CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`127.0.0.1` SQL SECURITY DEFINER VIEW `doc_vue` AS select `d`.`Id_doc` AS `Id_doc`,`d`.`totalHT` AS `totalHT`,`d`.`TVA` AS `TVA`,(`d`.`totalHT` + ((`d`.`totalHT` * `d`.`TVA`) / 100)) AS `TTC`,`d`.`date` AS `date`,`d`.`Id_client` AS `Id_client`,`d`.`validate` AS `validate`,`c`.`nom` AS `nom`,((`d`.`totalHT` * `d`.`TVA`) / 100) AS `TVA_prix` from (`doc` `d` join `client` `c`) where (`d`.`Id_client` = `c`.`Id_client`);
";
mysql_query($req) or die(mysql_error());

$req ="DROP TABLE IF EXISTS `facture_vue`;
";
mysql_query($req) or die(mysql_error());

$req ="CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`127.0.0.1` SQL SECURITY DEFINER VIEW `facture_vue` AS select `d`.`Id_facture` AS `Id_facture`,`d`.`date` AS `date`,`d`.`N_facture` AS `N_facture`,`d`.`Id_doc` AS `Id_doc`,`v`.`nom` AS `nom`,`v`.`TTC` AS `TTC` from (`facture` `d` join `doc_vue` `v`) where (`d`.`Id_doc` = `v`.`Id_doc`);
";
mysql_query($req) or die(mysql_error());

$req ="ALTER TABLE `article_com`
  ADD CONSTRAINT `article_com_ibfk_1` FOREIGN KEY (`Id_bon_commande`) REFERENCES `bon_commande` (`Id_bon_commande`) ON DELETE NO ACTION ON UPDATE CASCADE;
";
mysql_query($req) or die(mysql_error());

$req ="ALTER TABLE `article_devis`
  ADD CONSTRAINT `article_devis_ibfk_1` FOREIGN KEY (`Id_doc`) REFERENCES `doc` (`Id_doc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `article_devis_ibfk_2` FOREIGN KEY (`Id_croquet`) REFERENCES `croquet` (`Id_croquet`) ON DELETE NO ACTION ON UPDATE CASCADE;
";
mysql_query($req) or die(mysql_error());

$req ="ALTER TABLE `ass_prod_prof`
  ADD CONSTRAINT `ass_prod_prof_ibfk_1` FOREIGN KEY (`Id_Produit`) REFERENCES `produit` (`Id_produit`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `ass_prod_prof_ibfk_2` FOREIGN KEY (`Id_Profil`) REFERENCES `profil` (`Id_profil`) ON DELETE NO ACTION ON UPDATE CASCADE;
";
mysql_query($req) or die(mysql_error());

$req ="ALTER TABLE `ass_prof_acc_coul`
  ADD CONSTRAINT `ass_prof_acc_coul_ibfk_1` FOREIGN KEY (`Id_profil`) REFERENCES `profil` (`Id_profil`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `ass_prof_acc_coul_ibfk_2` FOREIGN KEY (`Id_couleur`) REFERENCES `couleur` (`Id_couleur`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `ass_prof_acc_coul_ibfk_3` FOREIGN KEY (`Id_accessoire`) REFERENCES `accessoire` (`Id_accessoire`) ON DELETE NO ACTION ON UPDATE CASCADE;
";
mysql_query($req) or die(mysql_error());

$req ="ALTER TABLE `ass_remp_coul_epais`
  ADD CONSTRAINT `ass_remp_coul_epais_ibfkf_1` FOREIGN KEY (`Id_remplissage`) REFERENCES `remplissage` (`Id_remplissage`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `ass_remp_coul_epais_ibfkf_2` FOREIGN KEY (`Id_couleur`) REFERENCES `couleur` (`Id_couleur`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `ass_remp_coul_epais_ibfkf_3` FOREIGN KEY (`Id_epaisseur`) REFERENCES `epaisseur` (`Id_epaisseur`) ON DELETE NO ACTION ON UPDATE CASCADE;

";
mysql_query($req) or die(mysql_error());

$req ="ALTER TABLE `bon_commande`
  ADD CONSTRAINT `bon_commande_ibfk_1` FOREIGN KEY (`Id_fournisseur`) REFERENCES `fournisseur` (`Id_fournisseur`) ON DELETE NO ACTION ON UPDATE CASCADE;
";
mysql_query($req) or die(mysql_error());

$req ="ALTER TABLE `bon_livraison`
  ADD CONSTRAINT `bon_livraison_ibfk_1` FOREIGN KEY (`Id_doc`) REFERENCES `doc` (`Id_doc`) ON DELETE CASCADE ON UPDATE CASCADE;
";
mysql_query($req) or die(mysql_error());

$req ="
ALTER TABLE `couleur`
  ADD CONSTRAINT `couleur_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type_couleur` (`id_type`) ON DELETE NO ACTION ON UPDATE CASCADE;

";
mysql_query($req) or die(mysql_error());

$req ="ALTER TABLE `devis`
  ADD CONSTRAINT `devis111_ibfk_1` FOREIGN KEY (`Id_doc`) REFERENCES `doc` (`Id_doc`) ON DELETE CASCADE ON UPDATE CASCADE;
";
mysql_query($req) or die(mysql_error());

$req ="ALTER TABLE `doc`
  ADD CONSTRAINT `devis_ibfk_1` FOREIGN KEY (`Id_client`) REFERENCES `client` (`Id_client`) ON DELETE NO ACTION ON UPDATE CASCADE;
";
mysql_query($req) or die(mysql_error());

$req ="ALTER TABLE `facture`
  ADD CONSTRAINT `facture_ibfk_1` FOREIGN KEY (`Id_doc`) REFERENCES `doc` (`Id_doc`) ON DELETE CASCADE ON UPDATE CASCADE;
";
mysql_query($req) or die(mysql_error());

$req ="ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_2` FOREIGN KEY (`id_type`) REFERENCES `type_compte` (`id_type`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`id_ques`) REFERENCES `question` (`id_ques`) ON DELETE NO ACTION ON UPDATE CASCADE;
";
mysql_query($req) or die(mysql_error());
?>