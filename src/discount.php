<?php

namespace DiscountCalculator;

class Discount
{
    public static function discountCalculator(int $price, int $discount)
    {
        $result = ($discount / 100) * $price;
        return $result;
    }
}
