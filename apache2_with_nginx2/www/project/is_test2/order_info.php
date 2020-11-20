<?php  

require_once('connect_to_db.php');

require_once('check_connection.php');


$order_id = $_GET['id'];

function validate_value ($mysqli, $value) {

	switch (gettype($value)) {
		case 'string':
			settype($value, "string");
			$value = strip_tags($value);
			$value = htmlspecialchars($value);
			return mysqli_real_escape_string($mysqli, $value);
			break;
			
		case 'integer':
			settype($value, "integer");
			$value = strip_tags($value);
			$value = htmlspecialchars($value);
			return mysqli_real_escape_string($mysqli, $value);
			break;
	}

}

validate_value($mysqli, $order_id);

$sql = "select r.id, number, c.title as c_title, w.title as w_title, date_create, client_full_cost, client_fio from orders r join webshops w on w.id  = r.webshop_id join cities c on c.id = r.city_delivery_id where r.id = '$order_id'";

if (!$result = $mysqli->query($sql)) {
	echo "Bad request";

	exit;
}

$rows = $result->fetch_assoc();

validate_value($mysqli, $rows['client_fio']);

echo "<style> table {border-collapse: collapse;} td {border: 2px solid black;} </style>";

echo "<table>";
	echo "<tr><td>id заказа</td><td>" . $order_id . "</td></tr>";
	echo "<tr><td>Название магазина</td><td>" . $rows['w_title'] . "</td></tr>";
	echo "<tr><td>Стоимость заказа для клиента</td><td>" . $rows['client_full_cost'] . "</td></tr>";
	echo "<tr><td>Дата создания заказа</td><td>" . $rows['date_create'] . "</td></tr>";
	echo "<tr><td>Название города доставки</td><td>" . $rows['c_title'] . "</td></tr>";
	echo "<tr><td>Имя получателя</td><td>" . $rows['client_fio'] . "</td></tr>";
echo "</table>";

$result->free();
$mysqli->close();

?>
