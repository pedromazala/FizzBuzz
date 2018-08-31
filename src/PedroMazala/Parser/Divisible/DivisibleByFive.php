<?php
/**
 * Created by PhpStorm.
 * User: pedromazala
 * Date: 8/31/18
 * Time: 9:51 AM
 */

namespace App\PedroMazala\Parser\Divisible;

class DivisibleByFive extends AbstractDivisibleParser
{
    protected function getDivisor(): int
    {
        return 5;
    }

    protected function getParsed(int $value)
    {
        return "Buzz";
    }

}
