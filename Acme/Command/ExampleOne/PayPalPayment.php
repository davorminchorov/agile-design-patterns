<?php


class PayPalPayment implements PaymentMethodInterface {

    public function execute()
    {
        // TODO: Implement execute() method.
    }

    public function __toString()
    {
        return 'PayPal';
    }
}