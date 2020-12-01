<?php
	// подключение библиотек
	require_once "inc/lib.inc.php";
	require_once "inc/config.inc.php";

$id = $_GET["id"];

if ($id) {
	add2Basket($id);
}

header("Location: catalog.php");
exit;

?>