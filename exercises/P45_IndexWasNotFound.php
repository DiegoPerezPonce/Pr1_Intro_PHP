<?php

class P45_IndexWasNotFound
{
    public function main(): void
    {
        
        $array = [6, 2, 8, 1, 3, 0, 9, 7];

        // Write your code here
        $input = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        $index = array_search($input, $array);

        if ($index !== false) {
            echo $input . " is at index " . $index . ".";
        } else {
            echo $input . " was not found.";
        }
       
    }
}