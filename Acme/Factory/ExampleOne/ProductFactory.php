<?php


class ProductFactory {

    public function isKeyboard($productId)
    {
        return substr($productId, 0, 1) == 'k';
    }

    public function make($productId)
    {

        if ($this->isKeyboard($productId)) {
            $this->productsInTheCart[] = new Keyboard();
        }

        $this->productsInTheCart[] = new Mouse();
    }
}