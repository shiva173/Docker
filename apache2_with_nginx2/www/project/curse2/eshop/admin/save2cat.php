<?php
	// подключение библиотек
	require_once "secure/session.inc.php";
	require_once "../inc/lib.inc.php";
	require_once "../inc/config.inc.php";


// addItemToCatalog($_POST['title'], $_POST['author'], $_POST['pubyear'], $_POST['price'], $link);

if (!addItemToCatalog($_POST['title'], $_POST['author'], $_POST['pubyear'], $_POST['price'], $link)) {
		echo 'Произашла ошибка при добавлении товара в каталог';
	} else {
		header("Location: add2cat.php");
		exit;
	}
?>