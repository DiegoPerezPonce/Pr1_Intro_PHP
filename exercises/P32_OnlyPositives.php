<?php

class P32_OnlyPositives
{
    public function main(): void
    {
        // Write your code here
        while (true) {
            // Prompt the user for input
            echo "Give a number: ";

            // Get input from the user
            $number = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            // Check year value
            if ((int)$number === 0) {
                break;
            } elseif ((int)$number > 0) {
                echo ((int)$number * (int)$number) . "\n";
            } else {
                echo "Unsuitable number\n";
            }
        }
    }
}
