<?php

namespace src;

use InvalidArgumentException;
use TypeError;

class Task4
{
    public function main(string $input): string
    {
        if (gettype($input) !== 'string') {
            throw new InvalidArgumentException('Argument must be a string!');
        }
        $result = '';
        $strLen = strlen($input);

        for ($i = 0; $i < $strLen; $i++) {
            if ($input[$i] === '_' || $input[$i] === '-' || $input[$i] === ' ') {
                $result .= strtoupper($input[$i + 1]);
                $i += 2;
            }
            $result .= $input[$i];
        }

        return $result;
    }
}

$test = new Task4();

try {
    print_r($test->main('The quick-brown_fox jumps over the_lazy-dog'));
} catch (TypeError $e) {
    print_r($e->getMessage());
}
