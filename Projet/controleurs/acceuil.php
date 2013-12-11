<?php
$policiers=array();
$pompiers=array();
$commissariats=array();
$hopitals=array();
$new_alertes=array();
$alertes_en_cours=array();

if(isset($_POST['envoyer'])){
	if(isset($_POST['policiers'])){
		$policiers=$bdd_manager->getListWhere('user',"WHERE type='l' and disponibilite='1'");
	}
	if(isset($_POST['pompiers'])){
		$pompiers=$bdd_manager->getListWhere('user',"WHERE type='m' and disponibilite='1'");
	}
	if(isset($_POST['commissariats'])){
		$commissariats=$bdd_manager->getList('commissariat');
	}
	if(isset($_POST['hopitals'])){
		$hopitals=$bdd_manager->getList('hopital');
	}
	if(isset($_POST['new_alertes'])){
		$new_alertes=$bdd_manager->getListWhere('alerte',"WHERE etat='a' ");
	}
	if(isset($_POST['alertes_en_cours'])){
		$alertes_en_cours=$bdd_manager->getListWhere('alerte',"WHERE etat='c' ");
	}
}
else{
	$policiers=$bdd_manager->getListWhere('user',"WHERE type='l' and disponibilite='1'");
	$pompiers=$bdd_manager->getListWhere('user',"WHERE type='m' and disponibilite='1'");
	$commissariats=$bdd_manager->getList('commissariat');
	$hopitals=$bdd_manager->getList('hopital');
	$new_alertes=$bdd_manager->getListWhere('alerte',"WHERE etat='a' ");
	$alertes_en_cours=$bdd_manager->getListWhere('alerte',"WHERE etat='c' ");
}


$tpl->assign('policiers',$policiers);
$tpl->assign('pompiers',$pompiers);
$tpl->assign('commissariats',$commissariats);
$tpl->assign('hopitals',$hopitals);
$tpl->assign('new_alertes',$new_alertes);
$tpl->assign('alertes_en_cours',$alertes_en_cours);

$tpl->display('acceuil.htm');