<?php

namespace PavanKataria\BlackJack\Test;

use PavanKataria\BlackJack\Chips;
use PHPUnit_Framework_TestCase;

class ChipsTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_can_have_a_zero_value()
    {
        $chips = Chips::zero();

        $expectedAmount = $chips->amount();

        $this->assertEquals(0, $expectedAmount);
    }

    /** @test */
    public function we_can_create_a_new_group_of_chips_from_an_amount()
    {
        $chips = Chips::fromAmount(500);

        $expectedAmount = $chips->amount();

        $this->assertEquals(500, $expectedAmount);
    }

    /**
     * @expectedException \PavanKataria\BlackJack\Exception\ChipException
     * @test */
    public function it_cannot_be_negative()
    {
        $chips = Chips::fromAmount(-500);
    }
}
