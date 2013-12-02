<?php
define('SMARTY_DIR', 'outils/Smarty/libs/');
require_once(SMARTY_DIR . 'Smarty.class.php');
$tpl = new Smarty();
$tpl->debugging = 0;
$tpl->template_dir = 'vues/templates/';
$tpl->compile_dir = 'vues/templates_c/';
$tpl->config_dir = 'vues/configs/';
$tpl->cache_dir = 'vues/cache/';
$tpl->left_delimiter = '{';
$tpl->right_delimiter = '}';
$AGREGATE = ';';