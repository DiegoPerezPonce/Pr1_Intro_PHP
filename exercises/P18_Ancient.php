<?php

class P18_Ancient{
    public function main(): void
    {
        // Prompt the user for input
        echo "Give a year: ";

        // Get input from the user
        $year = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        // Check year value
        if ($year < 2015) {
            echo "Ancient history!\n";
        }
    }
}


