<?php

namespace Acme\Decorator\ExampleOne;

abstract class PaymentDecorator implements  PaymentMethodInterface {

    protected $itsPaymentMethod;

    function __construct(PaymentMethodInterface $itsPaymentMethod)
    {
        $this->itsPaymentMethod = $itsPaymentMethod;
    }


    public function getDescription()
    {
        return $this->itsPaymentMethod->getDescription();
    }
}