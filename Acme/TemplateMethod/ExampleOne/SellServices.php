<?php


class SellServices extends SellAbstract{

    private $price;
    private $humanResources;


    public function markHumanResourcesAsOccupied()
    {
        $this->humanResources->mark(2);
    }
}