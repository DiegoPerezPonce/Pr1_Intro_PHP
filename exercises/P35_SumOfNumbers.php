<?php

class P35_SumOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $sum = 0;

        while (true) {
            // Prompt the user for input
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            // Check year value
            if ((int)$input === 0) {
                break;
            }

            $sum += (int)$input;
        }

        echo "Sum of the numbers: " . $sum . "\n";
    }
}

