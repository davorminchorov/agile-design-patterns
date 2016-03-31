<?php


class DirectPaymentMethod extends PaymentMethodAbstract {

    public function send()
    {
        parent::sendImp();
    }

    public function approve()
    {
        return true;
    }
}