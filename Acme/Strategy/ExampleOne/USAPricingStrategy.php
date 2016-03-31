<?php


class USAPricingStrategy implements PriceCalculatorInterface {

    public function negativeDiscount($price)
    {
       return -50;
    }

    public function calculateTaxes($price)
    {
        return $price * 5 / 100;
    }

    public function convertCurrency($price)
    {
        return $price * 1;
    }
}