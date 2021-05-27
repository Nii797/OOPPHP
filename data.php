<?php
// dihapus
// require_once('menu.php');

// import file drink.php dan food.php
require_once('drink.php');
require_once('food.php');


// warisan dari Menu child Food dan Drink

// makanan 
$juice = new Drink('JUS',6,'img/juice.png');
$coffee = new Drink('KOPI',5,'img/coffee.png');
$thaitea = new Drink('THAI-TEA',3,'img/Thai-Tea.png');

// minuman
$curry = new Food('GULAI',9,'img/curry.png');
$pasta = new Food('PASTA',12,'img/pasta.png');
$sate = new Food('SATE',6,'img/sate.png');

// menambahkan type makanan di import drink.php
$juice->setType('dingin');
$coffee->setType('panas');

$menus = array($juice, $coffee, $curry, $pasta, $thaitea, $sate);

?>