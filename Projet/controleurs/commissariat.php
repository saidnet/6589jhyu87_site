<?php
//if($_GET['action']=='update'){
if(isset($_GET['action'])){
	if ($_GET['action']=='add') {
		$c= new Commissariat();
		$c->setDesignation($_GET['designation']);
		$c->setX($_GET['posix']);
		$c->setY($_GET['posiy']);
		$bdd_manager->ajouter($c);
		echo "55";
	}
	elseif ($_GET['action']=='update') {
		$c= new Commissariat();
		$c->setId($_GET['id']);
		$c->setDesignation($_GET['designation']);
		$c->setX($_GET['posix']);
		$c->setY($_GET['posiy']);
		$bdd_manager->update($c);
		echo '<strong>update</strong>';
	}
	elseif ($_GET['action']=='delete') {
		$c= new Commissariat();
		$c->setId($_GET['id']);
		$bdd_manager->delete($c);
		echo 'delete';
	}
	elseif ($_GET['action']=='afficher') {
		$c= new Commissariat();
		$c=$bdd_manager->getByID('commissariat',$_GET['id']);
		$tpl->assign('commissariat',$c);
		$tpl->display('afficher_commissariat.htm');
	}
}
else{
	$r=$bdd_manager->getList('commissariat');
	$tpl->assign('list',$r);
	$tpl->display('commissariat.htm');
}