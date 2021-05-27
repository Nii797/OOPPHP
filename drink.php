<?php
// import file menu.php
require_once('menu.php');

// buat class Drink yang diwariskan dari class Menu
class Drink extends Menu {
    // Deklarasikan property private bernama $type
    private $type;

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