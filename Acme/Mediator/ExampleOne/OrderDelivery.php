<?php


class OrderDelivery implements UserAddressInterface {

    private $deliveryAddress;

    public function setAddress($newAddress)
    {
        $this->deliveryAddress = $newAddress;
    }
}