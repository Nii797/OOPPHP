<?php

class Menu {
    private $name;
    private $price;
    private $image;
    private $orderCount = 0;


    public function __construct($name, $price, $image) {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }

    public function hello() {
        echo 'Saya adalah '.$this->name;
      }

    public function getName() {
        return $this->name;
    }

    // public function getPrice() {
    //     return $this->price;
    // }

    public function getImage()
    {
        return $this->image;
    }

    public function getOrderCount() {
        return $this->orderCount;
    }

    public function setOrderCount($orderCount) {
        $this->orderCount = $orderCount;
    }

    public function getTaxIncludePrice() {
        return round($this->price * 1.0725, 2);
    }

    // Definisikan method getTotalPrice
    public function getTotalPrice() {
        return $this->getTaxIncludePrice() * $this->orderCount;
    }
}

?>