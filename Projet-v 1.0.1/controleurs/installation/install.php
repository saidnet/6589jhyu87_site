<?php
session_start();
include('config/config.php');

if (isset($_GET['page']))
{
	require 'controleurs/installation/'.$_GET['page'].'.php';
}
else
{
	require 'controleurs/installation/etape1.php';
}
?>