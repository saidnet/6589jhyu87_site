<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 15:19:17
         compiled from "vues\templates\acceuil.htm" */ ?>
<?php /*%%SmartyHeaderCode:333252b06b75b399b5-14387208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c8e5961e19b214231e8cda999665448f05e8a53' => 
    array (
      0 => 'vues\\templates\\acceuil.htm',
      1 => 1386783267,
      2 => 'file',
    ),
    'b5ab9a35d03044e79bcbc6a1bffaa336449e639c' => 
    array (
      0 => 'vues\\templates\\skeleton.htm',
      1 => 1387293415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '333252b06b75b399b5-14387208',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b06b76f02eb2_43930186',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b06b76f02eb2_43930186')) {function content_52b06b76f02eb2_43930186($_smarty_tpl) {?><!DOCTYPE html>
<html lang="fr">
<head>
	
	<!-- Debut: Meta -->
	<meta charset="utf-8">
	<title>Paneau de configuration - E-SOS   </title>
	<meta name="description" content="Application de la gestion E-SOS.">
	<meta name="author" content="Wide Team">
	<!-- Fin: Meta -->
	
	<!-- Debut: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Fin: Mobile Specific -->
	
	<!-- Debut: CSS -->
	<link id="bootstrap-style" href="web/css/bootstrap.min.css" rel="stylesheet">
	<link href="web/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="web/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="web/css/style-responsive.css" rel="stylesheet">
	
	<!--[if lt IE 7 ]>
	<link id="ie-style" href="web/css/style-ie.css" rel="stylesheet">
	<![Finif]-->
	<!--[if IE 8 ]>
	<link id="ie-style" href="web/css/style-ie.css" rel="stylesheet">
	<![Finif]-->
	<!--[if IE 9 ]>
	<![Finif]-->
	
	<!-- Fin: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![Finif]-->

	<!-- Debut: Favicon -->
	<link rel="shortcut icon" href="web/img/favicon.ico">
	<!-- Fin: Favicon -->
	
			<style type="text/css">
			body { background: url(web/img/bg-login.jpg) !important; }
		</style>
		
		
		
</head>

<body onload="initialiser_map();init();">
	<div id="overlay">
		<ul>
		  	<li class="li1"></li>
		  	<li class="li2"></li>
		  	<li class="li3"></li>
		  	<li class="li4"></li>
		  	<li class="li5"></li>
		  	<li class="li6"></li>
		</ul>
	</div>	
	<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.php"> <img alt="Tableau de bord " src="web/img/logo20.png" /> <span class="hidden-phone">Paneau de configuration - E-SOS</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-warning-sign icon-white"></i> <span id="nbr_noti" class="label label-success hidden-phone">0</span>
							</a>
							<ul id="zone_noti" class="dropdown-menu notifications">
								<li><span class="dropdown-menu-title">Vous avez 3 notifications</span></li>

                            	<li><a href="#">+ <i class="icon-user"></i> <span class="message">Nouvelle alerte</span><span class="time"></span></a></li>
                               	
                                <li><a href="index.php?page=alertes" class="dropdown-menu-sub-footer">Voir tous les alerte</a></li>	
							</ul>
						</li>
						
						<li>
							<a class="btn" href="#">
								<i class="icon-wrench icon-white"></i>
							</a>
						</li>
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-user icon-white"></i>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="index.php?page=profile"><i class="icon-user"></i> Profile</a></li>
								<li><a href="index.php?page=deconnexion"><i class="icon-off"></i> Déconnexion</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div class="span2 main-menu-span">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="index.php"><i class="icon-home icon-white"></i><span class="hidden-tablet"> Tableau de bord</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-wrench icon-white"></i><span class="hidden-tablet"> Les Alertes</span></a>
							<ul>
								<li><a class="submenu" href="index.php?page=type_alerte"><i class="fa-icon-file-alt icon-white"></i><span class="hidden-tablet"> En Attente</span></a></li>
								<li><a class="submenu" href="index.php?page=type_alerte"><i class="fa-icon-file-alt icon-white"></i><span class="hidden-tablet"> En Cours</span></a></li>
								<li><a class="submenu" href="index.php?page=type_alerte"><i class="fa-icon-file-alt icon-white"></i><span class="hidden-tablet"> Resolue</span></a></li>
								<li><a class="submenu" href="index.php?page=type_alerte"><i class="fa-icon-file-alt icon-white"></i><span class="hidden-tablet"> Non Resolue</span></a></li>
								<li><a class="submenu" href="index.php?page=type_alerte"><i class="fa-icon-file-alt icon-white"></i><span class="hidden-tablet"> Fausse Alerte</span></a></li>
							</ul>	
						</li>
						<li><a href="index.php?page=commissariat"><i class="icon-th-large icon-white"></i><span class="hidden-tablet"> Les commissariats</span></a></li>
						<li><a href="index.php?page=hopital"><i class="icon-eye-open icon-white"></i><span class="hidden-tablet"> Les hopitaux</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-wrench icon-white"></i><span class="hidden-tablet"> Paramétrage</span></a>
							<ul>
								<li><a class="submenu" href="index.php?page=type_alerte"><i class="fa-icon-file-alt icon-white"></i><span class="hidden-tablet"> Types d'alrte</span></a></li>
							</ul>	
						</li>
						<li><a href="index.php?page=statistique"><i class=" icon-picture icon-white"></i><span class="hidden-tablet"> Statistique</span></a></li>
						<li><a href="index.php?page=commissariat"><i class="icon-th-large icon-white"></i><span class="hidden-tablet"> Liste Policiers</span></a></li>
						<li><a href="index.php?page=commissariat"><i class="icon-th-large icon-white"></i><span class="hidden-tablet"> Liste Pompiers</span></a></li>
						<li><a href="index.php?page=commissariat"><i class="icon-th-large icon-white"></i><span class="hidden-tablet"> Liste utilisateurs</span></a></li>
						
						
					</ul>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>Vous devez avoir <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> permis d'utiliser ce site.</p>
				</div>
			</noscript>
			
			
<div id="content" class="span10"> <!-- start: Content -->
	<div>
		<hr>
		<ul class="breadcrumb">
			<li>
				<a href="index.php">Accuiel</a> <span class="divider">|</span>
			</li>
		</ul>
		<hr>
	</div>
	<!-- debut block  paramètres -->
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="icon-user"></i><span class="break"></span>Choix :
				</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="icon-remove"></i></a>
				</div>
			</div>

			<div class="box-content">
		        <div class="sortable row-fluid ui-sortable">
		        	<a class="quick-button ">
		        	<form method="POST" class="form-inline" action="index.php?page=acceuil">

						<label class="inline" style="width:20px;"></label>
		        		<label class="checkbox inline span2" for="policiers">
							   <input type="checkbox" name="policiers" id="policiers" <?php if ($_smarty_tpl->tpl_vars['c1']->value=='1'){?>checked<?php }?>> Les policiers
						</label>
						<label class="checkbox inline span2" for="pompiers">
							   <input type="checkbox" name="pompiers" id="pompiers"<?php if ($_smarty_tpl->tpl_vars['c2']->value=='1'){?>checked<?php }?>> Les pompiers
						</label>
						<label class="checkbox inline span2" for="commissariats">
							   <input type="checkbox" name="commissariats" id="commissariats"<?php if ($_smarty_tpl->tpl_vars['c3']->value=='1'){?>checked<?php }?>> Coumissariats
						</label> 
		        		   <label class="checkbox inline span2" for="hopitals">
							   <input type="checkbox" name="hopitals" id="hopitals" <?php if ($_smarty_tpl->tpl_vars['c4']->value=='1'){?>checked<?php }?>> Les hopitaux
						</label>
						<label class="checkbox inline span2" for="new_alertes">
							   <input type="checkbox" name="alertes_en_cours" id="alertes_en_cours" <?php if ($_smarty_tpl->tpl_vars['c6']->value=='1'){?>checked<?php }?>> Nouvelles Alertes
						</label>
						<label class="checkbox inline span2" for="alertes_en_cours">
							   <input type="checkbox" name="alertes_en_cours" id="alertes_en_cours" <?php if ($_smarty_tpl->tpl_vars['c6']->value=='1'){?>checked<?php }?>> Les alertes en cours
						</label>
						<br><br>		        		
		        		<button type="submit" name="envoyer" id="envoyer" value="Envoyer" class="btn btn-primary " style="float left"> Enregistrer les nouveaux paramétres </button>
		        		<br>
		        	</form>
		        	</a>
		        </div>
			</div>
		</div>
	</div>
	<!-- debut block  paramètres -->
	<!--   debut block map-->
	<div class="row-fluid sortable ui-sortable">
		<div class="box span12">
			<div data-original-title="" class="box-header">
				<h2><i class="icon-edit"></i><span class="break"></span>Map</h2>
				<div class="box-icon">
					<a class="btn-setting" href="#"><i class="icon-wrench"></i></a>
					<a class="btn-minimize" href="#"><i class="icon-chevron-up"></i></a>
					<a class="btn-close" href="#"><i class="icon-remove"></i></a>
				</div>
			</div>
		<div class="box-content">
			<div class="sortable row-fluid ui-sortable">
				<a class="quick-button ">
					<div id="carte" style="width:100%; height:700px"></div>
				</a>
			</div>
			
		</div>
		</div><!--/span-->
	</div>
	<!--   Fin block map-->
	<!--   debut block affichage agent-->
	<div class="row-fluid sortable ui-sortable">
		<div class="box span12">
			<div data-original-title="" class="box-header">
				<h2><i class="icon-edit"></i><span class="break"></span>Affichage :</h2>
				<div class="box-icon">
					<a class="btn-setting" href="#"><i class="icon-wrench"></i></a>
					<a class="btn-minimize" href="#"><i class="icon-chevron-up"></i></a>
					<a class="btn-close" href="#"><i class="icon-remove"></i></a>
				</div>
			</div>
		<div class="box-content">
			<div class="sortable row-fluid ui-sortable">
				<div id="zone_affichage">
				
			</div>
			</div>
			
		</div>
		</div><!--/span-->
	</div>
	<!--   fin block affichage agent-->

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
function initialiser_map() {
    //var latlng = new google.maps.LsatLng(46.779231, 6.659431);
    var latlng = new google.maps.LatLng(31.630218,-8.015999);
    //objet contenant des propriétés avec des identificateurs prédéfinis dans Google Maps permettant
    //de définir des options d'affichage de notre carte
    var options = {
        center: latlng,
        zoom: 13,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    
    //constructeur de la carte qui prend en paramêtre le conteneur HTML
    //dans lequel la carte doit s'afficher et les options
    var carte = new google.maps.Map(document.getElementById("carte"), options);

    // Les policiers
    <?php  $_smarty_tpl->tpl_vars['policier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['policier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['policiers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['policier']->key => $_smarty_tpl->tpl_vars['policier']->value){
$_smarty_tpl->tpl_vars['policier']->_loop = true;
?>
	var marqueur_policier<?php echo $_smarty_tpl->tpl_vars['policier']->value->getId();?>
 = new google.maps.Marker({
		position: new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['policier']->value->getLastx();?>
,<?php echo $_smarty_tpl->tpl_vars['policier']->value->getLasty();?>
),
		map: carte,
		draggable: true,
		icon: "./web/img/icons_map/policier.png"
	});
	google.maps.event.addListener(marqueur_policier<?php echo $_smarty_tpl->tpl_vars['policier']->value->getId();?>
, 'click', function() {
        //alert("Policier");
        $('#zone_affichage').html('<div class="quick-button span10">'+
					'<table class="table table-striped"><thead>'+
						'<tr><th class="red">Nom :</th><th><?php echo $_smarty_tpl->tpl_vars['policier']->value->getNom();?>
</th></tr>'+
						'<tr><th class="red">Prénom :</th><th><?php echo $_smarty_tpl->tpl_vars['policier']->value->getPrenom();?>
</th></tr>'+
						'<tr><th class="red">Téléphone :</th><th><?php echo $_smarty_tpl->tpl_vars['policier']->value->getTel();?>
</th></tr>'+
					'</thead></table>'+			
				'</div>'+
				'<div class="quick-button span2 avatar_police">'+
					'<a href="#">'+
						'<img  alt="Policier" src="./web/img/avatar/policier.png">'+
					'</a>'+
					'<p class="red">Policier </p>'+
				'</div>');
        
    });
	<?php } ?>

	// Les Pompiers :
	<?php  $_smarty_tpl->tpl_vars['pompier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pompier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pompiers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pompier']->key => $_smarty_tpl->tpl_vars['pompier']->value){
$_smarty_tpl->tpl_vars['pompier']->_loop = true;
?>
	var marqueur_pompier<?php echo $_smarty_tpl->tpl_vars['pompier']->value->getId();?>
 = new google.maps.Marker({
		position: new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['pompier']->value->getLastx();?>
,<?php echo $_smarty_tpl->tpl_vars['pompier']->value->getLasty();?>
),
		map: carte,
		draggable: true,
		icon: "./web/img/icons_map/pompier.png"
	});
	google.maps.event.addListener(marqueur_pompier<?php echo $_smarty_tpl->tpl_vars['pompier']->value->getId();?>
, 'click', function() {
		$('#zone_affichage').html('<div class="quick-button span10">'+
					'<table class="table table-striped"><thead>'+
						'<tr><th class="red">Nom :</th><th><?php echo $_smarty_tpl->tpl_vars['pompier']->value->getNom();?>
</th></tr>'+
						'<tr><th class="red">Prénom :</th><th><?php echo $_smarty_tpl->tpl_vars['pompier']->value->getPrenom();?>
</th></tr>'+
						'<tr><th class="red">Téléphone :</th><th><?php echo $_smarty_tpl->tpl_vars['pompier']->value->getTel();?>
</th></tr>'+
					'</thead></table>'+			
				'</div>'+
				'<div class="quick-button span2 avatar_police">'+
					'<a href="#">'+
						'<img  alt="Pompier" src="./web/img/avatar/pompier.png">'+
					'</a>'+
					'<p class="red">Pompier </p>'+
				'</div>');
    });
	<?php } ?>

	// Les Commissariats :
	<?php  $_smarty_tpl->tpl_vars['commissariat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['commissariat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['commissariats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['commissariat']->key => $_smarty_tpl->tpl_vars['commissariat']->value){
$_smarty_tpl->tpl_vars['commissariat']->_loop = true;
?>
	var marqueur_commissariat<?php echo $_smarty_tpl->tpl_vars['commissariat']->value->getId();?>
 = new google.maps.Marker({
		position: new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['commissariat']->value->getX();?>
,<?php echo $_smarty_tpl->tpl_vars['commissariat']->value->getY();?>
),
		map: carte,
		draggable: true,
		icon: "./web/img/icons_map/commissariat.png"
	});
	google.maps.event.addListener(marqueur_commissariat<?php echo $_smarty_tpl->tpl_vars['commissariat']->value->getId();?>
, 'click', function() {
		$('#zone_affichage').html('<div class="quick-button span10">'+
					'<table class="table table-striped"><thead>'+
						'<tr><th class="red">Designation :</th><th><?php echo $_smarty_tpl->tpl_vars['commissariat']->value->getDesignation();?>
</th></tr>'+
						'<tr><th class="red">Adresse :</th><th><?php echo $_smarty_tpl->tpl_vars['commissariat']->value->getAdress();?>
</th></tr>'+
					'</thead></table>'+			
				'</div>'+
				'<div class="quick-button span2 avatar_police">'+
					'<a href="#">'+
						'<img  alt="Commissariat" src="./web/img/avatar/commissariat.png">'+
					'</a>'+
					'<p class="red">Commissariat </p>'+
				'</div>');
    });
	<?php } ?>

	// Les Hopitals :
	<?php  $_smarty_tpl->tpl_vars['hopital'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hopital']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hopitals']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hopital']->key => $_smarty_tpl->tpl_vars['hopital']->value){
$_smarty_tpl->tpl_vars['hopital']->_loop = true;
?>
	var marqueur_hopital<?php echo $_smarty_tpl->tpl_vars['hopital']->value->getId();?>
 = new google.maps.Marker({
		position: new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['hopital']->value->getX();?>
,<?php echo $_smarty_tpl->tpl_vars['hopital']->value->getY();?>
),
		map: carte,
		draggable: true,
		icon: "./web/img/icons_map/hopital.png"
	});
	google.maps.event.addListener(marqueur_hopital<?php echo $_smarty_tpl->tpl_vars['hopital']->value->getId();?>
, 'click', function() {
		$('#zone_affichage').html('<div class="quick-button span10">'+
					'<table class="table table-striped"><thead>'+
						'<tr><th class="red">Designation :</th><th><?php echo $_smarty_tpl->tpl_vars['hopital']->value->getDesignation();?>
</th></tr>'+
						'<tr><th class="red">Adresse :</th><th><?php echo $_smarty_tpl->tpl_vars['hopital']->value->getAdresse();?>
</th></tr>'+
					'</thead></table>'+			
				'</div>'+
				'<div class="quick-button span2 avatar_police">'+
					'<a href="#">'+
						'<img  alt="Hopital" src="./web/img/avatar/hopital.png">'+
					'</a>'+
					'<p class="red">Hopital </p>'+
				'</div>');
    });
	<?php } ?>

	// Les new Alertes :
	<?php  $_smarty_tpl->tpl_vars['alerte'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alerte']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_alertes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alerte']->key => $_smarty_tpl->tpl_vars['alerte']->value){
$_smarty_tpl->tpl_vars['alerte']->_loop = true;
?>
	var marqueur_alerte<?php echo $_smarty_tpl->tpl_vars['alerte']->value->getId();?>
 = new google.maps.Marker({
		position: new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['alerte']->value->getX();?>
,<?php echo $_smarty_tpl->tpl_vars['alerte']->value->getY();?>
),
		map: carte,
		draggable: true,
		icon: "./web/img/icons_map/new_alerte.png"
	});
	google.maps.event.addListener(marqueur_alerte<?php echo $_smarty_tpl->tpl_vars['alerte']->value->getId();?>
, 'click', function() {
		$('#zone_affichage').html('<div class="quick-button span10">'+
					'<table class="table table-striped"><thead>'+
						'<tr><th class="red">Date :</th><th><?php echo $_smarty_tpl->tpl_vars['alerte']->value->getDate();?>
</th></tr>'+
						'<tr><th class="red">Description :</th><th><?php echo $_smarty_tpl->tpl_vars['alerte']->value->getDescription();?>
</th></tr>'+
						'<tr><th class="red">Etat :</th><th><?php if ($_smarty_tpl->tpl_vars['alerte']->value->getEtat()=="a"){?>En Attente<?php }else{ ?>En Cours<?php }?></th></tr>'+
						'<tr><th class="red">Nature Lanceur :</th><th><?php if ($_smarty_tpl->tpl_vars['alerte']->value->getNature()=="v"){?>Victime<?php }else{ ?>Témoin<?php }?></th></tr>'+
					'</thead></table>'+			
				'</div>'+
				'<div class="quick-button span2 avatar_police">'+
					'<a href="#">'+
						'<img  alt="alerte" src="./web/img/avatar/alerte.png">'+
					'</a>'+
					'<p class="red">Alerte </p>'+
				'</div>');
    });
	<?php } ?>

	// Les Alertes en cours :
	<?php  $_smarty_tpl->tpl_vars['alerte'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alerte']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alertes_en_cours']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alerte']->key => $_smarty_tpl->tpl_vars['alerte']->value){
$_smarty_tpl->tpl_vars['alerte']->_loop = true;
?>
	var marqueur_alerte<?php echo $_smarty_tpl->tpl_vars['alerte']->value->getId();?>
 = new google.maps.Marker({
		position: new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['alerte']->value->getX();?>
,<?php echo $_smarty_tpl->tpl_vars['alerte']->value->getY();?>
),
		map: carte,
		draggable: true,
		icon: "./web/img/icons_map/alerte_en_cours.png"
	});
	google.maps.event.addListener(marqueur_alerte<?php echo $_smarty_tpl->tpl_vars['alerte']->value->getId();?>
, 'click', function() {
        $('#zone_affichage').html('<div class="quick-button span10">'+
					'<table class="table table-striped"><thead>'+
						'<tr><th class="red">Date :</th><th><?php echo $_smarty_tpl->tpl_vars['alerte']->value->getDate();?>
</th></tr>'+
						'<tr><th class="red">Description :</th><th><?php echo $_smarty_tpl->tpl_vars['alerte']->value->getDescription();?>
</th></tr>'+
						'<tr><th class="red">Etat :</th><th><?php if ($_smarty_tpl->tpl_vars['alerte']->value->getEtat()=="a"){?>En Attente<?php }else{ ?>En Cours<?php }?></th></tr>'+
						'<tr><th class="red">Nature Lanceur :</th><th><?php if ($_smarty_tpl->tpl_vars['alerte']->value->getNature()=="v"){?>Victime<?php }else{ ?>Témoin<?php }?></th></tr>'+
					'</thead></table>'+			
				'</div>'+
				'<div class="quick-button span2 avatar_police">'+
					'<a href="#">'+
						'<img  alt="alerte" src="./web/img/avatar/alerte.png">'+
					'</a>'+
					'<p class="red">Alerte </p>'+
				'</div>');
    });
	<?php } ?>
}
</script>
			
				
		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Paramètres</h3>
			</div>
			<div class="modal-body">
				<p>Configuration ...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Fermer</a>
				<a href="#" class="btn btn-primary">Enregistrer modification</a>
			</div>
		</div>
		
		<div class="clearfix"></div>
		
		<footer>
			<p>
				<span style="text-align:left;float:left">&copy; <a href="#" target="_blank">Tous droits résérvés</a> 2013</span>
				<span style="text-align:right;float:right;bottom:5px;">Powered by: <a href="#">Wide Team</a></span>
			</p>

		</footer>
				
	</div><!--/.fluid-container-->


	<!-- Debut: JavaScript-->

		<script src="web/js/jquery-1.9.1.min.js"></script>
		<script src="web/js/jquery-migrate-1.0.0.min.js"></script>	
		<script src="web/js/jquery-ui-1.10.0.custom.min.js"></script>	
		<script src="web/js/jquery.ui.touch-punch.js"></script>	
		<script src="web/js/bootstrap.min.js"></script>	
		<script src="web/js/jquery.cookie.js"></script>	
		<!-- <script src='web/js/fullcalFinar.min.js'></script>	-->
		<script src='web/js/jquery.dataTables.min.js'></script>
		<script src="web/js/excanvas.js"></script>
		<script src="web/js/jquery.flot.min.js"></script>
		<script src="web/js/jquery.flot.pie.min.js"></script>
		<script src="web/js/jquery.flot.stack.js"></script>
		<script src="web/js/jquery.flot.resize.min.js"></script>	
		<script src="web/js/jquery.chosen.min.js"></script>	
		<script src="web/js/jquery.uniform.min.js"></script>		
		<script src="web/js/jquery.cleditor.min.js"></script>	
		<script src="web/js/jquery.noty.js"></script>	
		<script src="web/js/jquery.elfinder.min.js"></script>	
		<script src="web/js/jquery.raty.min.js"></script>	
		<script src="web/js/jquery.iphone.toggle.js"></script>	
		<script src="web/js/jquery.uploadify-3.1.min.js"></script>	
		<script src="web/js/jquery.gritter.min.js"></script>	
		<script src="web/js/jquery.imagesloaded.js"></script>	
		<script src="web/js/jquery.masonry.min.js"></script>	
		<script src="web/js/jquery.knob.js"></script>	
		<script src="web/js/jquery.sparkline.min.js"></script>
		<script src="web/js/custom.js"></script>
		<script type="text/javascript">
		/*
			function verif(){
				$.ajax({
					type: 'GET',
					url: 'index.php?page=alertes&action=verif',
					//data:'page=alertes&action=verif',
					timeout: 5000,
					dataType: 'json',
					success: function(data) {
						alert("Tset");
						//var res="";
						var i=0;
						$('#nbr_noti').html(data.length);
						/*
						res=res + '<li><span class="dropdown-menu-title">Vous avez ';
						res=res + data.length + ' notifications </span></li>';
						
						for(i=0;i<3;i++ ){
							res=res+'<li><a href="#">+ <i class="icon-user"></i> <span class="message">'+data[i]['description'];
							res=res+' </span><span class="time"></span></a></li>';
						}

						res=res+'<li><a href="index.php?page=alertes" class="dropdown-menu-sub-footer">Voir tous les alerte</a></li>';
						
						$('#zone_noti').html('test');
					},
					error: function() {
						alert('La requête n\'a pas abouti'); }
				});
			}
			*/
			function init() {
				alert("Cc");
				//verif();
				//setInterval(verif, 5000);
			}
		</script>
		<!-- Fin: JavaScript-->
	
</body>
</html>
<?php }} ?>