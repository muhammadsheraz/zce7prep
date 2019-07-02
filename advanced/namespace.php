<?php
namespace GlobalNS;

$global_var = "Global";

namespace MasterComponent;
define('NAME', 'Sheraz');

class SuperTest {
    public static $speed = "Fast";

    static function showSpeed() {
        echo __METHOD__ . PHP_EOL;
    }

    public function setSpeed() {
        echo __METHOD__ . PHP_EOL;
    }
}


echo SuperTest::showSpeed();
$test = new SuperTest();
echo $test->setSpeed();


