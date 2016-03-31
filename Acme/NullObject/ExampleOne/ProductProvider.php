<?php


class ProductProvider {

    public function findProduct($id)
    {
        if($id == 0)
        {
            return new Keyboard();
        }

        return new NullProduct();
    }
}