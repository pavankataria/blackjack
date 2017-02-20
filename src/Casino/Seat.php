<?php
/**
 * Created by PhpStorm.
 * User: pavankataria
 * Date: 20/02/2017
 * Time: 05:15
 */

namespace PavanKataria\BlackJack\Casino;


/**
 * Class Seat
 * @package PavanKataria\BlackJack\Casino
 */
class Seat
{
    const EMPTY = 100;
    const OCCUPIED = 101;
    const RESERVED = 102;

    /**
     * @var int
     */
    protected $state = self::EMPTY;

    /**
     * Seat constructor.
     *
     * @param int $seatStatus
     */
    private function __construct(int $seatStatus)
    {
        $this->state = $seatStatus;
    }

    /**
     * @return Seat
     */
    public static function empty(): Seat
    {
        return new static(self::EMPTY);
    }


    /**
     * Returns true if the seat is empty
     *
     * @return bool
     */
    public function isEmpty()
    {
        return $this->state === self::EMPTY;
    }

    /**
     * Returns true if the seat is reserved
     *
     * @return bool
     */
    public function isReserved(){
        return $this->state === self::RESERVED;
    }


    /**
     * Returns true if a player is assigned to the seat
     *
     * @return bool
     */
    public function isOccupied()
    {
        return !$this->isEmpty();
    }

    /**
     * Returns true if a player is assigned to the seat
     *
     *
     */
    public function isAvailabe(){
        //TODO: CHANGE THIS TO CHECK IF THE PLAYER IS ASSIGNED

    }
    //ROADMAP: Add timer for how long the player has seated.
}