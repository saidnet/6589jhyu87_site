<?php
function utilisateur($username)
		{
			$utilisateur = array();
			$query = mysql_query("select login,password from user where login=".$username."") or die(mysql_error());
			while ( $rows = mysql_fetch_assoc($query)) {
				$utilisateur[] = $rows;
		}
		return $utilisateur;
		}  

?>