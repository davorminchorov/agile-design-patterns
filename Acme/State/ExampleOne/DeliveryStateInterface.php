<?php

namespace Acme\State\ExampleOne;

interface DeliveryStateInterface {

    public function goNext(Delivery $delivery);
    public function getLocation();
}