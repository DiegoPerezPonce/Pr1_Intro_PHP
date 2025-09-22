<?php

class P31_AreWeThereYet
{
    public function main(): void
    {
        // Write your code here
        do {
            // Prompt the user for input
            echo "Give a number: ";

            // Get input from the user
            $number = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            // Check year value
        } while ((int)$number !== 4);
    }
}

