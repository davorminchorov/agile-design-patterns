<?php


class HardDisk extends ProductSubjectAbstract {

    private $price;

    public function setPrice($price)
    {
        $this->price = $price;
        $this->notify();
    }

    public function getPrice()
    {
        return $this->price;
    }
}