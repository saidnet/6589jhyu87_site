<?php
$policiers=array();
$pompiers=array();
$commissariats=array();
$hopitals=array();
$new_alertes=array();
$alertes_en_cours=array();

$c1="0";
$c2="0";
$c3="0";
$c4="0";
$c5="0";
$c6="0";

if(isset($_POST['envoyer'])){
	if(isset($_POST['policiers'])){
		$policiers=$bdd_manager->getListWhere('user',"WHERE type='l' and disponibilite='1'");
		$c1="1";
	}
	if(isset($_POST['pompiers'])){
		$pompiers=$bdd_manager->getListWhere('user',"WHERE type='m' and disponibilite='1'");
		$c2="1";
	}
	if(isset($_POST['commissariats'])){
		$commissariats=$bdd_manager->getList('commissariat');
		$c3="1";
	}
	if(isset($_POST['hopitals'])){
		$hopitals=$bdd_manager->getList('hopital');
		$c4="1";
	}
	if(isset($_POST['new_alertes'])){
		$new_alertes=$bdd_manager->getListWhere('alerte',"WHERE etat='a' ");
		$c5="1";
	}
	if(isset($_POST['alertes_en_cours'])){
		$alertes_en_cours=$bdd_manager->getListWhere('alerte',"WHERE etat='c' ");
		$c6="1";
	}
}
else{
	$policiers=$bdd_manager->getListWhere('user',"WHERE type='l' and disponibilite='1'");
	$pompiers=$bdd_manager->getListWhere('user',"WHERE type='m' and disponibilite='1'");
	$commissariats=$bdd_manager->getList('commissariat');
	$hopitals=$bdd_manager->getList('hopital');
	$new_alertes=$bdd_manager->getListWhere('alerte',"WHERE etat='a' ");
	$alertes_en_cours=$bdd_manager->getListWhere('alerte',"WHERE etat='c' ");

	$c1="1";
	$c2="1";
	$c3="1";
	$c4="1";
	$c5="1";
	$c6="1";
}


$tpl->assign('policiers',$policiers);
$tpl->assign('pompiers',$pompiers);
$tpl->assign('commissariats',$commissariats);
$tpl->assign('hopitals',$hopitals);
$tpl->assign('new_alertes',$new_alertes);
$tpl->assign('alertes_en_cours',$alertes_en_cours);

$tpl->assign('c1',$c1);
$tpl->assign('c2',$c2);
$tpl->assign('c3',$c3);
$tpl->assign('c4',$c4);
$tpl->assign('c5',$c5);
$tpl->assign('c6',$c6);

$tpl->display('acceuil.htm');