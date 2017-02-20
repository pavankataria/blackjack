<?php
/**
 * Created by PhpStorm.
 * User: pavankataria
 * Date: 20/02/2017
 * Time: 04:12
 */

namespace PavanKataria\BlackJack\Casino;


use PavanKataria\BlackJack\Assertion\TableAssertion;
use PavanKataria\BlackJack\Exception\TableException;

/**
 * Class Table
 * @package PavanKataria\BlackJack\Casino
 */
class Table
{
    /**
     * @var int
     */
    protected $seatCapacity;

    /**
     * Table constructor.
     *
     * @param int $seatCapacity
     */
    private function __construct(int $seatCapacity)
    {
        $this->seatCapacity = $seatCapacity;
        $this->constructSeats($seatCapacity);
    }

    /**
     * @param int $seatCapacity
     */
    private function constructSeats(int $seatCapacity)
    {
        $this->seats = SeatCollection::makeEmptySeats($seatCapacity);
    }

    /**
     * Creates a table instance defining the total seat capacity
     * @param int $seatCapacity
     * @return Table
     */
    public static function openWithSeatCapacity(int $seatCapacity)
    {
        TableAssertion::greaterThan($seatCapacity, 0);
        return new static($seatCapacity);
    }

    /**
     * Returns the total seat capacity
     *
     * @return int
     */
    public function totalSeatCapacity(): int
    {
        return $this->seatCapacity;
    }

    /**
     * Returns true if the table does not have any players assigned to it's seats
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return true;
    }
}