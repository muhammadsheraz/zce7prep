<?php

class obj implements ArrayAccess {
    private $container = array();

    public function __construct() {
        $this->container = array(
            "one"   => 1,
            "two"   => 2,
            "three" => 3,
        );
    }

    public function offsetSet($offset, $value) {
        print "offsetSet method Triggered";
        
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetExists($offset) {
        print "offsetExists method Triggered";

        return isset($this->container[$offset]);
    }

    public function offsetUnset($offset) {
        print "offsetUnset method Triggered";

        unset($this->container[$offset]);
    }

    public function offsetGet($offset) {
        print "offsetGet method Triggered";

        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
}

$obj = new obj;

$obj['two'] = '2';  // Output: offsetSet method Triggered

isset($obj['two']); // Output : offsetExists method Triggered

unset($obj['two']); // Output : offsetUnset method Triggered

return $obj['two']; // Output : offsetGet method Triggered


An experimental check addition to the findings of Per (on offsetExists method) added here (8 years ago).
