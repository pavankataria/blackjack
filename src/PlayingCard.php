<?php

namespace PavanKataria\BlackJack;


use Assert\Assert;
use Assert\Assertion;
use Illuminate\Support\Collection;
use NumberFormatter;
use PavanKataria\BlackJack\Assertion\PlayingCardAssertion;
use PavanKataria\BlackJack\Exception\PlayingCardException;

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

    protected $shortFaceNames = [
        10 => 'T',
        self::JACK => 'J',
        self::QUEEN => 'Q',
        self::KING => 'K',
        self::ACE => 'A'
    ];
    protected $fullFaceNames = [
        self::JACK => 'Jack',
        self::QUEEN => 'Queen',
        self::KING => 'King',
        self::ACE => 'Ace'
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
        if (\in_array($this->value, \array_keys($this->shortFaceNames), true)) {
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
            $f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
            $fullNameValue = $f->format($this->value);
        }
        return ucfirst(strtolower($fullNameValue));
    }
}
