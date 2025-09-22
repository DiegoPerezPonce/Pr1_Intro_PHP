<?php

class P34_NumberOfNegativeNumbers
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
            } elseif ((int)$input < 0) {
                $count++;
            }
        }

        echo "Number of negative numbers: " . $count . "\n";
    }
}
