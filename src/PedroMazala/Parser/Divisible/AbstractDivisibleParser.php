<?php
/**
 * Created by PhpStorm.
 * User: pedromazala
 * Date: 8/31/18
 * Time: 9:32 AM
 */

namespace App\PedroMazala\Parser\Divisible;

use App\PedroMazala\Parser\AbstractParser;

abstract class AbstractDivisibleParser extends AbstractParser
{
    public function match(int $value): bool
    {
        return ($value % $this->getDivisor() === 0);
    }

    abstract protected function getDivisor(): int;
}
