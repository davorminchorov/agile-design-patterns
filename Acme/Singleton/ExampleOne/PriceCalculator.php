<?php


class PriceCalculator {

    public function compute(Product $product)
    {
        $discountProvider = DiscountProvider::getInstance();
        $discountAsPercent = $discountProvider->getDiscountFor($product->getId());
        $price = $product->getPrice();
        $discountAsValue = $price * $discountAsPercent;

        return $price - $discountAsValue;
    }
}