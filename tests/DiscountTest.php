<?php

use Dimpurw\Discount\Discount;

use PHPUnit\Framework\TestCase;

final class DiscountTest extends TestCase
{
    public function testWith50Percent()
    {
        $actual = new Discount();
        $expected = 5000;

        $this->assertEquals(
            $expected,
            $actual->discountCalculator(10000, 50),
        );
    }

    public function testWith80Percent()
    {
        $actual = new Discount();
        $expected = 8000;

        $this->assertEquals(
            $expected,
            $actual->discountCalculator(10000, 80),
        );
    }

    public function testWith10Percent()
    {
        $actual = new Discount();
        $expected = 1000;

        $this->assertEquals(
            $expected,
            $actual->discountCalculator(10000, 10),
        );
    }
}
