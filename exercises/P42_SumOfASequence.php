<?php

class P42_SumOfASequence
{
    public function main(): void
    {
        // Write your program here
        $n = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        $sum = 0;
        for ($i = 0; $i <= $n; $i++) {
            $sum += $i;
        }

        echo "The sum is $sum";
    }
}

