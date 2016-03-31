<?php

namespace Acme\Visitor\ExampleOne;

class PayPalPayment implements PaymentMethodInterface {

    public function getDescription()
    {
        return 'PayPal Description';
    }

    public function accept(PaymentVisitor $paymentVisitor)
    {
        $paymentVisitor->visit($this);
    }
}