<?php


class EuropePricingStrategy implements PriceCalculatorInterface {


    public function negativeDiscount($price)
    {
        if ($price > 1000)
        {
            return -100;
        }

        return -10;
    }

    public function calculateTaxes($price)
    {
        return $price * 20 / 100;
    }

    public function convertCurrency($price)
    {
        return $price * 0.70;
    }
}