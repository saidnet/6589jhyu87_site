<?php
	if(isset($_POST['connecter'])){
		$_SESSION['login']='irisi2';
		header("Location: index.php");
	}
	else
		$tpl->display('connexion.htm');
?>