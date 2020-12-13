<?php  

require_once('connect_to_db.php');

require_once('check_connection.php');

require_once('add_smarty.php');


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

$result->free();
$mysqli->close();


$smarty->assign('order_id', $order_id);
$smarty->assign('rows', $rows);

$smarty->display('orders_info.tpl');

?>
