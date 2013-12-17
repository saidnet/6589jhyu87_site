<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 15:20:01
         compiled from "vues\templates\afficher_commissariat.htm" */ ?>
<?php /*%%SmartyHeaderCode:1147352b06ba1cb87a7-81639128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4825d6024c99865e4dbf225d89dc139d76f87592' => 
    array (
      0 => 'vues\\templates\\afficher_commissariat.htm',
      1 => 1387293223,
      2 => 'file',
    ),
    'b5ab9a35d03044e79bcbc6a1bffaa336449e639c' => 
    array (
      0 => 'vues\\templates\\skeleton.htm',
      1 => 1387293415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1147352b06ba1cb87a7-81639128',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b06ba215fff8_19611476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b06ba215fff8_19611476')) {function content_52b06ba215fff8_19611476($_smarty_tpl) {?><!DOCTYPE html>
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
			<li>
				<a href="index.php?page=commissariat">Afficher commissariat</a>
			</li>
		</ul>
		<hr>				
	</div>
	
	<div class="row-fluid sortable">		
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="icon-user"></i><span class="break"></span>Commissariat</h2>
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
    var latlng = new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['commissariat']->value->getX();?>
,<?php echo $_smarty_tpl->tpl_vars['commissariat']->value->getY();?>
);
    //objet contenant des propriétés avec des identificateurs prédéfinis dans Google Maps permettant
    //de définir des options d'affichage de notre carte
    var options = {
        center: latlng,
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    
    //constructeur de la carte qui prend en paramêtre le conteneur HTML
    //dans lequel la carte doit s'afficher et les options
    var carte = new google.maps.Map(document.getElementById("carte"), options);

    //création du marqueur
	var marqueur = new google.maps.Marker({
		position: new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['commissariat']->value->getX();?>
,<?php echo $_smarty_tpl->tpl_vars['commissariat']->value->getY();?>
),
		map: carte,
		draggable: true,
		icon: "./web/img/icons_map/commissariat.png"
	});
	google.maps.event.addListener(marqueur, 'click', function() {
        alert("Le marqueur a été cliqué.");//message d'alerte
    });
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