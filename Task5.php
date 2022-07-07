namespace src;
<?php

class Task5
{
    private static function fibonacci(int $n): \GMP|int
    {
        if ($n === 0 || $n === 1) {
            return $n;
        }
        $result = 0;
        $x = 0; // First fibonacci number
        $y = 1; // Second fibonacci number

        for ($i = 0; $i <= $n; $i++) {
            $result = gmp_add($x, $y);
            $x = $y;
            $y = $result;
        }

        return $result;
    }

    public static function main(int $n): string
    {
        if (gettype($n) !== 'integer') {
            throw new \InvalidArgumentException('Argument must be a number!');
        }
        $i = 0;
        $result = 0;

        while (strlen(gmp_strval(Task5::fibonacci($i))) <= $n) {
            $result = Task5::fibonacci($i);
            if (strlen(gmp_strval($result)) === $n) {
                break;
            }
            $i++;
        }

        return gmp_strval($result);
    }
}
