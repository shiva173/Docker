<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'pass');
define('DB_NAME', 'eshop');
define('ORDERS_LOG', 'orders.log');

$link = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);


$basket = []; //корзина для юзера
$count = 0; //колличество товаров  в корзине


?>