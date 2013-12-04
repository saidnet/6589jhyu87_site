<?php /* Smarty version Smarty-3.1.14, created on 2013-12-04 11:31:34
         compiled from "vues\templates\add-utilisateur.html" */ ?>
<?php /*%%SmartyHeaderCode:27243529e84b07cc9b3-10302455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e65b14ee75094928c1d22263989f7aa270ec2567' => 
    array (
      0 => 'vues\\templates\\add-utilisateur.html',
      1 => 1386141741,
      2 => 'file',
    ),
    'b5ab9a35d03044e79bcbc6a1bffaa336449e639c' => 
    array (
      0 => 'vues\\templates\\skeleton.htm',
      1 => 1386156670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27243529e84b07cc9b3-10302455',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_529e84b082c912_94870824',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529e84b082c912_94870824')) {function content_529e84b082c912_94870824($_smarty_tpl) {?>﻿<!DOCTYPE html>
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
	<link id="bootstrap-style" href="web/css/bootstrap.css" rel="stylesheet">
	<link href="web/css/bootstrap-responsive.css" rel="stylesheet">
	<link id="base-style" href="web/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="web/css/style-responsive.css" rel="stylesheet">
	
	<!--[if lt IE 7 ]>
	<link id="ie-style" href="css/style-ie.css" rel="stylesheet">
	<![Finif]-->
	<!--[if IE 8 ]>
	<link id="ie-style" href="css/style-ie.css" rel="stylesheet">
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

<body>
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
				<a class="brand" href="index.html"> <img alt="Tableau de bord Wide Team" src="web/img/logo20.png" /> <span class="hidden-phone">Paneau de configuration - E-SOS</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-warning-sign icon-white"></i> <span class="label label-success hidden-phone">3</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li>
									<span class="dropdown-menu-title">Vous avez 3 notifications</span>
								</li>	
                            	<li><a href="#">+ <i class="icon-user"></i> <span class="message">Nouvelle alerte</span><span class="time">1 min</span> 
                                    </a>
                                </li>
                                <li><a href="#">+ <i class="icon-user"></i> <span class="message">Nouvellle alerte</span><span class="time">5 min</span> 
                                    </a>
                                </li>
                                <li>
                                	<a href="#">+ <i class="icon-user"></i> <span class="message">Nouvel utilisateur</span><span class="time">45 min</span> 
                                	</a>
                                </li>						
								
                                <li><a href="#" class="dropdown-menu-sub-footer">Voir tous les alerte</a></li>	
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
								<li><a href="index.php?page=connexion"><i class="icon-off"></i> Déconnexion</a></li>
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
						<li><a href="index.html"><i class="icon-home icon-white"></i><span class="hidden-tablet"> Tableau de bord</span></a></li>
						<li><a href="#"><i class="icon-eye-open icon-white"></i><span class="hidden-tablet"> Listes des utilisateurs</span></a></li>
						<li><a href="index.php?page=commissariat"><i class="icon-th-large icon-white"></i><span class="hidden-tablet"> Les commissariats</span></a></li>
						<li><a href="index.php?page=hopital"><i class="icon-eye-open icon-white"></i><span class="hidden-tablet"> Les hopitaux</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-exclamation-sign icon-white"></i><span class="hidden-tablet"> Les alertes</span></a>
							<ul>
								<li><a class="submenu" href="index.php?page=etat-alerte"><i class="fa-icon-file-alt icon-white"></i><span class="hidden-tablet"> Etats alerte</span></a></li>
								<li><a class="submenu" href="index.php?page=type-alerte"><i class="fa-icon-file-alt icon-white"></i><span class="hidden-tablet"> Types d'alrte</span></a></li>
							</ul>	
						</li>
						<li><a href="#"><i class="icon-edit icon-white"></i><span class="hidden-tablet"> Statistique</span></a></li>	
						<li><a href="#"><i class="icon-calendar icon-white"></i><span class="hidden-tablet"> Calendrier</span></a></li>
						<li><a href="#"><i class="icon-lock icon-white"></i><span class="hidden-tablet"> Page de connexion</span></a></li>
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
			
			
			
<div id="content" class="span10">
<!-- start: Content -->
<div>
	<hr>
	<ul class="breadcrumb">
		<li><a href="#">Accuiel</a> <span class="divider">/</span></li>
		<li><a href="#">Listes des utilisateurs</a></li>
	</ul>
	<hr>				
</div>
<div>
	<a class="btn btn-success" href="add-utilisateur.php"><i class="icon-plus-sign icon-white"></i> Ajouter Un utilisateur</a>
             <a class="btn" href="liste-utilisateur.php"><i class=" icon-zoom-in"></i> Afficher les utilisaturs</a>
             <a class="btn btn-info" href="liste-alerte.php"><i class="icon-zoom-in icon-white"></i> Aficher les alerte</a>
</div>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Les éléments de formulaire</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" action="modeles/add-user.php" method="post">
				<fieldset>
					<div class="control-group">
					<label class="control-label" for="focusedInput">CIN :</label>
					<div class="controls">
							<input class="input-xlarge focused" id="focusedInput" type="text" name="cin">
					</div>
					 </div>
						<div class="control-group">
					<label class="control-label" for="focusedInput">Nom de L'utilisateur :</label>
					<div class="controls">
							<input class="input-xlarge focused" id="focusedInput" type="text" name="user">
					</div>
					 </div>
						<div class="control-group">
                                 <label class="control-label" for="date01"> Mot de passe :</label>
                                 <div class="controls">
                                     <input type="text" class="input-xlarge"  value="" name="password">
                                 </div>
                           </div>
                           <div class="control-group">
					<label class="control-label" for="focusedInput">Nom :</label>
					<div class="controls">
							<input class="input-xlarge focused" id="focusedInput" type="text" name="nom">
					</div>
						</div>
						<div class="control-group">
					<label class="control-label" for="focusedInput">Prenom :</label>
					<div class="controls">
							<input class="input-xlarge focused" id="focusedInput" type="text" name="prenom">
					</div>
					 </div>
							  
                           <div class="control-group">
                                 <label class="control-label" for="date01"> Rôle :</label>
                                 <div class="controls">
                                     <input type="text" class="input-xlarge"  value="" name="role">
                                 </div>
                           </div>
                           <div class="control-group">
					<label class="control-label" for="focusedInput">Mail :</label>
					<div class="controls">
							<input type="email" class="input-xlarge"  value="" name="email">
					</div>
					 </div>
                           <div class="control-group">
                                 <label class="control-label" for="typeahead">Nationalité : </label>
                                 <div class="controls">
                                       <input type="text" name="nationalite" class="input-xlarge focused" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Afghanistan","Afrique du Sud","Albanie","Algérie","Allemagne","Andorre","Angola","Antigua-et-Barbuda","Arabie saoudite","Argentine","Arménie","Australie","Autriche","Azerbaïdjan","Bahamas","Bahreïn","Bangladesh","Barbade","Belau","Belgique","Belize","Bénin","Bhoutan","Biélorussie","Birmanie","Bolivie","Bosnie-Herzégovine","Botswana","Brésil","Brunei","Bulgarie","Burkina","Burundi","Cambodge","Cameroun","Canada","Cap-Vert","Chili","Chine","ChypreColombie","Comores","Congo","CookCorée du Nord","Corée du Sud","Costa Rica","Côte d Ivoire","Croatie","Cuba","Danemark","Djibouti","Dominique","Égypte","Émirats arabes unis","Équateur","Érythrée","Espagne","Estonie","États-Unis","Éthiopie","Fidji","Finlande","France","Gabon","Gambie","Géorgie","Ghana","Grèce","Grenade","Guatemala","Guinée","Guinée-Bissao","Guinée équatoriale","Guyana","Haïti","Honduras","Hongrie","Inde","Indonésie","Iran","Iraq","Irlande","Islande","Italie","Jamaïque","Japon","Jordanie","Kazakhstan","Kenya","Kirghizistan","Kiribati","Koweït","Laos","Lesotho","Lettonie","Liban","Liberia","Libye","Liechtenstein","Lituanie","Luxembourg","Macédoine","Madagascar","Malaisie","Malawi","Maldives","Mali","Malte","Maroc","Marshall","Maurice","Mauritanie","Mexique","Micronésie","Moldavie","Monaco","Mongolie","Mozambique","Namibie","Nauru","Népal","Nicaragua","Niger","Nigeria","Niue","Norvège","Nouvelle-Zélande","Oman","Ouganda","Ouzbékistan","Pakistan","Panama","Nouvelle Guinée","Paraguay","Pays-Bas","Pérou","Philippines","Pologne","Portugal","Qatar","République centrafricaine","République dominicaine","République tchèque","Roumanie","Royaume-Uni","Russie","Rwanda","Saint-Christophe-et-Niévès","Sainte-Lucie","Saint-Marin","Saint-Siège","Salomon","Salvador","Samoa occidentales","Sénégal","Seychelles","Sierra Leone","Singapour","Slovaquie","Slovénie","Somalie","Soudan","Sri Lanka","Suède","Suisse","Suriname","Swaziland","Syrie","Tadjikistan","Tanzanie","Tchad","Thaïlande","Togo","Tonga","Trinité-et-Tobago","Tunisie","Turkménistan","Turquie","Tuvalu","Ukraine","Uruguay","Vanuatu","Venezuela","Viêt Nam","Yémen","Yougoslavie","Zambie","Zimbabwe"]'>
                                     <p class="help-block">Commencez à taper pour activer l'auto complète!</p>
                                 </div>
							 </div>
							 <div class="control-group">
							   <label class="control-label" for="date01">Date de naissance :</label>
							   <div class="controls">
							    <input type="date" class="input-xlarge"  value="17/08/1970" name="naissance">
							   </div>
							 </div>
							 <div class="form-actions">
						<button type="submit" name="bouton" value="Enregistrer" class="btn btn-primary" >Enregistrer les modifications</button>
						<button type="submit" name="bouton" value="Fermer" class="btn" >Fermer</button>
							 </div>
				</fieldset>
					</form>					
		</div>
	</div><!--/span-->
</div><!--/row-->
			
					<!-- content Fins -->
</div><!--/#content.span10-->
				</div><!--/fluid-row-->
			
			</div><!--/row-->

			<hr>
			<!-- Fin: Content -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->

			
				
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
		<script src='web/js/fullcalFinar.min.js'></script>	
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
		<!-- Fin: JavaScript-->
	
</body>
</html>
<?php }} ?>