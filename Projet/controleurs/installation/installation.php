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
  `date` datetime NOT NULL,
  `x` varchar(20) NOT NULL,
  `y` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `etat` varchar(1) NOT NULL,
  `nature` varchar(1) NOT NULL,
  `attachement` varchar(200) DEFAULT NULL,
  `lanceur` int(11) NOT NULL,
  `intervenant` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;
  ";
mysql_query($req) or die(mysql_error());




$req ="
  INSERT INTO `alerte` (`id`, `date`, `x`, `y`, `description`, `etat`, `nature`, `attachement`, `lanceur`, `intervenant`, `type`) 
  VALUES
  (1, '2013-12-11 00:00:00', '54984,58', '848974,68', 'Accident de deux voiture , il ya 3 blessÃ©es', '', '', 'lien.jpg', 1, NULL, 1);
";
mysql_query($req) or die(mysql_error());


$req ="
  CREATE TABLE IF NOT EXISTS `commissariat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(100) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `x` varchar(20) NOT NULL,
  `y` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;
";
mysql_query($req) or die(mysql_error());



$req ="
  INSERT INTO `commissariat` (`id`, `designation`, `adress`, `x`, `y`, `image`) VALUES
  (1, 'Prefecture de la Surete Nationale', 'Boulevard Abi Obayda Al Jarah, Marrakech, Maroc', '31.647016', '-7.987812', 'image.jpg'),
  (2, 'comisariat 3', 'adr 3', '1234.58', '45.236', 'image.jpg');
  ";
mysql_query($req) or die(mysql_error());

$req ="
  CREATE TABLE IF NOT EXISTS `hopital` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `x` varchar(20) NOT NULL,
  `y` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;
";
mysql_query($req) or die(mysql_error());


$req ="
  INSERT INTO `hopital` (`id`, `designation`, `adresse`, `x`, `y`, `image`) VALUES
(1, 'Hopital Ibn Tofail', 'Rue Ibn Qodama, Marrakesh, Maroc', '31.641873', '-8.015821', 'image.jpg'),
(2, 'civile', 'daoudiat', '4587,47', '7856,24', 'image.jpg');
";
mysql_query($req) or die(mysql_error());

$req ="
  CREATE TABLE IF NOT EXISTS `type_alerte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) NOT NULL,
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
  CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cin` varchar(10) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `operateur` varchar(50) DEFAULT NULL,
  `serial` varchar(100) DEFAULT NULL,
  `avatar` varchar(200) NOT NULL,
  `disponibilite` varchar(1) NOT NULL,
  `lastx` varchar(20) DEFAULT NULL,
  `lasty` varchar(20) DEFAULT NULL,
  `role` varchar(1) NOT NULL,
  `type` varchar(1) NOT NULL,
  `etat` varchar(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cin` (`cin`),
  UNIQUE KEY `login` (`login`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

";
mysql_query($req) or die(mysql_error());


$req ="
INSERT INTO `user` (`id`, `cin`, `login`, `password`, `nom`, `prenom`, `email`, `tel`, `operateur`, `serial`, `avatar`, `disponibilite`, `lastx`, `lasty`, `role`, `type`, `etat`) VALUES
(1, 'CIN', 'admin', '4daa2c765c409f4c49f8e7cc695366b1', 'name', 'lastname', '0600807585', '', NULL, NULL, '', '', NULL, NULL, '', '', ''),
(2, 'EE501824', 'rimasse', '4daa2c765c409f4c49f8e7cc695366b1', 'ERRAJI', 'Soukaina', '0658874555', 'souka-erra', NULL, NULL, '', '', NULL, NULL, '', '', '');
";
mysql_query($req) or die(mysql_error());

$req ="
  ALTER TABLE `alerte`
  ADD CONSTRAINT `alerte_ibfk_3` FOREIGN KEY (`type`) REFERENCES `type_alerte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alerte_ibfk_1` FOREIGN KEY (`lanceur`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alerte_ibfk_2` FOREIGN KEY (`intervenant`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
";
mysql_query($req) or die(mysql_error());