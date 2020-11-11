<?php  

if ($mysqli->connect_errno) {
	echo "Error connection";
	echo "Номер ошибки: " . $mysqli->connect_errno . "\n";
	echo "Ошибка: " . $mysqli->connect_error . "\n";

	exit;
}

?>