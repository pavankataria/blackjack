<?php
/**
 * Created by PhpStorm.
 * User: pavankataria
 * Date: 19/02/2017
 * Time: 05:57
 */

namespace PavanKataria\BlackJack\Test;

use PHPUnit_Framework_TestCase;

class CardTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_can_be_hidden() {
        $card = Card::faceDown();
        $this->assertFalse($card->isFaceUp());
    }

    /** @test */
    public function it_can_be_visible()
    {
        $card = Card::faceUp();
        $this->assertTrue($card->isFaceUp());
    }
}