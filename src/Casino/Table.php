<?php
/**
 * Created by PhpStorm.
 * User: pavankataria
 * Date: 20/02/2017
 * Time: 04:12
 */

namespace PavanKataria\BlackJack\Casino;

use PavanKataria\BlackJack\Assertion\TableAssertion;

/**
 * Class Table
 *
 * @package PavanKataria\BlackJack\Casino
 */
class Table
{
    /**
     * A collection of seats for this table
     *
     * @var SeatCollection
     */
    private $seats;

    /**
     * Table constructor.
     *
     * @param int $seatCapacity The number of seats for a new table
     */
    private function __construct(int $seatCapacity)
    {
        TableAssertion::greaterThan($seatCapacity, 0);

        $this->seats = SeatCollection::makeEmptySeats($seatCapacity);
    }

    /**
     * Creates a table instance defining the total seat capacity
     *
     * @param int $seatCapacity The number of seats for a new table
     *
     * @return Table
     */
    public static function openWithSeatCapacity(int $seatCapacity)
    {
        return new static($seatCapacity);
    }

    /**
     * Returns the total seat capacity
     *
     * @return int
     */
    public function totalSeatCapacity(): int
    {
        return $this->seats->count();
    }

    /**
     * Returns true if the table does not have any players assigned to it's seats
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->seats->reject(
            function (Seat $seat) {
                return $seat->isEmpty();
            }
        )
        ->count() === 0;
    }
}
