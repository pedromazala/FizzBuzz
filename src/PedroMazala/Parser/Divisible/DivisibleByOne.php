<?php
/**
 * Created by PhpStorm.
 * User: pedromazala
 * Date: 8/31/18
 * Time: 9:37 AM
 */

namespace App\PedroMazala\Parser\Divisible;

class DivisibleByOne extends AbstractDivisibleParser
{
    protected function getDivisor(): int
    {
        return 1;
    }

    public function getParsed(int $value)
    {
        return $value;
    }

}
