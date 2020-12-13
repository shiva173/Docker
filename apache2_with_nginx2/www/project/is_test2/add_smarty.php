<?php  


define('SMARTY_DIR', 'smarty-3.1.35/libs/');

require_once(SMARTY_DIR . 'Smarty.class.php');

$smarty = new Smarty();

$smarty->template_dir = './templates/';
$smarty->compile_dir = './templates_c/';
$smarty->config_dir = './configs/';
$smarty->cache_dir = './cache/';

$smarty->debugging = true;



?>