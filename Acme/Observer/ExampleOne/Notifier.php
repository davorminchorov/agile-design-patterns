<?php


class Notifier implements ProductObserverInterface {

    private $product;

    function __construct($subject)
    {
        $this->product = $subject;
    }

    public function update()
    {
        $newPrice = $this->product->getPrice();
    }
}