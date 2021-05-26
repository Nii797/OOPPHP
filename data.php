<?php
// dihapus
// require_once('menu.php');

// import file drink.php dan food.php
require_once('drink.php');
require_once('food.php');


// Drink atau warisan dari Menu child Food
$juice = new Drink('JUS', 6, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png');
$coffee = new Drink('KOPI', 5, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png');
$juiceorange = new Drink('JUS-ORANGE', 6, 'img/juice.png');

// Food atau warisan dari Menu child Food
$curry = new Food('GULAI', 9, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png');
$pasta = new Food('PASTA', 12, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png');
$iga = new Food('IGA-BAKAR', 9, 'img/curry.png');

$menus = array($juice, $coffee, $curry, $pasta, $juiceorange, $iga);

?>