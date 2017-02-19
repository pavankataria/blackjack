<?php

namespace PavanKataria\BlackJack;

use Cysha\Casino\Cards\Suit;
use InvalidArgumentException;

/**
 * Class PlayingCard
 * @package PavanKataria\BlackJack
 */
class PlayingCard
{
    const ACE = 1;
    const JACK = 11;
    const QUEEN = 12;
    const KING = 13;
    const ACE_HIGH = 14; //Useful for poker

    /**
     * @var Suit
     */
    protected $suit;

    /**
     * @var
     */
    protected $value;

    /**
     * PlayingCard constructor.
     * @param Suit $suit
     * @param $value
     */
    private function __construct(Suit $suit, $value)
    {
        $this->suit = $suit;
        $this->value = $value;
    }

    /**
     * @param $value
     * @param $suit
     * @return static
     */
    public static function make($value, $suit)
    {
        return new static($value, $suit);
    }
}
