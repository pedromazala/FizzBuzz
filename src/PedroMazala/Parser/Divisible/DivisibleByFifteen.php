<?php
/**
 * Created by PhpStorm.
 * User: pedromazala
 * Date: 8/31/18
 * Time: 9:52 AM
 */

namespace App\PedroMazala\Parser\Divisible;

class DivisibleByFifteen extends AbstractDivisibleParser
{
    protected function getDivisor(): int
    {
        return 3*5;
    }

    protected function getParsed(int $value)
    {
        return "Xubiruba";
    }

}
