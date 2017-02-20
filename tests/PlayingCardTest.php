<?php
/**
 * Created by PhpStorm.
 * User: pavankataria
 * Date: 19/02/2017
 * Time: 17:25
 */

namespace PavanKataria\BlackJack\Test;


        use PavanKataria\BlackJack\Exception\PlayingCardException;
        use PavanKataria\BlackJack\Cards\PlayingCard;
        use PavanKataria\BlackJack\Cards\Suit;
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
    public function it_can_create_a_card_with_face_value_constants()
    {
        $builtCard = PlayingCard::make(PlayingCard::JACK, Suit::clubs());
        $builtCard2 = PlayingCard::make(PlayingCard::ACE, Suit::clubs());
        static::assertEquals(11, $builtCard->value);
        static::assertEquals(1, $builtCard2->value);
    }

    /** @test */
    public function it_can_return_a_short_value_name()
    {
        $builtCard = PlayingCard::make(5, Suit::clubs());
        $builtCard2 = PlayingCard::make(PlayingCard::ACE, Suit::clubs());
        static::assertEquals("5", $builtCard->valueShortName());
        static::assertEquals("A", $builtCard2->valueShortName());
    }
    /** @test */
    public function it_can_return_a_full_value_name()
    {
        $builtCard = PlayingCard::make(5, Suit::clubs());
        $builtCard2 = PlayingCard::make(PlayingCard::ACE, Suit::clubs());
        static::assertEquals('Five', $builtCard->valueFullName());
        static::assertEquals('Ace', $builtCard2->valueFullName());
    }

    /** @test */
    public function it_can_return_a_short_suit_name()
    {
        $builtCard = PlayingCard::make(5, Suit::diamonds());
        $builtCard2 = PlayingCard::make(PlayingCard::ACE, Suit::spades());
        static::assertEquals('d', $builtCard->suitShortName());
        static::assertEquals('s', $builtCard2->suitShortName());
    }


    /** @test */
    public function it_can_return_a_full_suit_name()
    {
        $builtCard = PlayingCard::make(5, Suit::diamonds());
        $builtCard2 = PlayingCard::make(PlayingCard::ACE, Suit::spades());
        static::assertEquals('Diamonds', $builtCard->suitFullName());
        static::assertEquals('Spades', $builtCard2->suitFullName());
    }


    /** @test */
    public function it_can_return_short_card_name()
    {
        $builtCard = PlayingCard::make(5, Suit::diamonds());
        $builtCard2 = PlayingCard::make(PlayingCard::ACE, Suit::spades());
        static::assertEquals('5d', $builtCard->shortName());
        static::assertEquals('As', $builtCard2->shortName());
    }

    /** @test */
    public function it_can_return_short_card_name_with_symbol_sign()
    {
        $builtCard = PlayingCard::make(5, Suit::diamonds())
            ->useSymbols();
        $builtCard2 = PlayingCard::make(PlayingCard::ACE, Suit::spades())
            ->useSymbols();
        static::assertEquals('5♦', $builtCard->shortName());
        static::assertEquals('A♠', $builtCard2->shortName());
    }

    /** @test */
    public function it_can_return_full_card_name()
    {
        $builtCard = PlayingCard::make(5, Suit::diamonds());
        $builtCard2 = PlayingCard::make(PlayingCard::ACE, Suit::spades());
        static::assertEquals('Five of Diamonds', $builtCard->fullName());
        static::assertEquals('Ace of Spades', $builtCard2->fullName());
    }

    /** @test */
    public function it_can_print_itself()
    {
        $builtCard = PlayingCard::make(PlayingCard::KING, Suit::clubs());
        static::assertEquals('Kc', $builtCard->shortName());
        static::assertEquals('King of Clubs', $builtCard->fullName());
    }
}
