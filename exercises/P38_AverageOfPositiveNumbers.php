<?php

class P38_AverageOfPositiveNumbers
{
    public function main(): void
    {
        // Write your program here
        $count = 0;
        $sum = 0;

        while (true) {
            // Prompt the user for input
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            // Check year value
            if ((int)$input === 0) {
                break;
            }

            if ((int)$input > 0) {
                $count++;
                $sum += (int)$input;
            }
        }

        if ($count > 0) {
            $average = $sum / $count;
            echo $average . "\n";
        } else {
            echo "Cannot calculate the average\n";
        }
    }
}

