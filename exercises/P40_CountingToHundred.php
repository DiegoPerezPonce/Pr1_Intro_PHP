<?php

class P40_CountingToHundred
{
    public function main(): void
    {
        // Write your program here
        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $num = (int)$input;

        if ($num <= 100) {
            for ($i = $num; $i <= 100; $i++) {
                echo $i . "\n";
            }
        }
    }
}

