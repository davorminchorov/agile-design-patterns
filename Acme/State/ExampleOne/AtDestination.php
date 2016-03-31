<?php

namespace Acme\State\ExampleOne;

class AtDestination implements DeliveryStateInterface {

    public function goNext(Delivery $delivery)
    {
        $delivery->setState(new AtDestination());
    }

    public function getLocation()
    {
        return 'Final Destination';
    }
}