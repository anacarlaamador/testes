<?php

include 'autoloader.php';

$discountCalculador = new DiscountCalculator();
echo $discountCalculador->apply(value:80) . "\n";
