<?php
/**
 * Created by PhpStorm.
 * User: pavankataria
 * Date: 20/02/2017
 * Time: 05:08
 */

namespace PavanKataria\BlackJack\Casino;

use Illuminate\Support\Collection;

/**
 * Class SeatCollection
 *
 * @package PavanKataria\BlackJack\Casino
 */
class SeatCollection extends Collection
{
    /**
     * Static public method
     *
     * @param int $seatCapacity
     *
     * @return static
     */
    public static function makeEmptySeats(int $seatCapacity)
    {
        return (new static(\range(1, $seatCapacity)))
            ->map(function () {
                return Seat::empty();
            });
    }
}
