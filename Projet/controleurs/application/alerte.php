<?php
if(isset($_GET('Latitude'))){
	$a= new Alerte();
	$a->setX($_GET['Latitude']);
	$a->setY($_GET['Longitude']);
	$a->setDescription($_GET['description']);
	$bdd_manager->ajouter($a);
}
else {
	$a= new Alerte();
	$a->setX($_POST['Latitude']);
	$a->setY($_POST['Longitude']);
	$a->setDescription($_POST['description']);
	$bdd_manager->ajouter($a);
}