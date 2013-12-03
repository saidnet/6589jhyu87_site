
<?php
	session_start();
	require_once("../config.php");
	if(check_session()){
	    session_destroy();
	    header("Location: index.php");
	}else{
		echo "djkdjdkj";
	}