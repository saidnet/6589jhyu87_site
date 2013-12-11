<?php /* Smarty version Smarty-3.1.14, created on 2013-12-11 09:01:00
         compiled from "vues\templates\commissariat.htm" */ ?>
<?php /*%%SmartyHeaderCode:2128152a71cfd2b7b37-72466118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7727a231ba114cde3f3c4516e1de3bbe8fefc4e9' => 
    array (
      0 => 'vues\\templates\\commissariat.htm',
      1 => 1386446444,
      2 => 'file',
    ),
    'b5ab9a35d03044e79bcbc6a1bffaa336449e639c' => 
    array (
      0 => 'vues\\templates\\skeleton.htm',
      1 => 1386752454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2128152a71cfd2b7b37-72466118',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a71cfd84cfa4_49238049',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a71cfd84cfa4_49238049')) {function content_52a71cfd84cfa4_49238049($_smarty_tpl) {?><!DOCTYPE html>
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
				<a class="brand" href="index.php"> <img alt="Tableau de bord " src="web/img/logo20.png" /> <span class="hidden-phone">Paneau de configuration - E-SOS</span></a>
								
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
						<li><a href="index.php?page=commissariat"><i class="icon-exclamation-sign icon-white"></i><span class="hidden-tablet"> Les alertes</span></a></li>
						<li><a href="index.php?page=commissariat"><i class="icon-th-large icon-white"></i><span class="hidden-tablet"> Les commissariats</span></a></li>
						<li><a href="index.php?page=hopital"><i class="icon-eye-open icon-white"></i><span class="hidden-tablet"> Les hopitaux</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-wrench icon-white"></i><span class="hidden-tablet"> Paramétrage</span></a>
							<ul>
								<li><a class="submenu" href="index.php?page=type_alerte"><i class="fa-icon-file-alt icon-white"></i><span class="hidden-tablet"> Types d'alrte</span></a></li>
							</ul>	
						</li>
						<li><a href="index.php?page=statistique"><i class=" icon-picture icon-white"></i><span class="hidden-tablet"> Statistique</span></a></li>
						<li><a href="index.php?page=commissariat"><i class="icon-th-large icon-white"></i><span class="hidden-tablet"> Liste utilisateurs</span></a></li>
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
				<a href="index.php">Accuiel</a> <span class="divider">/</span>
			</li>
			<li>
				<a href="index.php?page=commissariat">Les commissariat</a>
			</li>
		</ul>
		<hr>				
	</div>
	<div>
		<a class="btn btn-success" id="" href="javascript:Ajouter();"><i class="icon-plus-sign icon-white"></i> Ajouter une nouvelle commissariat</a>
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
				<table class="table table-striped table-bordered bootstrap-datatable datatable table-hover" id="commissariat">
					<thead>
							<th>Designation</th>
							<th>Position X</th>
							<th>Position Y</th>
							<th>Actions</th>
						</tr>
					</thead>   
					<tbody>
					<?php  $_smarty_tpl->tpl_vars['commissariat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['commissariat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['commissariat']->key => $_smarty_tpl->tpl_vars['commissariat']->value){
$_smarty_tpl->tpl_vars['commissariat']->_loop = true;
?>
											
						<tr id="<?php echo $_smarty_tpl->tpl_vars['commissariat']->value->getId();?>
" class="odd gradeX">
							<td><?php echo utf8_encode($_smarty_tpl->tpl_vars['commissariat']->value->getDesignation());?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['commissariat']->value->getX();?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['commissariat']->value->getY();?>
</td>
							<td class="center">
								<a class="btn btn-success" href="index.php?page=commissariat&action=afficher&id=<?php echo $_smarty_tpl->tpl_vars['commissariat']->value->getId();?>
">
									<i class="icon-zoom-in icon-white afficher"></i>  
								</a>
								<a class="btn btn-info edit" href="javascript:Update(<?php echo $_smarty_tpl->tpl_vars['commissariat']->value->getId();?>
);">
									<i class="icon-edit icon-white"></i>  
								</a>
								<a class="btn btn-danger delete" href="javascript:Delete(<?php echo $_smarty_tpl->tpl_vars['commissariat']->value->getId();?>
);">
									<i class="icon-trash icon-white"></i> 
								</a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>            
			</div>
		</div><!--/span-->
	</div><!--/row-->
	<hr> <!-- Fin: Content -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->
<script type="text/javascript">

function Ajouter(){
	$('tbody').prepend('<tr class=""><td><input id="designation" value="" type="text"></td><td><input id="posix" value="" type="text"></td><td><input id="posiy" value="" type="text"></td><td class="center"><a class="btn btn-success" href="javascript:Save();"> Save<i class="icon-zoom-in icon-white "></i></a></td></tr>');
}
function Save(){
	$.ajax({
		type: 'GET',
		url: 'index.php?page=commissariat&action=add&designation=' + $('#designation').val() + '&posix=' + $('#posix').val() + '&posiy=' + $('#posiy').val() ,
		timeout: 3000,
		success: function(data) {
		 	// return id de l'enregistrement
		 	$('tbody tr:eq(0)').attr('id',data);
			$('tbody tr:eq(0) td:eq(0)').html($('#designation').val());
			$('tbody tr:eq(0) td:eq(1)').html($('#posix').val());
			$('tbody tr:eq(0) td:eq(2)').html($('#posiy').val());
			$('tbody tr:eq(0) td:eq(3)').html('<a class="btn btn-success" href="index.php?page=commissariat&action=afficher&id='+data+'">'+
									'<i class="icon-zoom-in icon-white"></i>'+  
								'</a>'+
								'<a class="btn btn-info edit" href="javascript:Update('+data+');">'+
									'<i class="icon-edit icon-white"></i> '+ 
								'</a>'+
								'<a class="btn btn-danger " href="javascript:Delete('+data+');">'+
									'<i class="icon-trash icon-white"></i>'+ 
								'</a>');
			alert(data); },
		error: function() {
			alert('La requête n\'a pas abouti'); }

	});
	
}
function Delete(id){
	$.ajax({
		type: 'GET',
		url: 'index.php?page=commissariat&action=delete&id='+id,
		timeout: 3000,
		success: function(data) {
		 	$('#'+id).remove();
			alert(data); 
		},
		error: function() {
			alert('La requête n\'a pas abouti'); }
	});
}
function Update(id){
	$('#'+id+' td:eq(0)').html('<input id="designation" value="'+$('#'+id+' td:eq(0)').html()+'" type="text">');
	$('#'+id+' td:eq(1)').html('<input id="posix" value="'+$('#'+id+' td:eq(1)').html()+'" type="text">');
	$('#'+id+' td:eq(2)').html('<input id="posiy" value="'+$('#'+id+' td:eq(2)').html()+'" type="text">');
	$('#'+id+' td:eq(3)').html('<a class="btn btn-success" href="javascript:Modifier('+id+');"> Enregistrer<i class="icon-zoom-in icon-white "></i></a>');
}
function Modifier(id){
	$.ajax({
		type: 'GET',
		url: 'index.php?page=commissariat&action=update&id='+id+'&designation=' + $('#designation').val() + '&posix=' + $('#posix').val() + '&posiy=' + $('#posiy').val() ,
		timeout: 3000,
		success: function(data) {
		 	
			$('#'+id+' td:eq(0)').html($('#designation').val());
			$('#'+id+' td:eq(1)').html($('#posix').val());
			$('#'+id+' td:eq(2)').html($('#posiy').val());
			$('#'+id+' td:eq(3)').html('<a class="btn btn-success" href="index.php?page=commissariat&action=afficher&id='+id+'">'+
									'<i class="icon-zoom-in icon-white afficher"></i>'+  
								'</a>'+
								'<a class="btn btn-info edit" href="javascript:Update('+id+');">'+
									'<i class="icon-edit icon-white"></i> '+ 
								'</a>'+
								'<a class="btn btn-danger delete" href="javascript:Delete('+id+');">'+
									'<i class="icon-trash icon-white"></i>'+ 
								'</a>');
			alert(data); },
		error: function() {
			alert('La requête n\'a pas abouti'); }

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