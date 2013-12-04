<?php
	$msg=null;
	if(isset($_POST['connecter'])){
		$r=$bdd_manager->getWhere('User',"WHERE login = '".$_POST['username']."'" );
		if(count($r)==1){	
			if(md5($_POST['password'])==$r[0]->getPassword() ){
				$_SESSION['login']=$_POST['username'];
				header("Location: index.php");
			}
			else{
				$msg="le mot de passe est incorecte";
				$tpl->assign('msg',$msg);
				$tpl->display('connexion.htm');

			}
		}
		else{
			$msg="le nom de l'utilisateur est incorecte";
			$tpl->assign('msg',$msg);
			$tpl->display('connexion.htm');
		}
	}
	else{
		$tpl->assign('msg','');
		$tpl->display('connexion.htm');
	}
?>