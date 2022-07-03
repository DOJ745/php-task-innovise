<?php

namespace src;

use InvalidArgumentException;

class Task1
{
    function main() : void{
        throw new InvalidArgumentException();
    }
    function testPrint(): void{
        print_r("branch check");
    }
}