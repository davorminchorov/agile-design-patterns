<?php


namespace Acme\State\ExampleOne;


class Processing implements DeliveryStateInterface {

    public function goNext(Delivery $delivery)
    {
        $delivery->setState(new OnRoute());
    }

    public function getLocation()
    {
        return 'Warehouse';
    }



}