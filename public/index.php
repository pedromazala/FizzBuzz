<?php
require_once __DIR__ . '/../vendor/autoload.php';


$data = new \App\PedroMazala\Data(1, 100);

$one = new \App\PedroMazala\Parser\Divisible\DivisibleByOne();
$three = new \App\PedroMazala\Parser\Divisible\DivisibleByThree($one);
$five = new \App\PedroMazala\Parser\Divisible\DivisibleByFive($three);
$fifteen = new \App\PedroMazala\Parser\Divisible\DivisibleByFifteen($five);

$parser = new \App\PedroMazala\Parser($fifteen, $data);

$parsedValues = $parser->parse();

foreach ($parsedValues as $value) {
    print $value . PHP_EOL;
}
