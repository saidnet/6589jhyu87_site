<?php
session_start();
include('config/config.php');

mysql_connect($bd_host,$bd_login,$bd_mdp) or die("Impossible de se connecter : " . mysql_error());

if( !mysql_select_db($bd_name) )
	header("Location: install.php");

$con = new PDO($bd_type.':host='.$bd_host.';dbname='.$bd_name, $bd_login, $bd_mdp);

?>