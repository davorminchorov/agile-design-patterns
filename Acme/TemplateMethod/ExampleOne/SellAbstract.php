<?php


abstract class SellAbstract {

    private $inventory;
    private $paymentProvider;

    public function removeFrominventory()
    {
        $this->inventory->remove($this);
    }

    public function retrievePayment()
    {
        $this->paymentProvider->retrieve($this->price);
    }
}