<?php

$con = new PDO('mysql:host=localhost;dbname=smarty2', 'root', '');

$tab_att=array();
$tab_type=array();
$nbr_att=0;
$resultat = $con->query("SHOW COLUMNS FROM user;");

while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC))
            {
            	//
            	$tab_att[] = $ligne['Field'];
            	$tab_type[] = $ligne['Type'];
            	//else 	$tab_att[] = "'".$ligne['Field']."'";
            }
            $nbr_att = count($tab_att);
        	$requete="INSERT INTO user VALUES( ";
        	for($i=0;$i<$nbr_att-1;$i++)
        	{
        		if($tab_type[$i]=='int(11)')
        			$requete = $requete.$tab_att[$i].", ";
        		else 	$requete = $requete."'".$tab_att[$i]."', ";
        	}

        	if($tab_type[$nbr_att - 1]=='int(11)')
        			$requete = $requete.$tab_att[$nbr_att - 1]." )";
        	else 	$requete = $requete."'".$tab_att[$nbr_att - 1]."' )";

        	echo $requete;