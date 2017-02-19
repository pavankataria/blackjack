<?php
/**
 * Created by PhpStorm.
 * User: pavankataria
 * Date: 19/02/2017
 * Time: 19:54
 */

namespace PavanKataria\BlackJack\Exception;

use Assert\InvalidArgumentException;

/**
 * Class PlayingCardException
 * @package PavanKataria\BlackJack\Exception
 */
class PlayingCardException extends InvalidArgumentException
{
    /**
     * @param $string
     * @param null $message
     * @return static
     */
    public static function cannotCreateFromInvalidString($string, $message = null)
    {
        return new static($message ?? 'Cannot create playing card from \'' . $string . '\'');
    }
}

