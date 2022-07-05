namespace src;
<?php

class Task5
{
    private function getFib($n): float
    {
        return round(pow((sqrt(5) + 1) / 2, $n) / sqrt(5));
    }

    private function fib2($n, $c = 2, $n2 = 0, $n1 = 1)
    {
        return $c < $n ? $this->fib2($n, $c + 1, $n1, $n1 + $n2) : $n1 + $n2;
    }

    public function main(int $n): string
    {
        $i = 1;
        $result = 0.0;
        while (strlen((string) $this->fib2($i)) <= $n) {
            $result = $this->fib2($i);
            $i++;
        }

        return $result;
    }
}

$test = new Task5();
print_r($test->main(18));
