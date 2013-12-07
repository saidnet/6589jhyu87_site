<?php
session_destroy();
$tpl->assign('msg','');
$tpl->display('connexion.htm');