<?php

$title = "Hello World";
echo '<h1>', $title, '</h1>';

$title = "New World";
echo '<div>', $title, '</div>';

unset($title);

/*<h1><?= $title; ?></h1>*/

$price = 1500;
$shipping = 200;
$name = 'automat ak47';

echo 'Product name: ', $name, '<br>';
echo 'Price: ', $price, '<br>';
echo 'price for shipping: ', $shipping, '<br>';
echo 'Total price with shipping: ', $price + $shipping, '<br>';


$vasya = 25000 / 100 * 20 + 25000;
echo 'Next year slary vasya grow on 20% ', $vasya, '<br>';
$petya = 30000 / 100 * 15 + 30000;
echo 'Next year slary petya grow on 15% ', $petya, '<br>';

$company = 1000;
$john = 100;
echo 'John ', $john / 1000 * 100, '%', '<br>';
$stolerman = 150;
echo 'Stolerman ', $stolerman / 1000 * 100, '%', '<br>';
$ivan = 235;
echo 'Ivan ', $ivan / 1000 * 100, '%', '<br>';
$total_sale = $john + $stolerman + $ivan;
echo 'Totall sale: ', $total_sale, '<br>';
$dont_sale = $company - $total_sale;
echo 'Dont sale: ', $dont_sale, '<br>';
'<br>';

$price = 1499;
echo "{$price}rub", '<br>', '<br>';


$type = 'Game ';
$name = '"World of Warcraft"';
echo "<h1>$type $name</h1>";


echo __FILE__;

define('PASSWORD', 'ioef84Fe#');

echo '<div>', PASSWORD, '</div>';

// print can include in ternarniu operator echo cant

$user1 = [
          'name' => 'Ivan',
          'age' => 34
          ];

$user2 = [
        'name' => 'Kolya',
         'age' => 25
         ];

$user1['age'] *= 1.5;
$user2['age'] *= 1.5;

echo $user1['name'], ' ', $user2['name'], '<br>';
echo $user1['age'], ' ', $user2['age'], '<br>';


$products = [
            'article' => 'abc123',
            'name' => 'iphone se',
            'price' => 5000
            ];

$products['title'] = 'title';

$products['new_array'] = ['new' => 'input_array'];

echo $products['new_array']['new'];

var_dump($products);


$phone = [
    [
        'name' => 'iphone',
        'price' => 5000,
        'status' => true
    ],
    [
        'name' => 'samsung galaxy',
        'price' => 5000,
        'status' => true
    ]
];

var_dump($phone);


echo $phone[1]['name'], '<br>';


$city = [
    'name' => 'Chebolsari',
    'streets' => [
        [
            'name' => 'university',
            'building_count' => 15,
            'old_buildings' => [4, 8, 12]
        ],
        [
            'name' => 'gagarina',
            'building_count' => 20,
            'old_buildings' => [14, 28, 32]
        ],
        [
            'name' => 'pavlovo',
            'building_count' => 45,
            'old_buildings' => [34, 28, 62]
        ],
    ]
];

echo $city['streets'][0]['old_buildings'][1], '<br>';

echo count([5, 10, 15]);
$arr = [1, 2, 3];
$arr['childs'] = [4, 5, 6];

echo count($arr, COUNT_RECURSIVE);


?>

