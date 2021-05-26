<?php
require_once('menu.php');

$jus = new Menu('JUS',1,'img/juice.png');
$kopi = new Menu('KOPI',2,'img/coffee.png');
$gulai = new Menu('GULAI',4,'img/curry.png');
$pasta = new Menu('PASTA',3,'img/pasta.png');

// $menus = isset ($array['index_array']) ? $array['index_array']:'';

$menus = array(
    $jus, $kopi, $gulai, $pasta
);
// $menus = array_key_exists ($array['index_array']) ? $array['index_array']:'';
?>