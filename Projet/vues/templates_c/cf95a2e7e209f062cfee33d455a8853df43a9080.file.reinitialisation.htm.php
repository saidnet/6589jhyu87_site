<?php /* Smarty version Smarty-3.1.14, created on 2013-12-04 11:26:07
         compiled from "vues\templates\reinitialisation.htm" */ ?>
<?php /*%%SmartyHeaderCode:6921529f101ca31892-83070156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf95a2e7e209f062cfee33d455a8853df43a9080' => 
    array (
      0 => 'vues\\templates\\reinitialisation.htm',
      1 => 1386156363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6921529f101ca31892-83070156',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_529f101cab04e5_78077507',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529f101cab04e5_78077507')) {function content_529f101cab04e5_78077507($_smarty_tpl) {?>﻿


<?php echo $_smarty_tpl->getSubTemplate ('head.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>Vous devez avoir <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> permis d'utiliser ce site.</p>
				</div>
			</noscript>
			<div id="content" class="span10"> <!-- debut: Content -->
				<div><hr>
					<ul class="breadcrumb">
						<li><a href="#">Accuiel</a> <span class="divider">|</span></li>
						<li><a href="#">Connexion</a><span class="divider">|</span></li>
						<li>Mot de passe oublié </li>
					</ul><hr>
				</div>
				<div> 
					<a class="btn btn-success" href="#"><i class="icon-plus-sign icon-white"></i> Afficher des indications</a>
				</div>
				<div class="row-fluid sortable">		
					<div class="box span12">
						<div class="box-header" data-original-title>
							<h2><i class="icon-user"></i><span class="break"></span>Request de mot de passe</h2>
							<div class="box-icon">
								<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
								<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
								<a href="#" class="btn-close"><i class="icon-remove"></i></a>
							</div>
						</div>
						<div class="box-content">
							<h2>Oubli du mot de passe</h2>
							<p>Vous avez oublié votre mot de passe ? Pas de panique !</p>
							<form class="form-horizontal" action="#" method="post">
								<fieldset>
									<div class="control-group">
										<label class="control-label span3" for="focusedInput">Nom d'utilisateur ou adresse e-mail :</label>
										<div class="controls">
										  <input class="input-xlarge focused" id="focusedInput" type="email" name="email">
										</div>
									</div>
									<div class="form-actions">
									<button type="submit" name="bouton" value="Enregistrer" class="btn btn-primary" >Réinitialiser le mot de passe</button>
									<button type="reset" name="bouton" value="Fermer" class="btn" >Fermer</button>
							    </div>
								</fieldset>
							</form>
						</div>
					</div><!--/span-->
				</div> <!-- fin: ow-fluid -->
			</div><!--fin: Content-->				
		</div><!--/.fluid-container-->
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ('javascript.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>