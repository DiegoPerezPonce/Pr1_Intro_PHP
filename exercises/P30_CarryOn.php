<?php

class P30_CarryOn
{
    public function main(): void
    {
        // Write your code here
        do {
            // Prompt the user for input
            echo "Carry on? ";

            // Get input from the user
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            // Check year value
            // (no need to check, just repeat until "no")
        } while (strtolower($input) !== "no");
    }
}
