<?php

namespace Acme\Decorator\ExampleOne;

class VisaPayment implements PaymentMethodInterface {

    public function getDescription()
    {
        return 'Visa Description';
    }
}