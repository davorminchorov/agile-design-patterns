<?php


interface CartGatewayInterface {

    public function persist(ShoppingCart $cart);
    public function retrieve($id);
    public function getIdOfRecordedCart();
}