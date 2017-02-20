<?php
/**
 * Created by PhpStorm.
 * User: pavankataria
 * Date: 20/02/2017
 * Time: 05:01
 */

namespace PavanKataria\BlackJack\Casino;


//use Ramsey\Uuid\Uuid;

interface TableInterface
{
//    public function id(): UuidInterface;
    public function seats(): SeatCollection;
}


