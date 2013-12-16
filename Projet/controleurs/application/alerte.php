<?php
<<<<<<< HEAD
if(isset($_GET['Latitude'])){
=======
if(isset($_GET('Latitude'))){
>>>>>>> 597dea0f5f311dfb7f00245d91142ea2cd9baa89
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