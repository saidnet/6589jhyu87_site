<?php
	require('config/init.php');


if (isset($_GET['page']))
{
    require 'controleurs/application/' . $_GET['page'] . '.php';
}
else
{
	require 'controleurs/application/acceuil.php';
}