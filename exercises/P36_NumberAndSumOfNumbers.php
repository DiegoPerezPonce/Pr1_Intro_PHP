<?php

class P36_NumberAndSumOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $count = 0;
        $sum = 0;

        while (true) {
            // Prompt the user for input
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            // Check year value
            if ((int)$input === 0) {
                break;
            }

            $count++;
            $sum += (int)$input;
        }

        echo "Number of numbers: " . $count . "\n";
        echo "Sum of the numbers: " . $sum . "\n";
    }
}

