<?php
/**
 * Created by PhpStorm.
 * User: pavankataria
 * Date: 20/02/2017
 * Time: 00:12
 */

namespace PavanKataria\BlackJack\Test;

use PavanKataria\BlackJack\Casino\Table;
use \PHPUnit_Framework_TestCase;

/**
 * Class TablesTest
 * @package PavanKataria\BlackJack\Test
 */
class TablesTest extends PHPUnit_Framework_TestCase
{
    //Table can be active
    //Table can be closed
    //Table can query whether there is space on the table or whether it's full
    //Table can allow a player to sit or sit up (but not leave)
    //A table can allow a player to leave
    //Can assign a dealer...
    //Can return how many seats are free.
    //

    /** @test */
    public function it_can_make_a_table_with_seat_numbers()
    {
        $table = Table::openWithSeatCapacity(5);
        static::assertEquals(5, $table->totalSeatCapacity());
    }

    /**
     * @expectedException \PavanKataria\BlackJack\Exception\TableException
     * @test
     */
    public function it_cannot_create_a_table_with_a_negative_seat_count()
    {
        $table = Table::openWithSeatCapacity(-5);
    }

    /**
     * @expectedException \PavanKataria\BlackJack\Exception\TableException
     * @test
     */
    public function it_cannot_create_a_table_with_zero_seat_capacity()
    {
        $table = Table::openWithSeatCapacity(0);
    }

    /** @test */
    public function it_checks_seats_are_empty_when_creating_a_new_table(){
        $table = Table::openWithSeatCapacity(2);
        static::assertTrue($table->isEmpty());
    }
}