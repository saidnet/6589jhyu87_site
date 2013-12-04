<?php
if($_GET['action']=='update'){

}
else{
	$r=$bdd_manager->getList('commissariat');
	$tpl->assign('list',$r);
	$tpl->display('commissariat.htm');
}