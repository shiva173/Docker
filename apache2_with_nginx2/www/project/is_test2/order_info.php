<?php  

require_once('connect_to_db.php');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($mysqli->connect_errno) {
	echo "Error connection";
	echo "Номер ошибки: " . $mysqli->connect_errno . "\n";
	echo "Ошибка: " . $mysqli->connect_error . "\n";

	exit;
}

$order_id = $_GET['id'];

$sql = "select r.id, number, w.title, date_create, client_full_cost, client_fio from orders r
join webshops w on w.id  = r.webshop_id
join cities c on c.id = r.city_delivery_id
where r.id = " . $order_id;

echo $sql;


if (!$result = $mysqli->query($sql)) {
	echo "Bad request";

	exit;
}

$rows = $result->fetch_assoc();
//////////////////////////////////////////////////////////////////////////
$request_for_title = "select title from city where r.id = " . $order_id;

if (!$result = $mysqli->query($sql)) {
	echo "Bad request";

	exit;
}

echo $request_for_title;
///////////////////////////////////////////////////////////////////////////

echo "<style> table {border-collapse: collapse;} td {border: 2px solid black;} </style>";


echo "<table>";
	echo "<tr><td>id заказа</td><td>" . $order_id . "</td></tr>";
	echo "<tr><td>Название магазина</td><td>" . $rows['title'] . "</td></tr>";
	echo "<tr><td>Стоимость заказа для клиента</td><td>" . $rows['client_full_cost'] . "</td></tr>";
	echo "<tr><td>Дата создания заказа</td><td>" . $rows['date_create'] . "</td></tr>";
	echo "<tr><td>Название города доставки</td><td>" . "problema" . "</td></tr>";
	echo "<tr><td>Имя получателя</td><td>" . $rows['client_fio'] . "</td></tr>";
echo "</table>";

?>