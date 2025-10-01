<?php

class P44_Swap
{
    public function main(): void
    {
        // Write your program here
        $array = [1, 3, 5, 7, 9];

        foreach ($array as $value) {
            echo $value . "\n";
        }

        echo "\n\n"; 

        $index1 = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $index2 = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if (isset($array[$index1]) && isset($array[$index2])) {
            $temp = $array[$index1];
            $array[$index1] = $array[$index2];
            $array[$index2] = $temp;
        }

        foreach ($array as $value) {
            echo $value . "\n";
        }
    }
}





