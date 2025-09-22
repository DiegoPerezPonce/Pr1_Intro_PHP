<?php

class P27_CheckingTheAge
{
    public function main(): void
    {
        // Write your code here
        echo "How old are you? ";
        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $age = (int)$input;

        if ($age >= 0 && $age <= 120) {
            echo "Ok\n";
        } else {
            echo "Impossible!\n";
        }
    }
}
