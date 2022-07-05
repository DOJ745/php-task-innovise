namespace src;
<?php

class Task9
{
    private function formSumSequence(int ...$numbers): string
    {
        $result = '';
        foreach ($numbers as $number) {
            $result .= "$number + ";
        }

        return substr($result, 0, -2);
    }

    public function main(array $arr, int $number): array
    {
        $errMsg = 'One of the arguments has an invalid value!';
        if (gettype($arr) !== 'array' || gettype($number) !== 'integer') {
            throw new \InvalidArgumentException($errMsg);
        }

        $result = [];
        for ($i = 0; $i < count($arr); $i++) {
            $consNumSum = $arr[$i] + $arr[$i + 1] + $arr[$i + 2];
            if ($consNumSum === $number) {
                $sumOfNumbers = $this->formSumSequence($arr[$i], $arr[$i + 1], $arr[$i + 2]);
                $sumStr = "$sumOfNumbers = $number";
                $result[] = $sumStr;
            }
        }

        return $result;
    }
}
