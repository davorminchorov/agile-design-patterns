<?php


class DirectBuyer {

    public function payNow(DirectPayment $payment)
    {
        $payment->send();
    }
}