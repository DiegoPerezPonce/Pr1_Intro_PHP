<?php

class P40_CountingToHundred
{
    public function main(): void
    {
        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $num = (int)$input;

        // Solo imprimimos números si el valor inicial es <= 100
        if ($num <= 100) {
            for ($i = $num; $i <= 100; $i++) {
                echo $i . "\n";
            }
        }
    }
}

