<?php
if(isset($_GET['action'])){
	if ($_GET['action']=='add') {
		$t= new Type_alerte();
		$t->setLibelle($_GET['libelle']);
		$bdd_manager->ajouter($t);
		echo "55";
	}
	elseif ($_GET['action']=='update') {
		$t= new Type_alerte();
		$t->setId($_GET['id']);
		$t->setLibelle($_GET['libelle']);
		$bdd_manager->update($t);
		echo 'update';
	}
	elseif ($_GET['action']=='delete') {
		$t= new Type_alerte();
		$t->setId($_GET['id']);
		$bdd_manager->delete($t);
		echo 'delete';
	}
}
else{
	$r=$bdd_manager->getList('type_alerte');
	$tpl->assign('list',$r);
	$tpl->display('type_alerte.htm');
}