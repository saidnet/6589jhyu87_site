<?php /* Smarty version Smarty-3.1.14, created on 2013-11-27 14:42:03
         compiled from "vues\templates\connexion.htm" */ ?>
<?php /*%%SmartyHeaderCode:286895295d66eb20eb4-27978016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db58c8b98d9cf7a81f14080402fac67b1c7633fc' => 
    array (
      0 => 'vues\\templates\\connexion.htm',
      1 => 1385560508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286895295d66eb20eb4-27978016',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5295d66ecab5c9_52118650',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5295d66ecab5c9_52118650')) {function content_5295d66ecab5c9_52118650($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('head.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body>
	 	<div class="container-fluid">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="index.html"><i class="icon-home"></i></a>
						<a href="#"><i class="icon-cog"></i></a>
					</div>
					<h2>Connectez-vous à votre compte</h2>
					<form class="form-horizontal" action="index.php?page=connexion" method="post">
						<fieldset>
							
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="icon-user"></i></span>
								<input class="input-large span10" name="username" id="username" type="text" placeholder="type utilisateur"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="icon-lock"></i></span>
								<input class="input-large span10" name="password" id="password" type="password" placeholder="type password"/>
							</div>
							<div class="clearfix"></div>
							
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Se souvenir de moi</label>

							<div class="button-login">	
								<button type="submit" name="connecter" class="btn btn-primary"><i class="icon-off icon-white"></i> Connexion</button>
							</div>
							<div class="clearfix"></div>
					</form>
					<hr>
					<h3>Mot de passe oublié ?</h3>
					<p>
						Pas de problème, <a href="#">cliquer ici </a> pour obtenir un nouveau mot de passe.
					</p>	
				</div><!--/span-->
			</div><!--/row-->
			
				</div><!--/fluid-row-->
				
	</div><!--/.fluid-container-->
		
	<?php echo $_smarty_tpl->getSubTemplate ('javascript.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	
</body>
</html><?php }} ?>