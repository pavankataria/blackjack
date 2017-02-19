<?php
/**
 * Created by PhpStorm.
 * User: pavankataria
 * Date: 19/02/2017
 * Time: 17:25
 */

namespace PavanKataria\BlackJack\Test;


use PavanKataria\BlackJack\Exception\PlayingCardException;
use PavanKataria\BlackJack\PlayingCard;
use PavanKataria\BlackJack\Suit;
use PHPUnit_Framework_TestCase;

/**
 * Class PlayingCardTest
 * @package PavanKataria\BlackJack\Test
 */
class PlayingCardTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_can_create_a_card()
    {
        $builtCard = PlayingCard::make(8, Suit::diamonds());
        static::assertEquals(8, $builtCard->value);
        static::assertEquals(Suit::diamonds(), $builtCard->suit);
    }

    /**
     * @expectedException \PavanKataria\BlackJack\Exception\PlayingCardException
     * @test
     */
    public function it_cannot_create_an_invalid_card()
    {
        $builtCard = PlayingCard::make(21, Suit::clubs());
    }

    /**
     * @test
     */
    public function it_can_create_a_card_with_face_value_constants(){
        $builtCard = PlayingCard::make(PlayingCard::JACK, Suit::clubs());
        $builtCard2 = PlayingCard::make(PlayingCard::ACE, Suit::clubs());
        static::assertEquals(11, $builtCard->value);
        static::assertEquals(1, $builtCard2->value);
    }
}
