<?php

namespace Acme\Visitor\ExampleOne;

class HtmlPaymentDetails implements PaymentVisitor {

    private $description;

    public function visit(PaymentMethodInterface $paymentMethod)
    {
        $this->description = $paymentMethod->getDescription();
    }

    public function getDescription()
    {
        // with some HTML Tags
        return $this->description;
    }
}