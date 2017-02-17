<?php

use Money\Money;

require_once 'vendor/autoload.php';

/** @var Money $pav */
$pav = Money::GBP(155);

/** @var Money $dan */
$dan = Money::GBP(100);
$xlink = Money::EUR($dan->getAmount());

$total = $pav->multiply(10.398978785);

var_dump($pav);
var_dump($dan);
var_dump($total);