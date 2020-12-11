<?php  

// $var = 'hello';

// for ($i=0; $i < strlen($var); $i++) { 
// 	echo $i . "=>" . $var[$i] . "</br>"; 
// }


// $var = 1;
// $var += 12;
// $var -= 14;
// $var *= 5; 
// $var /= 7;
// ++$var;
// --$var; 
// echo $var . "</br>";


// $hello_world = ['Hello', 'World', '!'];

// foreach ($hello_world as $value) {
// 	echo $value . " ";
// }

// $hello_world = ['Hello ', 'World', '!'];

// $text = $hello_world[0].$hello_world[1].$hello_world[2];

// echo $text . "</br>";

// $calendar = [
// 	'ru' => ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'],
// 	'en' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
// ];

// echo $calendar['ru'][0] . "</br>";
// echo $calendar['en'][2] . "</br>";

// $lang = $calendar['ru'];
// $day = 3;

// echo $lang[$day];

// $lang = 'ru';

// if($lang == 'ru') {
// 	$arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
// }

// if ($lang == 'en') {
// 	$arr = ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'];
// }

// var_dump($arr);


// $var = 1;

// if(empty($var)) { //if 0 return true
// 	echo '$var or 0, or empty';
// }

// for ($i=0; $i < 5; $i++) { 

// 	$arr[$i] = mt_rand(1, 10);
	
// }

// sort($arr);

// var_dump($arr);


// $x = 2;
// $y = 10;

// $st = pow($x, $y);

// echo $st; 

// $arr = [4, -2, 5, 19, -130, 0, 10];
// echo min($arr);
// echo max($arr);


// echo mt_rand(1, 100);

$arr = [];

for ($i=0; $i < 10; $i++) { 
	$arr[] = mt_rand(1, 20);
}

var_dump($arr);
?>
