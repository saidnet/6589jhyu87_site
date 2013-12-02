<?php
	if(isset($_POST['connecter'])){
		if($_POST['username']=='irisi2' AND $_POST['password']=='wideteam' ){
			$_SESSION['login']='irisi2';
			header("Location: index.php");
		}
		else
			$tpl->display('connexion.htm');
	}
	else
		$tpl->display('connexion.htm');
?>