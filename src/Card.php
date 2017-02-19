<?php
namespace PavanKataria\BlackJack;

/**
 * Class Card
 *
 * @package PavanKataria\BlackJack
 */
abstract class Card
{

    const FACE_UP   = 100;
    const FACE_DOWN = 101;

    /**
     * Determines the visibility of a card
     *
     * @var bool
     */
    private $_isFaceUp = false;

    /**
     * Determines whether the card is face up.
     *
     * @return bool
     */
    public function isFaceUp(): bool
    {
        return $this->_isFaceUp;
    }

    /**
     * Determines whether the card is face down.
     *
     * @return bool
     */
    public function isFaceDown(): bool
    {
        return !$this->_isFaceUp;
    }
}
