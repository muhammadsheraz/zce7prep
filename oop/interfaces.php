<?php

interface Foo {

      function bar();

}

abstract class FooBar implements Foo {

       abstract function bar(); // just for making clear, that this
                                 // method has to be implemented

}

Class Ben extends FooBar {
    public function bar () {
        echo "This is bar";
    }
}

$ben = new Ben();

$ben->bar();

?>