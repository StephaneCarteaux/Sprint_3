<?php
require_once 'bmwCouponGenerator.php';
require_once 'mercedesCuoponGenerator.php';
require_once 'carCouponCalculator.php';

$isHighSeason = false;
$bmwBigStock = true;
$mercedesBigStock = true;

$carCouponCalculator = new CarCouponCalculator(new BmwCouponGenerator($isHighSeason, $bmwBigStock));
$carCouponCalculator->calculateDiscounts();
echo $carCouponCalculator->getDiscount();

$carCouponCalculator = new CarCouponCalculator(new MercedesCouponGenerator($isHighSeason, $mercedesBigStock));
$carCouponCalculator->calculateDiscounts();
echo $carCouponCalculator->getDiscount();
