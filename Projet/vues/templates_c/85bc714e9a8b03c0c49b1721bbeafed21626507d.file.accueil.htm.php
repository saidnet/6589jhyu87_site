<?php /* Smarty version Smarty-3.1.14, created on 2013-12-10 13:36:28
         compiled from "vues\templates\accueil.htm" */ ?>
<?php /*%%SmartyHeaderCode:2479752a374c3f15f77-66409963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85bc714e9a8b03c0c49b1721bbeafed21626507d' => 
    array (
      0 => 'vues\\templates\\accueil.htm',
      1 => 1386682579,
      2 => 'file',
    ),
    'b5ab9a35d03044e79bcbc6a1bffaa336449e639c' => 
    array (
      0 => 'vues\\templates\\skeleton.htm',
      1 => 1386665979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2479752a374c3f15f77-66409963',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a374c4218b51_68588718',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a374c4218b51_68588718')) {function content_52a374c4218b51_68588718($_smarty_tpl) {?>﻿<!DOCTYPE html>
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

<body onload="initialiser_map()">
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
				<a class="brand" href="index.php"> <img alt="Tableau de bord Wide Team" src="web/img/logo20.png" /> <span class="hidden-phone">Paneau de configuration - E-SOS</span></a>
								
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
								
                                <li><a href="index.php?page=liste-alerte" class="dropdown-menu-sub-footer">Voir tous les alerte</a></li>	
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
						<li><a href="index.php?page=commissariat"><i class="icon-th-large icon-white"></i><span class="hidden-tablet"> Les alertes</span></a></li>
						<li><a href="index.php?page=commissariat"><i class="icon-th-large icon-white"></i><span class="hidden-tablet"> Les commissariats</span></a></li>
						<li><a href="index.php?page=hopital"><i class="icon-eye-open icon-white"></i><span class="hidden-tablet"> Les hopitaux</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-exclamation-sign icon-white"></i><span class="hidden-tablet"> Paramétrage</span></a>
							<ul>
								<li><a class="submenu" href="index.php?page=type_alerte"><i class="fa-icon-file-alt icon-white"></i><span class="hidden-tablet"> Types d'alrte</span></a></li>
							</ul>	
						</li>
						<li><a href="index.php?page=statistique"><i class="icon-edit icon-white"></i><span class="hidden-tablet"> Statistique</span></a></li>
						<li><a href="index.php?page=commissariat"><i class="icon-th-large icon-white"></i><span class="hidden-tablet"> List u utilisateurs</span></a></li>
						<li><a href="index.php?page=calendrier"><i class="icon-calendar icon-white"></i><span class="hidden-tablet"> Calendrier</span></a></li>
						<li><a href="index.php?page=connexion"><i class="icon-lock icon-white"></i><span class="hidden-tablet"> Page de connexion</span></a></li>
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
	
	<div class="row-fluid sortable">		
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="icon-user"></i><span class="break"></span>hopital</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="icon-remove"></i></a>
				</div>
			</div>
			<div class="box-content">
		        <div id="carte" style="width:100%; height:700px"></div>
			</div>
		</div><!--/span-->
	</div><!--/row-->
	<hr> <!-- Fin: Content -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
function initialiser_map() {
    //var latlng = new google.maps.LatLng(46.779231, 6.659431);
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

    <?php  $_smarty_tpl->tpl_vars['agent'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['agent']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['agent']->key => $_smarty_tpl->tpl_vars['agent']->value){
$_smarty_tpl->tpl_vars['agent']->_loop = true;
?>
    //création du marqueur
	var marqueur<?php echo $_smarty_tpl->tpl_vars['agent']->value->getId();?>
 = new google.maps.Marker({
		position: new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['agent']->value->getLastx();?>
,<?php echo $_smarty_tpl->tpl_vars['agent']->value->getLasty();?>
),
		map: carte,
		draggable: true,
		icon: "./web/img/icons_map/policier.png"
	});
	google.maps.event.addListener(marqueur<?php echo $_smarty_tpl->tpl_vars['agent']->value->getId();?>
, 'click', function() {
        alert("Nom : <?php echo $_smarty_tpl->tpl_vars['agent']->value->getNom();?>
 <?php echo $_smarty_tpl->tpl_vars['agent']->value->getPrenom();?>
");//message d'alerte
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