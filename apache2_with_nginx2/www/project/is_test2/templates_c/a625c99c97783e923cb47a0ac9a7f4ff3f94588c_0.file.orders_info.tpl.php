<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-12 14:56:05
  from '/var/www/html/is_test2/templates/orders_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd4da05b0ddf8_44330271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a625c99c97783e923cb47a0ac9a7f4ff3f94588c' => 
    array (
      0 => '/var/www/html/is_test2/templates/orders_info.tpl',
      1 => 1607784947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd4da05b0ddf8_44330271 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>

 table {border-collapse: collapse;} td {border: 2px solid black;}

	</style>
	<title>Document</title>
</head>
<body>
	<table>
		<tr><td>id заказа</td><td><?php echo $_smarty_tpl->tpl_vars['order_id']->value;?>
</td></tr>
		<tr><td>Название магазина</td><td><?php echo $_smarty_tpl->tpl_vars['rows']->value['w_title'];?>
</td></tr>
		<tr><td>Стоимость заказа для клиента</td><td><?php echo $_smarty_tpl->tpl_vars['rows']->value['client_full_cost'];?>
</td></tr>
		<tr><td>Дата создания заказа</td><td><?php echo $_smarty_tpl->tpl_vars['rows']->value['date_create'];?>
</td></tr>
		<tr><td>Название города доставки</td><td><?php echo $_smarty_tpl->tpl_vars['rows']->value['c_title'];?>
</td></tr>
		<tr><td>Имя получателя</td><td><?php echo $_smarty_tpl->tpl_vars['rows']->value['client_fio'];?>
</td></tr>
	</table>
</body>
</html><?php }
}
