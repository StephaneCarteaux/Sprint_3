<?php

class CarCouponCalculator
{

    private CarCouponGenerator $brand;

    public function __construct(CarCouponGenerator $brand)
    {
        $this->brand = $brand;
    }

    public function calculateDiscounts(): void
    {
        $this->brand->addSeasonDiscount();
        $this->brand->addStockDiscount();
    }

    public function getDiscount(): string
    {
        return $this->brand->getDiscount();
    }
}
