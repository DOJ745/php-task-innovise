<?php

namespace src;

use InvalidArgumentException;
use TypeError;

class Task7
{
    function main(array $arr, int $position) : array{
        if(gettype($arr) !== "array") throw new InvalidArgumentException("Argument must be an array!");
        array_splice($arr, $position, 1);
        return $arr;
    }
}

$test = new Task7();

try{
    $testArr = array(1, 5, 7, 8, 10, 2, 3);
    print_r($test->main($testArr, 4));
}
catch (TypeError $e){
    print_r($e->getMessage());
}