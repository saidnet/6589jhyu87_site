<?php
if(isset($_GET['action'])){
	if ($_GET['action']=='add') {
		$h= new Hopital();
		$h->setDesignation($_GET['designation']);
		$h->setX($_GET['posix']);
		$h->setY($_GET['posiy']);
		$bdd_manager->ajouter($h);
		echo "55";
	}
	elseif ($_GET['action']=='update') {
		$h= new Hopital();
		$h->setId($_GET['id']);
		$h->setDesignation($_GET['designation']);
		$h->setX($_GET['posix']);
		$h->setY($_GET['posiy']);
		$bdd_manager->update($h);
		echo '<strong>update</strong>';
	}
	elseif ($_GET['action']=='delete') {
		$h= new Hopital();
		$h->setId($_GET['id']);
		$bdd_manager->delete($h);
		echo 'delete';
	}
	elseif ($_GET['action']=='afficher') {
		$h= new Hopital();
		$h=$bdd_manager->getByID('hopital',$_GET['id']);
		$tpl->assign('hopital',$h);
		$tpl->display('afficher_hopital.htm');
	}
}
else{
	$r=$bdd_manager->getList('hopital');
	$tpl->assign('list',$r);
	$tpl->display('hopital.htm');
}