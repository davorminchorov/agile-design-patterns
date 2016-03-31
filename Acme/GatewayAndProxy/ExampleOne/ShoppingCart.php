<?php

namespace Acme\GatewayAndProxy\ExampleOne;

class ShoppingCart implements \CartInterface {

    private $products;

    public function getProducts()
    {
        return $this->products;
    }
}