<?php  

require_once('connect_to_db.php');

require_once('check_connection.php');

// $sql = "SELECT * FROM `orders` ORDER BY `id` DESC LIMIT 10";

// if (!$result = $mysqli->query($sql)) {
// 	echo "Bad request";

// 	exit;
// }


// $page = $_GET['page'];

// print_r($page);


// echo "<table>\n";
// echo "<tr><td>id заказа</td><td>Номер заказа</td><td>Дата создания заказа</td></tr>";
// echo "<style> table {border-collapse: collapse;} td { border-right: 2px solid black; border-bottom: 2px solid black; padding: 5px;} </style>";

// while ($rows = $result->fetch_assoc()) {
    
//     echo "<tr><td><a href='" . 'order_info.php' . "?id=" . $rows['id'] . "'>\n";
//     echo $rows['id'] . "</a></td>";

//     echo "<td>\n";
//     echo $rows['number'] . "</td>";

//     echo "<td>\n";
//     echo $rows['date_create'] . "</td>";

//   	echo "</tr>\n";
// }
// echo "</table>\n";


 function forward($offset, $mysqli) {

    $sql = "SELECT * FROM `orders` ORDER BY `id` DESC LIMIT $offset,10";


    if (!$result = $mysqli->query($sql)) {
    echo "Bad request";

    exit;
}

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

$result->free();
$mysqli->close();    

}

forward(0, $mysqli);

$buttons = '<a href="index.php?forward(0, $mysqli)>">Вперед</a> </br> <a href="">Назад</a> ';
echo $buttons;

?>
