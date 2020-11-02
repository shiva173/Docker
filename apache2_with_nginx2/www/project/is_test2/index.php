<?php  

require_once('connect_to_db.php');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($mysqli->connect_errno) {
	echo "Error connection";
	echo "Номер ошибки: " . $mysqli->connect_errno . "\n";
	echo "Ошибка: " . $mysqli->connect_error . "\n";

	exit;
}

echo "ok";

$sql = "SELECT * FROM `orders` ORDER BY `id` DESC LIMIT 10";

if (!$result = $mysqli->query($sql)) {
	echo "Bad request";

	exit;
}

#вывод инфы из запроса

$rows = mysqli_num_rows($mysqli->query($sql));

for ($i=0; $i < $rows; $i++) { 
	$row = mysqli_fetch_row($mysqli->query($sql));
	echo $row[0] . $row[1];
}

?>