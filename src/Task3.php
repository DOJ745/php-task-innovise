namespace src;
<?php

class Task3
{
    private function countNumSum(int $num): int
    {
        $absNum = (string) abs($num);
        $strLen = strlen($absNum);
        $result = 0;

        for ($i = $strLen - 1; $i >= 0; $i--) {
            $result += (int) $absNum[$i];
        }

        return $result;
    }

    public function main(int $num): int
    {
        if (gettype($num) !== 'integer') {
            throw new \InvalidArgumentException('Argument must be a number!');
        }

        $numLength = strlen((string) $this->countNumSum($num));
        $result = $this->countNumSum($num);

        while ($numLength > 1) {
            $numLength = strlen((string) $this->countNumSum($num));
            $result = $this->countNumSum($num);
            $num = $result;
        }

        return $result;
    }
}
