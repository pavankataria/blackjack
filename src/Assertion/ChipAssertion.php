<?php
/**
 * Created by PhpStorm.
 * User: pavankataria
 * Date: 17/02/2017
 * Time: 13:03
 */

namespace PavanKataria\BlackJack\Assertion;


use Assert\Assertion;
use PavanKataria\BlackJack\Exception\ChipException;

class ChipAssertion extends Assertion
{
    protected static $exceptionClass = ChipException::class;
}