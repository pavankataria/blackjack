<?php

namespace PavanKataria\BlackJack\Cards;

use NumberFormatter;
use PavanKataria\BlackJack\Assertion\PlayingCardAssertion;
use PavanKataria\BlackJack\Exception\PlayingCardException;
use PavanKataria\BlackJack\Cards\Suit;

/**
 * Class PlayingCard
 * @package PavanKataria\BlackJack
 */
class PlayingCard
{
    /**
     * Override to use symbols instead of short form string representation
     *
     * @var bool
     */
    public $useSymbols = false;

    //Face Cards
    const ACE = 1;
    const JACK = 11;
    const QUEEN = 12;
    const KING = 13;

    //Short Value Names
    const TEN_SHORT_NAME = 'T';
    const JACK_SHORT_NAME = 'J';
    const QUEEN_SHORT_NAME = 'Q';
    const KING_SHORT_NAME = 'K';
    const ACE_SHORT_NAME= 'A';

    //Full Value Names
    const JACK_FULL_NAME = 'Jack';
    const QUEEN_FULL_NAME = 'Queen';
    const KING_FULL_NAME = 'King';
    const ACE_FULL_NAME = 'Ace';

    /**
     * @var Suit
     */
    public $suit;

    /**
     * @var
     */
    public $value;

    /**
     * @var array
     */
    protected $validValues = [
        self::ACE,
        2, 3, 4, 5, 6, 7, 8, 9,
        self::JACK,
        self::QUEEN,
        self::KING
    ];

    /**
     * Short face name string representation
     *
     * @var array
     */
    protected $shortFaceNames = [
        10 => self::TEN_SHORT_NAME,
        self::JACK => self::JACK_SHORT_NAME,
        self::QUEEN => self::QUEEN_SHORT_NAME,
        self::KING => self::KING_SHORT_NAME,
        self::ACE => self::ACE_SHORT_NAME
    ];

    /**
     * Full face name string representation
     * 
     * @var array
     */
    protected $fullFaceNames = [
        self::JACK => self::JACK_FULL_NAME,
        self::QUEEN => self::QUEEN_FULL_NAME,
        self::KING => self::KING_FULL_NAME,
        self::ACE => self::ACE_FULL_NAME
    ];

    /**
     * PlayingCard constructor.
     * @param $value
     * @param Suit $suit
     */
    private function __construct($value, Suit $suit)
    {
        //Validate the value make sure it's only 2-10, or face cards only
        $this->validate($value, $suit);

        $this->suit = $suit;
        $this->value = $value;
    }

    /**
     * @param int $value
     * @param Suit $suit
     *
     * @return static
     */
    public static function make($value, Suit $suit)
    {
        return new static($value, $suit);
    }

    /**
     * Fluent Setter for using symbols for string representation
     *
     * @return PlayingCard
     */
    public function useSymbols(): PlayingCard {
        $this->useSymbols = true;
        return $this;
    }

    /**
     * @param int $value
     * @param Suit $suit
     * @throws PlayingCardException
     */
    public function validate($value, Suit $suit)
    {
        PlayingCardAssertion::inArray($value, $this->validValues);//, "Cannot create playing card from " . $value);
    }

    /**
     * Returns the name of the value in full. E.g. K, T, 8, etc.
     * @return string
     */
    public function valueShortName(): string {
        if(array_key_exists($this->value, $this->shortFaceNames)){
            $shortNameValue = $this->shortFaceNames[$this->value];
        } else {
            $shortNameValue = $this->value;
        }
        return strtoupper($shortNameValue);
    }

    /**
     * Returns the name of the value in full. E.g. King, Ten, Eight, etc.
     *
     * @return string
     */
    public function valueFullName(): string {
        if (\in_array($this->value, \array_keys($this->fullFaceNames), true)) {
            $fullNameValue = $this->fullFaceNames[$this->value];
        } else {
            $f = new NumberFormatter('en', NumberFormatter::SPELLOUT);
            $fullNameValue = $f->format($this->value);
        }
        return ucfirst(strtolower($fullNameValue));
    }

    /**
     * Returns short suit name
     *
     * @return String
     */
    public function suitShortName(): String
    {
        return $this->suit->shortName();
    }

    /**
     * Returns full suit name
     *
     * @return String
     */
    public function suitFullName(): String
    {
        return $this->suit->fullName();
    }

    /**
     * @return String
     */
    public function shortName(): String
    {
        $suitName = $this->useSymbols ? $this->suit->symbol() : $this->suit->shortName();
        return  $this->valueShortName() . $suitName;
    }

    /**
     * @return String
     */
    public function fullName(): String
    {
        return $this->valueFullName() . ' of ' . $this->suit->fullName();
    }

    /**
     * @return mixed
     */
    public function __toString()
    {
        return  $this->valueShortName() . $this->suit->shortName;
    }
}
