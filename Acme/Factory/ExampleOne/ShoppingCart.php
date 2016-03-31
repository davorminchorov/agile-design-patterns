<?php


class ShoppingCart {

    private $productsInTheCart = array();
    private $productFactory;

    function __construct($productFactory)
    {
        $this->productFactory = new ProductFactory();
    }


    public function add($productId)
    {
      $this->productsInTheCart[] = $this->productFactory->make($productId);

    }



}