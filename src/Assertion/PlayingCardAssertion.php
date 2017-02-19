<?php
/**
 * Created by PhpStorm.
 * User: pavankataria
 * Date: 19/02/2017
 * Time: 20:43
 */

namespace PavanKataria\BlackJack\Assertion;

use Assert\Assertion;
use PavanKataria\BlackJack\Exception\PlayingCardException;

/**
 * Class PlayingCardAssertion
 *
 * @package PavanKataria\BlackJack\Assertion
 */
class PlayingCardAssertion extends Assertion
{
    protected static $exceptionClass = PlayingCardException::class;
}
