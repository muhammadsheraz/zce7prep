<?php

trait MyTrait {
    private $abc = 1;

    public function increment() {
        $this->abc++;
    }

    public function getValue() {
        return $this->abc;
    }
}

trait HisTrait {
    private $abc = 1;

    public function increment() {
        $this->abc++;
    }

    public function getValue() {
        return $this->abc;
    }
}


// class MyClass {
//     use MyTrait;
//     public function incrementBy2() { 
//         $this->increment();
//         $this->abc++;
//     }
// }

// $c = new MyClass;
// $c->incrementBy2();
// echo $c->abc;
// var_dump($c->getValue()); 


class MyClass {
    use MyTrait, HisTrait {
        MyTrait::increment insteadof HisTrait;
        HisTrait::getValue insteadof MyTrait;

    }

}