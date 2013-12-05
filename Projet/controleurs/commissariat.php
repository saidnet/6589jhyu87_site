<?php
//if($_GET['action']=='update'){
if(isset($_GET['action'])){

	echo $_GET['posix'].' and '.$_GET['posiy'];
}
else{
	$r=$bdd_manager->getList('commissariat');
	$tpl->assign('list',$r);
	$tpl->display('commissariat.htm');
}