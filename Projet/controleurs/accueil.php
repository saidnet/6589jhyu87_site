<?php
	$r=$bdd_manager->getListWhere('user',"WHERE disponibilite='1'");
	$tpl->assign('list',$r);
	$tpl->display('accueil.htm');