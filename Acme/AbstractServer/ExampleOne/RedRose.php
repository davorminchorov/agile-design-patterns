<?php


class RedRose implements RosesInterface {

    private $sold;

    public function sell()
    {
        $this->sold = true;
    }

    public function isSold()
    {
        $this->sold;
    }
}