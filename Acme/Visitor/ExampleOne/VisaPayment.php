<?php

namespace Acme\Visitor\ExampleOne;

class VisaPayment implements PaymentMethodInterface{


    public function getDescription()
    {
        return 'Visa Description';
    }

    public function accept (PaymentVisitor $paymentVisitor)
    {
        return $paymentVisitor->accept($this);
    }
}