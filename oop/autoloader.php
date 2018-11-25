<?php
// Class autoloader

function class_autoloader () {
    echo "Autoloading a fallback class";
}

spl_autoload_register('class_autoloader');


Class Properties {
    protected  $userName = ['Ali', 'Zaid', 'Zain' . ' Harris'];

    public $userFunc =  7 | 8;

}
