<?php
	require('config/init.php');

if(isset($_GET['page']) and $_GET['page']=='connexion'){
	require 'controleurs/connexion.php';
}
else if (isset($_SESSION['login']))
{
	if (isset($_GET['page']))
    {
        require 'controleurs/' . $_GET['page'] . '.php';
    }
	else
	{
		require 'controleurs/accueil.php';
	}
}
else
{
	require 'controleurs/connexion.php';
	//require('controleurs/exemple.php');
}

?>