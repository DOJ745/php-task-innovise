<?php

namespace src;

use Exception;
use InvalidArgumentException;
use TypeError;

class Task10
{
    public function main(int $input): array
    {
        if (gettype($input) !== 'integer' || $input < 0) {
            throw new InvalidArgumentException('Argument must be a positive number!');
        }
        $result = [$input];
        while ($input > 1) {
            if ($input % 2 === 0) {
                $input /= 2;
            } else {
                $input = $input * 3 + 1;
            }

            $result[] = $input;
        }

        return $result;
    }
}

$test = new Task10();

try {
    print_r($test->main(67));
} catch (TypeError $e) {
    print_r($e->getMessage());
} catch (Exception $e) {
    print_r($e->getMessage());
}
