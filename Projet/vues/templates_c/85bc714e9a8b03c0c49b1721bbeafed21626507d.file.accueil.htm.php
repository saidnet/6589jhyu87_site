<?php /* Smarty version Smarty-3.1.14, created on 2013-11-27 11:46:01
         compiled from "vues\templates\accueil.htm" */ ?>
<?php /*%%SmartyHeaderCode:54945295db79890dd0-34973975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85bc714e9a8b03c0c49b1721bbeafed21626507d' => 
    array (
      0 => 'vues\\templates\\accueil.htm',
      1 => 1385552614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54945295db79890dd0-34973975',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5295db79a40873_12306260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5295db79a40873_12306260')) {function content_5295db79a40873_12306260($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('head.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
				<a class="brand" href="index.html"> <img alt="Tableau de bord Wide Team" src="web/img/logo20.png" /> <span class="hidden-phone">Tableau de bord Wide Team</span></a>
								
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
                            	<li><a href="#">+ <i class="icon-user"></i> <span class="message">Nouvel utilisateur</span><span class="time">1 min</span> 
                                    </a>
                                </li>
                                <li><a href="#">+ <i class="icon-user"></i> <span class="message">Nouvel utilisateur</span><span class="time">5 min</span> 
                                    </a>
                                </li>
                                <li>
                                	<a href="#">+ <i class="icon-user"></i> <span class="message">Nouvel utilisateur</span><span class="time">45 min</span> 
                                	</a>
                                </li>						
								
                                <li><a class="dropdown-menu-sub-footer">Voir tous les avis</a></li>	
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
								<li><a href="#"><i class="icon-user"></i> Profile</a></li>
								<li><a href="login.html"><i class="icon-off"></i> Déconnexion</a></li>
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
						<li><a href="#"><i class="icon-edit icon-white"></i><span class="hidden-tablet"> Statistique</span></a></li>
						
						<li><a href="#"><i class="icon-calendar icon-white"></i><span class="hidden-tablet"> Calendar</span></a></li>
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
					<li>
						<a href="#">Accuiel</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Listes des utilisateurs</a>
					</li>
				</ul>
				<hr>				
			</div>
			<div> 
				<a class="btn btn-success" href="#">
                                <i class="icon-plus-sign icon-white"></i> Ajouter Un utilisateur
                            </a>
                            <a class="btn" href="#">
                                <i class=" icon-zoom-in"></i> Afficher les utilisaturs
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="icon-zoom-in icon-white"></i> Aficher les alerte
                            </a>
			</div>
			
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="icon-user"></i><span class="break"></span>Membres</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable table-hover">
						  <thead>
							  <tr>
								  <th>Utilisateur</th>
								  <th>Date d'inscription</th>
								  <th>Rôle</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
								<td>DANI Fouad</td>
								<td class="center">2012/01/01</td>
								<td class="center">Responsable de livrable</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
									</a>
									<a class="btn btn-info" href="#">
										<i class="icon-edit icon-white"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="icon-trash icon-white"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>MOUNJI Said</td>
								<td class="center">2012/01/01</td>
								<td class="center">Chef projet</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
									</a>
									<a class="btn btn-info" href="#">
										<i class="icon-edit icon-white"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="icon-trash icon-white"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>ERRAJI Soukaina</td>
								<td class="center">2012/01/01</td>
								<td class="center">Responsable de communication</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
									</a>
									<a class="btn btn-info" href="#">
										<i class="icon-edit icon-white"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="icon-trash icon-white"></i> 
									</a>
								</td>
								</td>
							</tr>
							<tr>
								<td>ROUMANI Abdessamade</td>
								<td class="center">2012/01/01</td>
								<td class="center">Responsable de code </td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="icon-edit icon-white"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="icon-trash icon-white"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>ELGDAWNY Achraf</td>
								<td class="center">2012/01/01</td>
								<td class="center">Responsable de code </td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="icon-edit icon-white"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="icon-trash icon-white"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>Ali mohamed</td>
								<td class="center">2012/02/01</td>
								<td class="center">Membre</td>
								<td class="center">
									<span class="label label-important">Banned</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="icon-edit icon-white"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="icon-trash icon-white"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>Walid hachmi </td>
								<td class="center">2012/02/01</td>
								<td class="center">membre</td>
								<td class="center">
									<span class="label label-important">Banned</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="icon-edit icon-white"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="icon-trash icon-white"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>Bourjila Safa</td>
								<td class="center">2012/03/01</td>
								<td class="center">Membre</td>
								<td class="center">
									<span class="label label-warning">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="icon-edit icon-white"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="icon-trash icon-white"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>SALIM Hamza</td>
								<td class="center">2012/03/01</td>
								<td class="center">Administrateur</td>
								<td class="center">
									<span class="label label-warning">Bannier</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="icon-edit icon-white"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="icon-trash icon-white"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>BLOUK Daoud</td>
								<td class="center">2012/03/01</td>
								<td class="center">Member</td>
								<td class="center">
									<span class="label label-warning">Bannier</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="icon-edit icon-white"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="icon-trash icon-white"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>BERTIT Sabir</td>
								<td class="center">2012/03/01</td>
								<td class="center">Member</td>
								<td class="center">
									<span class="label label-warning">Bannier</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="icon-edit icon-white"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="icon-trash icon-white"></i> 
									</a>
								</td>
							</tr>
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
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


	<?php echo $_smarty_tpl->getSubTemplate ('javascript.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
</body>
</html>
<?php }} ?>