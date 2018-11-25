<?php
class System {
    public $config = ['db' => 'homestead', 'user' => 'root'];


    public function getConfig ($key = 'db') {
        # return $this->config[$key];
        return 'Checking';
    }
}

echo System::getConfig('user') . PHP_EOL;    