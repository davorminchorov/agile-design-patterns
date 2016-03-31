<?php


class Mediator {

    private $observedClass;
    private $affectedClass;

    function __construct(Observable $observedClass, UserAddress $affectedClass)
    {
        $this->observedClass = $observedClass;
        $this->affectedClass = $affectedClass;
        $observedClass->register($this);
    }

    public function update($address)
    {
        $this->affectedClass->setAddress($address);
    }


}