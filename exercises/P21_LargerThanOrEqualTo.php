<?php

class P21_LargerThanOrEqualTo
{
    public function main(): void
    {
        // Write your code here
        // Prompt the user for input
        echo "Give the first number: ";
        // Get input from the user
        $first = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        // Prompt the user for input
        echo "Give the second number: ";
        // Get input from the user
        $second = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        // Check year value
        $num1 = (int)$first;
        $num2 = (int)$second;

        if ($num1 > $num2) {
            echo "Greater number is: $num1\n";
        } elseif ($num2 > $num1) {
            echo "Greater number is: $num2\n";
        } else {
            echo "The numbers are equal!\n";
        }
    }
}
