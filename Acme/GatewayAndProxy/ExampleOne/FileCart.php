<?php


class FileCart implements CartGatewayInterface {

    private $field;

    function __construct($field)
    {
        $this->field = $uniqId();
    }


    public function persist(ShoppingCart $cart)
    {
        file_put_contents($this->field, serialize($cart));
    }

    public function retrieve($id)
    {
        return unserialize(file_get_contents($id));
    }

    public function getIdOfRecordedCart()
    {
        return $this->field;
    }
}