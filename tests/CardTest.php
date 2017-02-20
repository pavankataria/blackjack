<?php
/**
 * Created by PhpStorm.
 * User: pavankataria
 * Date: 19/02/2017
 * Time: 05:57
 */

namespace PavanKataria\BlackJack\Test;

use PavanKataria\BlackJack\Cards\Card;
use PHPUnit_Framework_TestCase;

class CardTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_can_be_hidden()
    {
        $stub = $this->getMockForAbstractClass(
            Card::class,
            [],
            '',
            false,
            true,
            true,
            ['isFaceDown']
        );

        $stub->expects(static::any())
            ->method('isFaceDown')
            ->will(static::returnValue(true));

        static::assertTrue($stub->isFaceDown());
    }

    /** @test */
    public function it_can_be_shown()
    {
        $stub = $this->getMockForAbstractClass(
            Card::class,
            [],
            '',
            false,
            true,
            true,
            ['isFaceUp']
        );

        $stub->expects(static::any())
            ->method('isFaceUp')
            ->will(
                static::returnValue(true)
            );

        static::assertTrue($stub->isFaceDown(false));
    }
}
