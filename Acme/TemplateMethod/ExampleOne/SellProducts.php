<?php


class SellProducts extends SellAbstract {

    private $price;
    private $provider;

    public function orderNewItem()
    {
        $this->$provider->orderNewItem($this);
    }
}