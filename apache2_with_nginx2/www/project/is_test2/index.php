<?php  

require_once('connect_to_db.php');

require_once('check_connection.php');

//------------------>add smarty lib
require_once('add_smarty.php');
//<------------------------------------


if (isset($_GET['pageno'])) {

	$pageno = $_GET['pageno'];

} else {

	$pageno = 1;
}


$size_page = 10;

$offset = $pageno;


$sql_offset = "SELECT * FROM `orders` ORDER BY `id` DESC LIMIT $offset, $size_page";

$result_offset = $mysqli->query($sql_offset);


while ($rows = $result_offset->fetch_assoc()) {
    
    global $content;

    $content .= "<tr><td><a href='" . 'order_info.php' . "?id=" . $rows['id'] . "'>\n";
    $content .= $rows['id'] . "</a></td>";

    $content .= "<td>\n";
    $content .= $rows['number'] . "</td>";

    $content .= "<td>\n";
    $content .= $rows['date_create'] . "</td>";

  	$content .= "</tr>\n";

} 


$back = "";

$forward  = '<a href="'.$_SERVER['PHP_SELF'].'?pageno='. ($offset + 10) .'">'. "Вперед" ."</a> ";

if ($pageno >= 10) {
	
$back = '<a href="'.$_SERVER['PHP_SELF'].'?pageno='. ($offset - 10) .'">'. "Назад" ."</a> ";

}


$mysqli->close();

$result_offset->free();

//declare variables for smarty--------------------------------------->
$smarty->assign('content', $content);
$smarty->assign('forward', $forward);
$smarty->assign('back', $back);
//<-------------------------------------------------------------------
$smarty->display('index.tpl');
?>
