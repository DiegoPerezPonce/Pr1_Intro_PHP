<?php

class P37_AverageOfNumbers
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
            $sum += (float)$input;
        }

        $average = $count > 0 ? $sum / $count : 0;
        echo "Average of the numbers: " . $average . "\n";
    }
}

