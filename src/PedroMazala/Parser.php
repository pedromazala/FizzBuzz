<?php
/**
 * Created by PhpStorm.
 * User: pedromazala
 * Date: 8/31/18
 * Time: 9:25 AM
 */

namespace App\PedroMazala;

use App\PedroMazala\Parser\ParserInterface;

class Parser
{
    /**
     * @var ParserInterface
     */
    private $parser;
    /**
     * @var Data
     */
    private $data;

    public function __construct(ParserInterface $parser, Data $data)
    {
        $this->parser = $parser;
        $this->data = $data;
    }

    public function parse(): array
    {
        $return = [];
        while ($this->data->hasNext()) {
            $value = $this->data->getNextItem();

            array_push($return, $this->parser->parse($value));
        }

        return $return;
    }
}
