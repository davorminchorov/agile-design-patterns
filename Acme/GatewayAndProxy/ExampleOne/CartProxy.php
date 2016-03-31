<?php



class CartProxy implements CartInterface {

    private $shoppingCart;

    public function getProducts()
    {
        if (is_null($this->shoppingCart))
        {
            $this->$shoppingCart = $gateway->getCarts();
        }

        return $shoppingCart->getProducts();
    }
}