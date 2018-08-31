<?php
/**
 * Created by PhpStorm.
 * User: pedromazala
 * Date: 8/31/18
 * Time: 9:38 AM
 */

namespace App\PedroMazala\Parser\Divisible;

class DivisibleByTree extends AbstractDivisibleParser
{
    protected function getDivisor(): int
    {
        return 3;
    }

    public function getParsed(int $value)
    {
        return 'Fizz';
    }

}
