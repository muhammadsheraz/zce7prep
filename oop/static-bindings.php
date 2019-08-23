<?php
// class A {
//     public static function foo() {
//         echo static::who();
//     }
//     public static function who() {
//         return 'A';
//     }
// }
// class B extends A {
//     public static function test() {
//         A::foo();
//         parent::foo();
//         self::foo();
//     }
// }
// class C extends B {
//     public static function who() {
//         echo 'C';
//     }
// }


// C::test(); // ACC



// class Base {

//     protected static function whoami() {
    
//         echo "Base ";
    
//     }
    
//     public static function whoareyou() {
//         static::whoami();
//     }
// }

// class A extends Base {
    
//     public static function test() {
    
//         Base::whoareyou();
    
//         self::whoareyou();
        
//         parent::whoareyou();
        
//         A::whoareyou();
        
//         static::whoareyou();
//     }

//     public static function whoami() {
//         echo "A";
//     }
// }

// class B extends A {
//     public static function whoami() {
//         echo "B ";
//     }
// }

// B::test();

// Base B B A B 