<?php

class P24_OddOrEven
{
    public function main(): void
    {
        echo "Give a number:\n";
        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $number = (int)$input;

        if ($number % 2 === 0) {
            echo "Number is even.\n";
        } else {
            echo "Number is odd.\n";
        }
    }
}

