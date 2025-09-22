<?php

class P43_Factorial
{
    public function main(): void
    {
        // Leer el número desde STDIN
        $n = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        $factorial = 1;

        // Calcular factorial iterativamente
        for ($i = 1; $i <= $n; $i++) {
            $factorial *= $i;
        }

        echo "Factorial: $factorial";
    }
}
