<?php
if(isset($_GET['action'])){
	if ($_GET['action']=='add') {
		$rol= new Role();
		$rol->setDesignation($_GET['libelle']);
		$bdd_manager->ajouter($rol);
		echo "55";
	}
	elseif ($_GET['action']=='update') {
		$rol= new Role();
		$rol->setId($_GET['id']);
		$rol->setDesignation($_GET['libelle']);
		$bdd_manager->update($rol);
		echo '<strong>update</strong>';
	}
	elseif ($_GET['action']=='delete') {
		$rol= new Role();
		$rol->setId($_GET['id']);
		$bdd_manager->delete($rol);
		echo 'delete';
	}
}
else{
	$r=$bdd_manager->getList('role');
	$tpl->assign('list',$r);
	$tpl->display('role.htm');
}