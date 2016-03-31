<?php

namespace Acme\Visitor\ExampleOne;

class SimplePaymentDetails implements PaymentVisitor {

    private $description;

    public function visit(PaymentMethodInterface $paymentMethod)
    {
        $this->description = $paymentMethod->getDescription();
    }

    public function getDescription()
    {
        return $this->description;
    }
}