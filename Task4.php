namespace src;
<?php

class Task4
{
    public static function main(string $input): string
    {
        if (gettype($input) !== 'string') {
            throw new \InvalidArgumentException('Argument must be a string!');
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
