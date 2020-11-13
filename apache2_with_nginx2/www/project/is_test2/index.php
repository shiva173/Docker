<?php  

require_once('connect_to_db.php');

require_once('check_connection.php');

$sql = "SELECT * FROM `orders` ORDER BY `id` DESC LIMIT 10";

require_once('check_request.php');


if (isset($_GET['pageno'])) {

	$pageno = $_GET['pageno'];

} else {

	$pageno = 1;
}


$size_page = 10;

$offset = $pageno;

$sql = "SELECT COUNT(*) FROM `orders` ORDER BY `id`";

$result = $mysqli->query($sql);

$total_rows = $result->fetch_array();

$sql = "SELECT * FROM `orders` ORDER BY `id` DESC LIMIT $offset, $size_page";

$result = $mysqli->query($sql);

echo "<table>\n";
echo "<tr><td>id заказа</td><td>Номер заказа</td><td>Дата создания заказа</td></tr>";
echo "<style> table {border-collapse: collapse;} td { border-right: 2px solid black; border-bottom: 2px solid black; padding: 5px;} </style>";

while ($rows = $result->fetch_assoc()) {
    
    echo "<tr><td><a href='" . 'order_info.php' . "?id=" . $rows['id'] . "'>\n";
    echo $rows['id'] . "</a></td>";

    echo "<td>\n";
    echo $rows['number'] . "</td>";

    echo "<td>\n";
    echo $rows['date_create'] . "</td>";

  	echo "</tr>\n";
}

echo "</table>\n";


echo '<a href="'.$_SERVER['PHP_SELF'].'?pageno='. ($offset + 10) .'">'. "Вперед" ."</a> ";

if ($pageno >= 10) {
	
echo '<a href="'.$_SERVER['PHP_SELF'].'?pageno='. ($offset - 10) .'">'. "Назад" ."</a> ";

}


$mysqli->close();

$result->free();

?>
