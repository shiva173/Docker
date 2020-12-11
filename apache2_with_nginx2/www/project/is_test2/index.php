<?php  

require_once('connect_to_db.php');

require_once('check_connection.php');

<<<<<<< HEAD
//------------------>add smarty lib
=======
<<<<<<< HEAD
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
=======
$sql = "SELECT * FROM `orders` ORDER BY `id` DESC LIMIT 10";
>>>>>>> 2cfcfa31a996a2cf6b5f568d1385723d443f65b0

define('SMARTY_DIR', 'smarty-3.1.35/libs/');

require_once(SMARTY_DIR . 'Smarty.class.php');

$smarty = new Smarty();

$smarty->template_dir = './templates/';
$smarty->compile_dir = './templates_c/';
$smarty->config_dir = './configs/';
$smarty->cache_dir = './cache/';

$smarty->debugging = true;

//<------------------------------------


//$sql = "SELECT * FROM `orders` ORDER BY `id` DESC LIMIT 10";


//require_once('check_request.php');


if (isset($_GET['pageno'])) {

	$pageno = $_GET['pageno'];

} else {

	$pageno = 1;
}


$size_page = 10;

$offset = $pageno;

//$sql_count = "SELECT COUNT(*) FROM `orders` ORDER BY `id`";

//$result_count = $mysqli->query($sql_count);

//$total_rows = $result_count->fetch_array();

$sql_offset = "SELECT * FROM `orders` ORDER BY `id` DESC LIMIT $offset, $size_page";

$result_offset = $mysqli->query($sql_offset);

echo "<table>\n";
echo "<tr><td>id заказа</td><td>Номер заказа</td><td>Дата создания заказа</td></tr>";
echo "<style> table {border-collapse: collapse;} td { border-right: 2px solid black; border-bottom: 2px solid black; padding: 5px;} </style>";

while ($rows = $result_offset->fetch_assoc()) {
    
    $content = "<tr><td><a href='" . 'order_info.php' . "?id=" . $rows['id'] . "'>\n";
    $content .= $rows['id'] . "</a></td>";

    $content .= "<td>\n";
    $content .= $rows['number'] . "</td>";

    $content .= "<td>\n";
    $content .= $rows['date_create'] . "</td>";

  	$content .= "</tr>\n";

    echo $content;

}

echo "</table>\n";


echo '<a href="'.$_SERVER['PHP_SELF'].'?pageno='. ($offset + 10) .'">'. "Вперед" ."</a> ";

if ($pageno >= 10) {
	
echo '<a href="'.$_SERVER['PHP_SELF'].'?pageno='. ($offset - 10) .'">'. "Назад" ."</a> ";

}


$mysqli->close();

<<<<<<< HEAD
$result_offset->free();

//declare variables for smarty--------------------------------------->
//$smarty->assign('sql_count', $sql_count);
$smarty->assign('sql_offset', $sql_offset);
$smarty->assign('size_page', $size_page);
$smarty->assign('pageno', $pageno);
$smarty->assign('offset', $offset);
//$smarty->assign('result_count', $result_count);
$smarty->assign('result_offset', $result_offset);
$smarty->assign('rows', $rows);
$smarty->assign('content', $content);
$smarty->assign('foo', 10);
//<-------------------------------------------------------------------
$smarty->display('index.tpl');
=======
$result->free();
>>>>>>> 46f9cd07fcf486c5c4396d03656a60fbe2755068

>>>>>>> 2cfcfa31a996a2cf6b5f568d1385723d443f65b0
?>
