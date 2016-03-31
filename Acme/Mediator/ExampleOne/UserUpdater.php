<?php


class UserUpdater {

    public function updateUserAddress($newAddress)
    {
        $user = new UserDetails();
        $user->changeAddress($newAddress);
    }
}