<?php
/**
 * Created by PhpStorm.
 * User: pedromazala
 * Date: 8/31/18
 * Time: 9:30 AM
 */

namespace App\PedroMazala\Parser;

interface ParserInterface
{
    public function next(): ?ParserInterface;

    public function match(int $value): bool;

    public function parse(int $value);
}
