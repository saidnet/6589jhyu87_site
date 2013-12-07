<?php
/*
Réalisé par : Soukaina ERRAJI
Description : Ce fichier permet d'installer la base de donnees.
*/
mysql_connect($bd_host,$bd_login,$bd_mdp);
$req ="DROP DATABASE IF EXISTS ".$bd_name.";";
mysql_query($req) or die(mysql_error());

$req ="CREATE DATABASE IF NOT EXISTS ".$bd_name.";";
mysql_query($req) or die(mysql_error());

$req ="USE ".$bd_name.";";
mysql_query($req) or die(mysql_error());

$req ="
  CREATE TABLE IF NOT EXISTS `alerte` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `date_heure` date NOT NULL,
    `x` varchar(20) NOT NULL,
    `y` varchar(20) NOT NULL,
    `description` text NOT NULL,
    `attachement` varchar(200) NULL,
    `id_lanceur` int(11) NOT NULL,
    `id_repondeur` int(11) DEFAULT NULL,
    `id_etat_alerte` int(11) NOT NULL,
    `id_nature_lanceur` int(11) NOT NULL,
    `id_type_alerte` int(11) NOT NULL,
    PRIMARY KEY (`id`),
    KEY `id_lanceur` (`id_lanceur`,`id_repondeur`,`id_etat_alerte`,`id_nature_lanceur`,`id_type_alerte`),
    KEY `id_repondeur` (`id_repondeur`,`id_etat_alerte`,`id_nature_lanceur`,`id_type_alerte`),
    KEY `id_etat_alerte` (`id_etat_alerte`),
    KEY `id_nature_lanceur` (`id_nature_lanceur`),
    KEY `id_type_alerte` (`id_type_alerte`)
  ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;
  ";
mysql_query($req) or die(mysql_error());




$req ="
  INSERT INTO `alerte` (`id`, `date_heure`, `x`, `y`, `description`,`attachement`, `id_lanceur`, `id_repondeur`, `id_etat_alerte`, `id_nature_lanceur`, `id_type_alerte`) VALUES
  (1, '2013-12-11', '54984,58', '848974,68', 'Accident de deux voiture , il ya 3 blessées', 'lien.jpg',1, NULL, 1, 1, 1);
";
mysql_query($req) or die(mysql_error());

$req ="
  CREATE TABLE IF NOT EXISTS `ami` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `num_telef` varchar(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;
";
mysql_query($req) or die(mysql_error());



$req ="
  INSERT INTO `ami` (`id`, `nom`, `prenom`, `num_telef`, `id_user`) VALUES
  (1, 'soukaina', 'erraji', '0604896522', 1),
  (2, 'imane', 'khadija', '0600848672', 1),
  (3, 'mohamed', 'anass', '0648759625', 1),
  (4, 'said', 'mounji', '0614589632', 1),
  (5, 'dani', 'fouad', '0614587896', 1),
  (6, 'gudaouni', 'achraf', '0645858541', 1),
  (7, 'romani', 'abdessamed', '0623252124', 1);
  ";
mysql_query($req) or die(mysql_error());



$req ="
  CREATE TABLE IF NOT EXISTS `commissariat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(100) NOT NULL,
  `adress` varchar(100) CHARACTER SET utf8 NOT NULL,
  `x` varchar(20) CHARACTER SET utf8 NOT NULL,
  `y` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;
";
mysql_query($req) or die(mysql_error());



$req ="
  INSERT INTO `commissariat` (`id`, `designation`, `adress`, `x`, `y`) VALUES
  (1, 'Prefecture de la Surete Nationale', 'Boulevard Abi Obayda Al Jarah, Marrakech, Maroc', '31.647016', '-7.987812'),
  (2, 'comisariat 2', 'adr 2', '1235.3', '15.623'),
  (3, 'comisariat 3', 'adr 3', '1234.58', '45.236');
  ";
mysql_query($req) or die(mysql_error());



$req ="
  CREATE TABLE IF NOT EXISTS `etat_alerte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;
";
mysql_query($req) or die(mysql_error());



$req ="
  INSERT INTO `etat_alerte` (`id`, `libelle`) VALUES
  (1, 'En attente'),
  (2, 'En cours'),
  (3, 'Résolue'),
  (4, 'Annullée'),
  (5, 'Non-résolue');
  ";
mysql_query($req) or die(mysql_error());

$req ="
  CREATE TABLE IF NOT EXISTS `etat_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;
";
mysql_query($req) or die(mysql_error());

$req ="
  INSERT INTO `etat_user` (`id`, `libelle`) VALUES
(1, 'Actif'),
(2, 'Bloqué');
";
mysql_query($req) or die(mysql_error());

$req ="
  CREATE TABLE IF NOT EXISTS `hopital` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `x` varchar(20) CHARACTER SET utf8 NOT NULL,
  `y` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;
";
mysql_query($req) or die(mysql_error());


$req ="
  INSERT INTO `hopital` (`id`, `nom`, `adresse`, `x`, `y`) VALUES
(1, 'Hôpital Ibn Tofail', 'Rue Ibn Qodama, Marrakesh, Maroc', '31.641873', '-8.015821'),
(2, 'civile', 'daoudiat', '1478,125', '1458,26'),
(3, 'clinique', 'mhamid', '478,14', '245,58'),
(4, 'civile', 'daoudiat', '4587,47', '7856,24');
";
mysql_query($req) or die(mysql_error());


$req ="
  CREATE TABLE IF NOT EXISTS `nature_lanceur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;
";
mysql_query($req) or die(mysql_error());



$req ="
INSERT INTO `nature_lanceur` (`id`, `libelle`) VALUES
(1, 'Victime'),
(2, 'Témoin');
";
mysql_query($req) or die(mysql_error());


$req ="
  CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;
";
mysql_query($req) or die(mysql_error());



$req ="
  INSERT INTO `role` (`id`, `libelle`) VALUES
  (1, 'Public'),
  (2, 'Admin');
";
mysql_query($req) or die(mysql_error());



$req ="
  CREATE TABLE IF NOT EXISTS `type_alerte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;
";
mysql_query($req) or die(mysql_error());


$req ="
  INSERT INTO `type_alerte` (`id`, `libelle`) VALUES
(1, 'Accident'),
(2, 'Incendie'),
(3, 'Vol'),
(4, 'Viol');
";
mysql_query($req) or die(mysql_error());


$req ="
  
CREATE TABLE IF NOT EXISTS `type_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

";
mysql_query($req) or die(mysql_error());

$req ="
  INSERT INTO `type_user` (`id`, `libelle`) VALUES
(1, 'Administrateur'),
(2, 'Utilisateur'),
(3, 'Policier'),
(4, 'Pompier');
";
mysql_query($req) or die(mysql_error());



$req ="
  CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cin` varchar(10) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `num_telef` varchar(10) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `id_etat_user` int(11) NOT NULL,
  `id_type_user` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`),
  UNIQUE KEY `cin` (`cin`),
  UNIQUE KEY `email` (`email`),
  KEY `id_etat_user` (`id_etat_user`),
  KEY `id_type_user` (`id_type_user`),
  KEY `id_role` (`id_role`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

";
mysql_query($req) or die(mysql_error());


$req ="
INSERT INTO `user` (`id`, `cin`, `login`, `password`, `nom`, `prenom`, `num_telef`, `email`, `id_etat_user`, `id_type_user`, `id_role`) VALUES
(1, 'CIN', 'admin', '4daa2c765c409f4c49f8e7cc695366b1', 'name', 'lastname', '0600807585', '', 1, 1, 1),
(2, 'EE501824', 'rimasse', '4daa2c765c409f4c49f8e7cc695366b1', 'ERRAJI', 'Soukaina', '0658874555', 'souka-erraji@gmail.com', 1, 1, 1),
(3, 'EE145896', 'user3', '4daa2c765c409f4c49f8e7cc695366b1', 'hdafa', 'meryem', '0625478596', 'mimo-momi@live.fr', 2, 3, 1);
";
mysql_query($req) or die(mysql_error());

$req ="
CREATE TABLE IF NOT EXISTS `user_alerte` (
  `id_alerte` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_alerte`,`id_user`),
  KEY `id_alerte` (`id_alerte`,`id_user`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";
mysql_query($req) or die(mysql_error());


$req ="
  ALTER TABLE `alerte`
  ADD CONSTRAINT `alerte_ibfk_1` FOREIGN KEY (`id_lanceur`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alerte_ibfk_2` FOREIGN KEY (`id_repondeur`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alerte_ibfk_3` FOREIGN KEY (`id_etat_alerte`) REFERENCES `etat_alerte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alerte_ibfk_4` FOREIGN KEY (`id_nature_lanceur`) REFERENCES `nature_lanceur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alerte_ibfk_6` FOREIGN KEY (`id_type_alerte`) REFERENCES `type_alerte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
";
mysql_query($req) or die(mysql_error());


$req ="
  ALTER TABLE `ami`
  ADD CONSTRAINT `ami_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
";
mysql_query($req) or die(mysql_error());


$req ="
  ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_etat_user`) REFERENCES `etat_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_type_user`) REFERENCES `type_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
";
mysql_query($req) or die(mysql_error());


$req ="
  ALTER TABLE `user_alerte`
  ADD CONSTRAINT `user_alerte_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_alerte_ibfk_1` FOREIGN KEY (`id_alerte`) REFERENCES `alerte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
";
mysql_query($req) or die(mysql_error());