<?php

namespace Acme\Visitor\ExampleOne;

interface PaymentVisitor {

    public function visit(PaymentMethodInterface $paymentMethod);
    public function getDescription();
}