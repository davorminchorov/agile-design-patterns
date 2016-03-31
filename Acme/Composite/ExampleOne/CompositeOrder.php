<?php


class CompositeOrder implements OrderInterface {

    private $orders = array();

    public function add(OrderInterface $order)
    {
        $this->orders = $order;
    }

    public function place()
    {
        array_walk($this->orders, function($order) {
            $order->place();
        });
    }
}