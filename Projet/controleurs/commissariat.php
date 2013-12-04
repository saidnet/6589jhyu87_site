<?php
//if($_GET['action']=='update'){
if(isset($_GET['action'])){

}
else{
	$r=$bdd_manager->getList('commissariat');
	$tpl->assign('list',$r);
	$tpl->display('commissariat.htm');
}