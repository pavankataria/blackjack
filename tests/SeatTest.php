<?php
/**
 * Created by PhpStorm.
 * User: pavankataria
 * Date: 20/02/2017
 * Time: 05:11
 */

namespace PavanKataria\BlackJack\Test;

use PavanKataria\BlackJack\Casino\Seat;
use PHPUnit_Framework_TestCase;
class SeatTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_checks_an_empty_seat_can_be_made()
    {
        $seat = Seat::empty();
        static::assertTrue($seat->isEmpty());
        static::assertFalse($seat->isOccupied());
    }
}