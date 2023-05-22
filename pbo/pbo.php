<?php
class Animal {
    protected $nama;
    protected $jenis;

    public function __construct($nama, $jenis) {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function getInfo() {
        return "Hewan ini adalah " . $this->nama . " jenis " . $this->jenis;
    }
}

class Cat extends Animal {
    public function __construct($nama) {
        parent::__construct($nama, "kucing");
    }

    public function getInfo() {
        return parent::getInfo() . ", Kucing adalah hewan peliharaan yang lucu.";
    }
}

class Dog extends Animal {
    public function __construct($nama) {
        parent::__construct($nama, "anjing");
    }

    public function getInfo() {
        return parent::getInfo() . ", Anjing adalah hewan setia dan penjaga yang baik.";
    }
}

// Membuat objek dari class Animal
$animal = new Animal("Harimau", "Sumatera");
echo $animal->getInfo() . "<br>";

// Membuat objek dari class Cat
$cat = new Cat("Kitty");
echo $cat->getInfo() . "<br>";

// Membuat objek dari class Dog
$dog = new Dog("Buddy");
echo $dog->getInfo() . "<br>";
