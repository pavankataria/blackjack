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
 * @package PavanKataria\BlackJack\Casino
 */
class SeatCollection extends Collection
{
    /**
     * @var int
     */
    private $seatCapacity;

//    /**
//     * SeatCollection constructor.
//     * @param int $seatCapacity
//     */
//    public function __construct(int $seatCapacity)
//    {

//        parent::make(array_fill(0, $seatCapacity, null));
        /** last resort
        Ask if it's possible to retrieve an element by an index name with collections
        so I can do seatcollection['seat1'];
        */

        /** preferred way if collections maintain their order.
         * Ask xlink how they instantiate collections with an element n times
         * and how they store empty seats
         * $this->seatCapacity = $seatCapacity;
         * self Collection::make();
         **/
//    }

    /**
     * @param int $seatCapacity
     * @return static
     */
    public static function makeEmptySeats(int $seatCapacity)
    {
        return new static::range(0, $seatCapacity)
        ->map(function() {
            return Seat::empty();
        });
    }
}