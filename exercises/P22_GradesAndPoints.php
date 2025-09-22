<?php

class P22_GradesAndPoints
{
    public function main(): void
    {
        // Write your code here
        echo "Give points: ";
        $points = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $num = (int)$points;

        if ($num < 0) {
            echo "impossible!\n";
        } elseif ($num <= 49) {
            echo "failed\n";
        } elseif ($num <= 59) {
            echo "1\n";
        } elseif ($num <= 69) {
            echo "2\n";
        } elseif ($num <= 79) {
            echo "3\n";
        } elseif ($num <= 89) {
            echo "4\n";
        } elseif ($num <= 100) {
            echo "5\n";
        } else {
            echo "incredible!\n";
        }
    }
}
