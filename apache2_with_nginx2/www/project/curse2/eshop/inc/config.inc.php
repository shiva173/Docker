<?php

require_once("lib.inc.php");

define('DB_HOST', 'db');
define('DB_USER', 'root');
define('DB_PASS', 'pass');
define('DB_NAME', 'eshop');
define('ORDERS_LOG', 'orders.log');

$link = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);


if ($link->connect_errno) {
	echo "Error connection";
	echo "Номер ошибки: " . $link->connect_errno . "\n";
	echo "Ошибка: " . $link->connect_error . "\n";

	exit;
}


$basket = []; //корзина для юзера
$count = 0; //колличество товаров  в корзине

basketInit();

?>