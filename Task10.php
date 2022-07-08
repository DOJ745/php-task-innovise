<?php

namespace src;

class Task10
{
    public static function main(int $input): array
    {
        if (gettype($input) !== 'integer' || $input < 0) {
            throw new \InvalidArgumentException('Argument must be a positive number!');
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
