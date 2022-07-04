<?php

namespace src;

use InvalidArgumentException;
use TypeError;

class Task1
{
    public function main(int $inputNumber): string
    {
        if(gettype($inputNumber) !== "integer") throw new InvalidArgumentException("Argument must be a number!");
        // To be honest, such many ternary operators can break someone's head
        return $inputNumber > 30 ? "More than 30" :
            ($inputNumber > 20 ? "More than 20" : ($inputNumber > 10 ? "More than 10" : "Equals or less than 10"));
    }
}

$test = new Task1();
try {
    $arg = 21;
    print_r($test->main($arg));
} catch (TypeError $e) {
    print_r($e->getMessage());
}

