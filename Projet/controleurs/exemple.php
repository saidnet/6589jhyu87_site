<?php

	$r=new Role();
	//$r->setID(3);
	//$r->setLibelle('test by Said');
	$r=$bdd_manager->get('Role',3);
	//$bdd_manager->ajouter($r);
	//$bdd_manager->delete($r);
	//$bdd_manager->update($r);
	echo "ID= ".$r->getId()." & Lib= ".$r->getLibelle()."<br />";
	//print_r($r);
	$var='Said&';

	$tpl->assign('nm',$var);

	$tpl->display('exemple.htm');
?>