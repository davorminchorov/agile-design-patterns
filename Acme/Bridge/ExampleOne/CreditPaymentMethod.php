<?php


class CreditPaymentMethod extends PaymentMethodAbstract {

    public function send()
    {
        parent::sendImp();
    }

    public function approve()
    {
        parent::approveImp();

    }
}