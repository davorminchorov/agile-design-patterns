<?php


class InMemoryCart implements CartGatewayInterface{

    private $listOfCarts = array();

    public function persist(ShoppingCart $cart)
    {
       $this->listOfCarts[] = $cart;
    }

    public function retrieve($id)
    {
        return $this->listOfCarts[$id];
    }

    public function getIdOfRecordedCart()
    {
       return end($this->listOfCarts);
    }
}