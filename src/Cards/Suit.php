<?php
/**
 * Created by PhpStorm.
 * User: pavankataria
 * Date: 19/02/2017
 * Time: 19:25
 */

namespace PavanKataria\BlackJack\Cards;


class Suit
{
    /**
     * Override to toggle between black and white ASCII symbol signs
     *
     * @var bool
     */
    const HEARTS = 100;
    const DIAMONDS = 101;
    const SPADES = 102;
    const CLUBS = 103;

    const CLUBS_SHORT_NAME ='c';
    const DIAMONDS_SHORT_NAME ='d';
    const HEARTS_SHORT_NAME ='h';
    const SPADES_SHORT_NAME ='s';

    const CLUBS_FULL_NAME ='Clubs';
    const DIAMONDS_FULL_NAME ='Diamonds';
    const HEARTS_FULL_NAME ='Hearts';
    const SPADES_FULL_NAME ='Spades';

    /**
     * Unicode signs
     *
     * @var array
     */
    protected $signs = [
        self::CLUBS => "\u{2663}",
        self::DIAMONDS => "\u{2666}",
        self::HEARTS => "\u{2665}",
        self::SPADES => "\u{2660}"
    ];

    /**
     * Suit short string representation
     *
     * @var array
     */
    protected $shortNames = [
        self::CLUBS =>  self::CLUBS_SHORT_NAME ,
        self::DIAMONDS => self::DIAMONDS_SHORT_NAME,
        self::HEARTS => self::HEARTS_SHORT_NAME,
        self::SPADES => self::SPADES_SHORT_NAME
    ];
    /**
     * Suit full string representation
     *
     * @var array
     */
    protected $fullNames = [
        self::CLUBS => self::CLUBS_FULL_NAME,
        self::DIAMONDS => self::DIAMONDS_FULL_NAME,
        self::HEARTS => self::HEARTS_FULL_NAME,
        self::SPADES => self::SPADES_FULL_NAME
    ];

    public $suit;

    /**
     * Suit constructor.
     *
     * @param $suit
     */
    private function __construct($suit)
    {
        //TODO: Create a Suit Assertion class that validates.
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

    /**
     * Returns an ASCII string representation of the current suit value
     *
     * @return String
     */
    public function symbol(): String {
        return $this->signs[$this->suit];
    }

    /**
     * Returns short suit name
     *
     * @return String
     */
    public function shortName(): String
    {
        return $this->shortNames[$this->suit];
    }

    /**
     * Returns full suit name
     *
     * @return String
     */
    public function fullName(): String
    {
        return $this->fullNames[$this->suit];
    }
}
