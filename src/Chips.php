<?php
/**
 * Created by PhpStorm.
 * User: pavankataria
 * Date: 17/02/2017
 * Time: 12:34
 */

namespace PavanKataria\BlackJack;


use Assert\Assertion;
use PavanKataria\BlackJack\Assertion\ChipAssertion;
use PavanKataria\BlackJack\Exception\ChipException;

class Chips
{
    /**
     * @var int
     */
    private $amount;

    /**
     * Chips constructor.
     *
     * @param int $amount
     * @throws ChipException
     */
    public function __construct(int $amount)
    {
        ChipAssertion::greaterOrEqualThan($amount, 0, 'Chip amount cannot be negative');

        $this->amount = $amount;
    }

    /**
     * @return Chips
     */
    public static function zero(): Chips
    {
        return new static(0);
    }

    /**
     * @param int $amount
     * @return Chips
     */
    public static function fromAmount(int $amount): Chips
    {
        return new static($amount);
    }


    /**
     * @return int
     */
    public function amount(): int
    {
        return $this->amount;
    }
}