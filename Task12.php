namespace src;
<?php

class CustomCalc
{
    private int $argOne;
    private int $argTwo;
    private int $result = 0;

    public function __construct(int $a, int $b)
    {
        if (gettype($a) !== 'integer' || gettype($b) !== 'integer') {
            throw new \InvalidArgumentException('One of the arguments is not a number!');
        }
        $this->argOne = $a;
        $this->argTwo = $b;
    }

    public function add(): static
    {
        $this->result = $this->argOne + $this->argTwo;

        return $this;
    }

    public function subtraction(): static
    {
        $this->result = $this->argOne - $this->argTwo;

        return $this;
    }

    public function multiply(): static
    {
        $this->result = $this->argOne * $this->argTwo;

        return $this;
    }

    public function divideBy(int $num): static
    {
        $this->result /= $num;

        return $this;
    }

    public function __toString(): string
    {
        return $this->result;
    }
}

class Task12
{
    public static function main(): void
    {
        $test = new CustomCalc(6, 3);
        print($test->add() . '</br>');
        print($test->subtraction() . '</br>');
        print($test->multiply() . '</br>');
        print($test->add()->divideBy(9). '</br>');
        print($test->subtraction()->divideBy(3). '</br>');
        print($test->multiply()->divideBy(2). '</br>');
    }
}
