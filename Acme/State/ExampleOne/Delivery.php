<?php

namespace Acme\State\ExampleOne;

class Delivery {

    private $currentState;

    function __construct(DeliveryStateInterface $state)
    {
        $this->setState($state);
    }

    public function getCurrentLocation()
    {
        return $this->currentState->getLocation();
    }

    public function goNext()
    {
        $this->currentState->goNext($this);
    }

    public function setState(DeliveryStateInterface $state)
    {
        $this->currentState = $state;

    }


}