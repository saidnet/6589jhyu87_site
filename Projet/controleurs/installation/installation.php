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
CREATE TABLE IF NOT EXISTS `ami` (
  `id_ami` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `num_telef` varchar(10) NOT NULL,
  PRIMARY KEY (`id_ami`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
";
mysql_query($req) or die(mysql_error());

// --------------------------------------------------------

// Structure de la table `attachement`
$req ="
CREATE TABLE IF NOT EXISTS `attachement` (
  `id_attachement` int(11) NOT NULL AUTO_INCREMENT,
  `lien` varchar(50) NOT NULL,
  PRIMARY KEY (`id_attachement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

";
mysql_query($req) or die(mysql_error());

// --------------------------------------------------------

// Structure de la table `comissariat`
$req ="
CREATE TABLE IF NOT EXISTS `comissariat` (
  `id_comissariat` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `position` varchar(50) NOT NULL,
  PRIMARY KEY (`id_comissariat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

";
mysql_query($req) or die(mysql_error());


// --------------------------------------------------------

// Structure de la table `etat_alerte`
$req ="
CREATE TABLE IF NOT EXISTS `etat_alerte` (
  `id_etat_alerte` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) NOT NULL,
  PRIMARY KEY (`id_etat_alerte`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;
";
mysql_query($req) or die(mysql_error());

// Contenu de la table `etat_alerte`
$req ="
INSERT INTO `etat_alerte` (`id_etat_alerte`, `libelle`) VALUES
(1, 'En attente'),
(2, 'En cours'),
(3, 'Résolue'),
(4, 'Annullée'),
(5, 'Non-résolue');
";
mysql_query($req) or die(mysql_error());

// --------------------------------------------------------
// Structure de la table `etat_user`
$req ="
CREATE TABLE IF NOT EXISTS `etat_user` (
  `id_etat_user` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(30) NOT NULL,
  PRIMARY KEY (`id_etat_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;
";
mysql_query($req) or die(mysql_error());


// Contenu de la table `etat_user`
$req ="
INSERT INTO `etat_user` (`id_etat_user`, `libelle`) VALUES
(1, 'Actif'),
(2, 'Bloqué');
";
mysql_query($req) or die(mysql_error());

// --------------------------------------------------------
// Structure de la table `hopital`

$req ="
CREATE TABLE IF NOT EXISTS `hopital` (
  `id_hopital` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  PRIMARY KEY (`id_hopital`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
";
mysql_query($req) or die(mysql_error());




// --------------------------------------------------------
// Structure de la table `nature_lanceur`
$req ="
CREATE TABLE IF NOT EXISTS `nature_lanceur` (
  `id_nature_lanceur` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) NOT NULL,
  PRIMARY KEY (`id_nature_lanceur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
";
mysql_query($req) or die(mysql_error());


// --------------------------------------------------------
// Structure de la table `role`
$req ="
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(30) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;
";
mysql_query($req) or die(mysql_error());

//---------------------------------------------------------
// Contenu de la table `role`
$req ="

INSERT INTO `role` (`id_role`, `libelle`) VALUES
(1, 'Public'),
(2, 'Admin');
";
mysql_query($req) or die(mysql_error());

// --------------------------------------------------------
// Structure de la table `type_alerte`
$req ="
CREATE TABLE IF NOT EXISTS `type_alerte` (
  `id_type_alerte` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) NOT NULL,
  PRIMARY KEY (`id_type_alerte`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
";
mysql_query($req) or die(mysql_error());


// --------------------------------------------------------

//Structure de la table `type_user`
$req ="
CREATE TABLE IF NOT EXISTS `type_user` (
  `id_type_user` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) NOT NULL,
  PRIMARY KEY (`id_type_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;
";
mysql_query($req) or die(mysql_error());

//----------------------------------------------------------
// Contenu de la table `type_user`
$req ="
INSERT INTO `type_user` (`id_type_user`, `libelle`) VALUES
(1, 'Administrateur'),
(2, 'Utilisateur'),
(3, 'Policier'),
(4, 'Pompier');
";
mysql_query($req) or die(mysql_error());

// --------------------------------------------------------
// Structure de la table `user`
$req ="
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `cin` varchar(10) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
";
mysql_query($req) or die(mysql_error());

// Contenu de la table `user`

$req ="
INSERT INTO `user` (`id_user`, `cin`, `login`, `password`, `nom`, `prenom`, `num_telef`, `id_etat_user`, `id_type_user`, `id_role`) VALUES
(1, 'CIN', 'admin', '4daa2c765c409f4c49f8e7cc695366b1', 'name', 'lastname', '0600807585', 1, 1, 1);
";
mysql_query($req) or die(mysql_error());
// --------------------------------------------------------
// Structure de la table `user_alerte`
$req ="
CREATE TABLE IF NOT EXISTS `user_alerte` (
  `id_alerte` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_alerte`,`id_user`),
  KEY `id_alerte` (`id_alerte`,`id_user`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
";
mysql_query($req) or die(mysql_error());


// ############"" Contraintes pour les tables exportées


// Contraintes pour la table `alerte`
$req ="
ALTER TABLE `alerte`
  ADD CONSTRAINT `alerte_ibfk_7` FOREIGN KEY (`id_type_alerte`) REFERENCES `type_alerte` (`id_type_alerte`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alerte_ibfk_2` FOREIGN KEY (`id_repondeur`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alerte_ibfk_3` FOREIGN KEY (`id_lanceur`) REFERENCES `user` (`id_etat_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alerte_ibfk_4` FOREIGN KEY (`id_etat_alerte`) REFERENCES `etat_alerte` (`id_etat_alerte`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alerte_ibfk_5` FOREIGN KEY (`id_nature_lanceur`) REFERENCES `nature_lanceur` (`id_nature_lanceur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alerte_ibfk_6` FOREIGN KEY (`id_attachement`) REFERENCES `attachement` (`id_attachement`) ON DELETE CASCADE ON UPDATE CASCADE;
";
mysql_query($req) or die(mysql_error());


// Contraintes pour la table `user`
$req ="
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_etat_user`) REFERENCES `etat_user` (`id_etat_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_type_user`) REFERENCES `type_user` (`id_type_user`) ON DELETE CASCADE ON UPDATE CASCADE;
";
mysql_query($req) or die(mysql_error());


//Contraintes pour la table `user_alerte`
$req ="
ALTER TABLE `user_alerte`
  ADD CONSTRAINT `user_alerte_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_alerte_ibfk_1` FOREIGN KEY (`id_alerte`) REFERENCES `alerte` (`id_alerte`) ON DELETE CASCADE ON UPDATE CASCADE;
";
mysql_query($req) or die(mysql_error());
