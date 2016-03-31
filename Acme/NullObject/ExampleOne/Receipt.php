<?php


class Receipt {

    private $total;

    public function addToTotal(ProductInterface $product)
    {
        $this->total += $product->getPrice();
    }

    public function getTotalPrice()
    {
        return $this->total;
    }

    public function addProductById($id)
    {
        $provider = new ProductProvider();

        $product = $provider->findProduct($id);

        $this->addToTotal($product);
    }
}