<?php
abstract class Fruit {
    protected $fruit;

    abstract public function __construct ($fruitType = '');
    abstract public function getColor();
    abstract public function printName($fruit = 'fruit');
}

class Apple extends Fruit {
    public function __construct ($fruitType = 'Apple') {
        $this->fruit = $fruitType;
    }
    public function getColor() {
        return 'Red';
    }
    public function printName($fruit = 'dry fruit') {
        return $this->fruit;
    }
    
}


try {
    $fruit = new Apple();
    $fruitColor = $fruit->getColor();

    echo $fruit->printName();
} catch (Exception $e) {
    echo  $e->getMessage();
    exit();
}
