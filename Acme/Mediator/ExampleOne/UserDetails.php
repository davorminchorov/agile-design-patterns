<?php


class UserDetails extends ObservableAbstract {

    private $address;

    public function changeAddress($newAddress)
    {
        $this->address = $newAddress;
        $this->notify($newAddress);
    }
}