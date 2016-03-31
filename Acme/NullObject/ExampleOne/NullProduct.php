<?php


class NullProduct implements ProductInterface {

    public function getDescription()
    {
        return '';
    }

    public function getPicture()
    {
        return '';
    }

    public function getPrice()
    {
        return 0;
    }
}