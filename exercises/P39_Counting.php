<?php

class P39_Counting
{
    public function main(): void
    {
        // Write your program here
        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $num = (int)$input;

        for ($i = 0; $i <= $num; $i++) {
            echo $i . "\n";
        }
    }
}

