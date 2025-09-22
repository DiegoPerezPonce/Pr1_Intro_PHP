<?php

class P33_NumberOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $count = 0;

        while (true) {
            // Prompt the user for input
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            // Check year value
            if ((int)$input === 0) {
                break;
            } else {
                $count++;
            }
        }

        echo "Number of numbers: " . $count . "\n";
    }
}

