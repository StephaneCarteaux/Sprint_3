<?php

interface CarCouponGenerator
{
    public function addSeasonDiscount();
    public function addStockDiscount();
    public function getDiscount();
}
