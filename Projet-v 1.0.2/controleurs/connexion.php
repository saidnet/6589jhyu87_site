<?php
	include('modeles/Connect.php');
	include('modeles/User.php');
	$postpassword=md5($_POST['password']);
	$postlogin=$_POST['login'];

	foreach (utilisateur($postlogin) as $utilisateur) {
		$login=$utilisateur['login'];
		$password=$utilisateur['password'];
	}
		
	if(isset($_POST['connecter'])){
		if($_POST['username']==$login AND $postpassword==$password ){
			$_SESSION['login']=$login;
			header("Location: index.php");
		}
		else
			$tpl->display('connexion.htm');
	}
	else
		$tpl->display('connexion.htm'); 
?>