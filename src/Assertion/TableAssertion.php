<?php
/**
 * Created by PhpStorm.
 * User: pavankataria
 * Date: 20/02/2017
 * Time: 04:22
 */

namespace PavanKataria\BlackJack\Assertion;

use Assert\Assertion;
use PavanKataria\BlackJack\Exception\TableException;

/**
 * Class TableAssertion
 * @package PavanKataria\BlackJack\Assertion
 */
class TableAssertion extends Assertion
{
    /**
     * @var
     */
    protected static $exceptionClass = TableException::class;
}