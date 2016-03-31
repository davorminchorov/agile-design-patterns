<?php

namespace Acme\State\ExampleOne;

class OnRoute implements DeliveryStateInterface {

    public function goNext(Delivery $delivery)
    {
        $delivery->setState(new AtDestination());
    }

    public function getLocation()
    {
        return 'On the train!';
    }
}