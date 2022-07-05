namespace src;
<?php

class Task1
{
    public function main(int $inputNumber): string
    {
        if (gettype($inputNumber) !== 'integer') {
            throw new \InvalidArgumentException('Argument must be a number!');
        }

        return $inputNumber > 30 ? 'More than 30' :
            ($inputNumber > 20 ? 'More than 20' : ($inputNumber > 10 ? 'More than 10' : 'Equals or less than 10'));
    }
}
