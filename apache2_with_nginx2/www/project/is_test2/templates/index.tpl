<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
{literal}
 table {border-collapse: collapse;} td { border-right: 2px solid black; border-bottom: 2px solid black; padding: 5px;} 
{/literal}
</style>
	<title>is_test_3</title>
</head>
<body>
	<h1>{$rows}</h1>
	<table>
		<tr><td>id заказа</td><td>Номер заказа</td><td>Дата создания заказа</td></tr>
		{$content}
	</table>	
		{$forward}
		{$back}
</body>
</html>