<?php


class ShoppingHistory {

    private $gateway;
    private $shoppingCartIds = array();

    function __construct(CartGateWay $gateway, $ids = array())
    {
        $this->gateway = $gateway;
        $this->$shoppingCartIds = $ids;
    }

    public function listAllCarts()
    {
        $shoppingCarts = array();

        foreach ($this->shoppingCartIds as $id)
        {

        }

    }


}