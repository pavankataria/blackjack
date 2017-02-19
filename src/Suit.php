<?php
/**
 * Created by PhpStorm.
 * User: pavankataria
 * Date: 19/02/2017
 * Time: 19:25
 */

namespace PavanKataria\BlackJack;


class Suit
{

    const HEARTS = 100;
    const DIAMONDS = 101;
    const SPADES = 102;
    const CLUBS = 103;

    public $suit;

    /**
     * Suit constructor.
     *
     * @param $suit
     */
    public function __construct($suit)
    {
        $this->suit = $suit;
    }

    /**
     * Create an Clubs suit
     *
     * @return Suit
     */
    public static function clubs()
    {
        return new static(self::CLUBS);
    }

    /**
     * Create an Diamonds suit
     *
     * @return Suit
     */
    public static function diamonds()
    {
        return new static(self::DIAMONDS);
    }


    /**
     * Create an Hearts suit
     *
     * @return Suit
     */
    public static function hearts()
    {
        return new static(self::HEARTS);
    }

    /**
     * Create a Spades suit
     *
     * @return Suit
     */
    public static function spades()
    {
        return new static(self::SPADES);
    }
}
