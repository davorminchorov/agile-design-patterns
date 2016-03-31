<?php


interface PriceCalculatorInterface {

    public function negativeDiscount($price);
    public function calculateTaxes($price);
    public function convertCurrency($price);
}