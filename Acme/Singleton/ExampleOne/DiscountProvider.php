<?php


class DiscountProvider {

    private static $instance = null;

    private function __construct()
    {
        // here would be some complicated init logic
    }

    public static function getInstance()
    {
        if(self::$instance == null)
        {
            self::$instance = new DiscountProvider();
        }

        return self::$instance;
    }

    public function getDiscountFor($product)
    {
        return 30;
    }
}