<?php
if(isset($_GET['action'])){
	if ($_GET['action']=='add') {
		$a= new Alerte();
		
		$bdd_manager->ajouter($a);
		echo "Alerte ajouter :)\n";
		echo date('Y-m-d');
	}
	elseif ($_GET['action']=='update') {
		$a= new Alerte();
		$bdd_manager->update($a);
	}
	elseif ($_GET['action']=='delete') {
		$a= new Alerte();
		$a->setId($_GET['id']);
		$bdd_manager->delete($a);
		echo 'delete';
	}
	elseif ($_GET['action']=='afficher') {
		$a= new Alerte();
		$a=$bdd_manager->getByID('alerte',$_GET['id']);
		$tpl->assign('alerte',$a);
		$tpl->display('afficher_alerte.htm');
	}
	elseif ($_GET['action']=='verif') {
		$a= new Alerte();
		$r=$bdd_manager->getListWhere('alerte',"WHERE etat='a' ");
		/*
		$n=count($r);
		$a=$r[0];
		
		$var="array('n' => '".$n."'";
		$var+=",'id'=> '".$a->getId()."'";
		$var+=",'description'=> '".$a->getDescription()."'";
		$var+=",'etat'=> '".$a->getEtat()."'";
		$var+=",'nature'=> '".$a->getNature()."'";
		$var+=")";

		echo json_encode($var);
		
		echo "OK";
		$arr=array('said','Fouad');
		echo json_encode(array('n' => 'test', 'tab' => $arr ));

		echo json_encode(array('n' => 'test' ,'id'=> $a->getId(),'description'=> $a->getDescription(),'etat'=> $a->getEtat(),'nature'=> $a->getNature()));
		*/
		foreach($r as $a){
			$lig['id']=$a->getId();
			$lig['description']=$a->getDescription();
			$lig['type_libelle']=$a->getTypeLibelle();
			$res[]=$lig;
		}
		
		echo json_encode($res);
	}
}
else{
	$r=$bdd_manager->getList('alerte');
	$tpl->assign('list',$r);
	$tpl->display('alertes.htm');
}