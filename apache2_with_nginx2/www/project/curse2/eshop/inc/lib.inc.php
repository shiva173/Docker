<?php

require_once('./config.inc.php');

function addItemToCatalog($title, $author, $pubyear, $price, $link) {

	$sql = 'INSERT INTO catalog ($title, $author, $pubyear, $price) 
		VALUES (?, ?, ?, ?)';

	if (!$stmt = mysqli_prepare($link, $sql))
	 return false;
	mysqli_stmt_bind_param($stmt, "ssii", $title, $author, $pubyear, $price);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	return true; 
}

addItemToCatalog('php', 'vadim', '2020', '2000', $link);

?>