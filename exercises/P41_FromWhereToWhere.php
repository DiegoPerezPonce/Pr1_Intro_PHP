<?php

class P41_FromWhereToWhere
{
    public function main(): void
    {
        // Leer los dos números desde STDIN
        $first = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $second = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        // Determinar el rango correcto
        $from = min($first, $second);
        $to = max($first, $second);

        // Solo imprimir si from <= to
        for ($i = $from; $i <= $to; $i++) {
            echo $i . "\n";
        }
    }
}

