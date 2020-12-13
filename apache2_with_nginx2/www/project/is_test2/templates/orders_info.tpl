<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
{literal}
 table {border-collapse: collapse;} td {border: 2px solid black;}
{/literal}
	</style>
	<title>Document</title>
</head>
<body>
	<table>
		<tr><td>id заказа</td><td>{$order_id}</td></tr>
		<tr><td>Название магазина</td><td>{$rows['w_title']}</td></tr>
		<tr><td>Стоимость заказа для клиента</td><td>{$rows['client_full_cost']}</td></tr>
		<tr><td>Дата создания заказа</td><td>{$rows['date_create']}</td></tr>
		<tr><td>Название города доставки</td><td>{$rows['c_title']}</td></tr>
		<tr><td>Имя получателя</td><td>{$rows['client_fio']}</td></tr>
	</table>
</body>
</html>