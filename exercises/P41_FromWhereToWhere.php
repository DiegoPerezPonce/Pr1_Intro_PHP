<?php

class P41_FromWhereToWhere
{
    public function main(): void
    {
        // Write your program here
        $first = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $second = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        $from = min($first, $second);
        $to = max($first, $second);

        for ($i = $from; $i <= $to; $i++) {
            echo $i . "\n";
        }
    }
}

