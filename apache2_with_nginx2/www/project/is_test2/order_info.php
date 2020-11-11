<?php  

require_once('connect_to_db.php');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

require_once('check_connection.php');

$order_id = $_GET['id'];

$sql = "select r.id, number, c.title as ctitle, w.title as wtitle, date_create, client_full_cost, client_fio from orders r join webshops w on w.id  = r.webshop_id join cities c on c.id = r.city_delivery_id where r.id = " . $order_id;


if (!$result = $mysqli->query($sql)) {
	echo "Bad request";

	exit;
}

$rows = $result->fetch_assoc();

// $request_city_title = "select cities.title, city_delivery_id, client_full_cost, client_fio, date_create, orders.id from orders inner join cities on city_delivery_id = cities.id where orders.id = " . $order_id;

// if (!$result = $mysqli->query($request_city_title)) {
// 	echo "Bad request";

// 	exit;
// }

// $city_title = $result->fetch_assoc();


echo "<style> table {border-collapse: collapse;} td {border: 2px solid black;} </style>";


echo "<table>";
	echo "<tr><td>id заказа</td><td>" . $order_id . "</td></tr>";
	echo "<tr><td>Название магазина</td><td>" . $rows['wtitle'] . "</td></tr>";
	echo "<tr><td>Стоимость заказа для клиента</td><td>" . $rows['client_full_cost'] . "</td></tr>";
	echo "<tr><td>Дата создания заказа</td><td>" . $rows['date_create'] . "</td></tr>";
	echo "<tr><td>Название города доставки</td><td>" . $rows['ctitle'] . "</td></tr>";
	echo "<tr><td>Имя получателя</td><td>" . $rows['client_fio'] . "</td></tr>";
echo "</table>";


$result->free();
$mysqli->close();

?>
