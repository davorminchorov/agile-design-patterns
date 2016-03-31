<?php


class YellowRose implements RosesInterface {

    private $isSold = false;

    public function sell()
    {
        $this->isSold = true;
    }

    public function isSold()
    {
        return $this->isSold;
    }
}