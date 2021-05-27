<?php
// import file menu.php
require_once('menu.php');

// buat class Drink yang diwariskan dari class Menu
class Drink extends Menu {
    // Deklarasikan property private bernama $type
    private $type;

    // menambahkan __construct ke dalam subclass menu 
    // dan memanggil variabel pada menu seperti name, price, image,
    // dan sebagai tambahan ada di sub class adalah type 
    public function __construct($name, $price, $image, $type) {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->type = $type;
    }

    // Definisikan method getType
    public function getType() {
        return $this->type;
    }

    // Definisikan method setType
    public function setType($type) {
        $this->type = $type;
    }

}

?>