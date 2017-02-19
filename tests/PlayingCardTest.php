<?php
/**
 * Created by PhpStorm.
 * User: pavankataria
 * Date: 19/02/2017
 * Time: 17:25
 */

namespace PavanKataria\BlackJack\Test;


use PavanKataria\BlackJack\PlayingCard;
use PHPUnit_Framework_TestCase;

class PlayingCardTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_can_create_a_card()
    {
//        $builtCard = PlayingCard::makeFromString('7d');
        $builtCard = PlayingCard::make(8, Suit::DIAMONDS);
        $this->assertEquals(8, $builtCard->value);
        $this->assertEquals(Suit::DIAMONDS, $builtCard->suit);
//        $this->assertEquals($builtCard, $actualCard);
    }
}
