<?php


abstract class PaymentMethodAbstract implements DirectPayment, CreditPayment {
    
    private $paymentSource;
    
    abstract public function send();
    abstract public function approve();

    
    public function setPaymentSource(PaymentSource $paymentSource)
    {
        $this->paymentSource = $paymentSource;
    }

    protected function sendImp()
    {
        $this->paymentSource->send();
    }

    protected function approveImp()
    {
        $this->paymentSource->approve();
    }
}