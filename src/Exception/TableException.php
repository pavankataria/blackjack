<?php
/**
 * Created by PhpStorm.
 * User: pavankataria
 * Date: 20/02/2017
 * Time: 04:23
 */

namespace PavanKataria\BlackJack\Exception;

use Assert\InvalidArgumentException;

/**
 * Class TableException
 * @package PavanKataria\BlackJack\Exception
 */
class TableException extends InvalidArgumentException
{

    /**
     * @param int $seatCapacity
     * @return static
     */
    public static function invalidSeatCapacity(int $seatCapacity)
    {
        return new static('Invalid seat capacity inputted: ' . $seatCapacity);
    }
}