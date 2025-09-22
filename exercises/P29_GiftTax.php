<?php

class P29_GiftTax
{
    public function main(): void
    {
        // Write your code here
        echo "Value of the gift? ";
        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $gift = (float)$input;

        if ($gift < 5000) { // solo valores menores a 5000 no pagan
            echo "No tax!\n";
            return;
        }

        $tax = 0;

        if ($gift <= 25000) {
            $tax = 100 + ($gift - 5000) * 0.08;
        } elseif ($gift <= 55000) {
            $tax = 1700 + ($gift - 25000) * 0.10;
        } elseif ($gift <= 200000) {
            $tax = 4700 + ($gift - 55000) * 0.12;
        } elseif ($gift <= 1000000) {
            $tax = 22100 + ($gift - 200000) * 0.15;
        } else {
            $tax = 142100 + ($gift - 1000000) * 0.17;
        }

        echo "Tax: " . (int)$tax . "\n";
    }
}


