<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-12 11:31:50
  from '/var/www/html/is_test2/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd4aa267f3898_55173248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe5c9449cb32b71ce37d9b36f2829fad8800b5e7' => 
    array (
      0 => '/var/www/html/is_test2/templates/index.tpl',
      1 => 1607772706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd4aa267f3898_55173248 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">

 table {border-collapse: collapse;} td { border-right: 2px solid black; border-bottom: 2px solid black; padding: 5px;} 

</style>
	<title>is_test_3</title>
</head>
<body>
	<h1><?php echo $_smarty_tpl->tpl_vars['rows']->value;?>
</h1>
	<table>
		<tr><td>id заказа</td><td>Номер заказа</td><td>Дата создания заказа</td></tr>
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	</table>	
		<?php echo $_smarty_tpl->tpl_vars['forward']->value;?>

		<?php echo $_smarty_tpl->tpl_vars['back']->value;?>

</body>
</html><?php }
}
