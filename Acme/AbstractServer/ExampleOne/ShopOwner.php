<?php


class ShopOwner {

    private $redRose;

    function __construct(RosesInterface $redRose)
    {
        $this->redRose = $redRose;
    }

    public function sell()
    {
        $this->redRose->sell();
    }
}