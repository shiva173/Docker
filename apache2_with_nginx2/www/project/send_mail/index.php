<?php  

$to      = 'v.umnikov@topdelivery.ru, vadimumnikov@yandex.ru';
$subject = 'Сроки утверждения отчетов TopDelivery.ru';


$headers = "Content-Type: text/html;\r\n";
//$headers .= "To: <v.umnikov@topdelivery.ru>\r\n";
$headers .= "From:  <logistics@topdelivery.ru>\r\n";



$message = "some text";

mail($to, $subject, $message, $headers);

?>
