<?php
/**
 * 1st Basic Practice
 */
/*
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
*/

/**
 * 2nd Advance Practice
 */

 interface PaymentServiceProvider {
     public function processPayment();
 }

 interface PaymentCheckProvider {
     public function checkPayment();
 }

 interface PaymentExecuteInterface {
     public function executePayment();
 }

 class PayOneProvider implements PaymentServiceProvider, PaymentExecuteInterface {
    public function processPayment() {
        return "processing payone payment" . PHP_EOL;
    }

    public function executePayment() {
        $processPaymentResponse = $this->processPayment();

        return [$processPaymentResponse];
    }
 }

 class PayTwoProvider implements PaymentServiceProvider, PaymentExecuteInterface {
     public function processPayment() {
        return "processing two payment" . PHP_EOL;
     }

     public function executePayment() {
        $processPaymentResponse = $this->processPayment();

        return [$processPaymentResponse];
    }     
 }

 class PayThreeProvider implements PaymentServiceProvider, PaymentExecuteInterface, PaymentCheckProvider {
     public function checkPayment() {
        return "executing fraud check" . PHP_EOL;
     }

     public function processPayment() {
        return "processing paythree payment" . PHP_EOL;
     }    
     
     public function executePayment() {
        $checkPaymentResponse = $this->checkPayment();
        $processPaymentResponse = $this->processPayment();

        return [$checkPaymentResponse, $processPaymentResponse];
    }       
 }


 Class PaymentHandler {
     private $paymentProvider;
     
     public function __construct (PaymentExecuteInterface $paymentServiceProvider) {
        $this->paymentProvider = $paymentServiceProvider;
     }

     public function collectPayment () {
         return $this->paymentProvider->executePayment();
     }
 }

$payProvider = new PayThreeProvider();

$paymentHandler = new PaymentHandler($payProvider);
$response = $paymentHandler->collectPayment();

var_dump($response);

exit();
