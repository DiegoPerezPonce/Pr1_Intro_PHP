<?php

class P13_SimpleCalculator {
    public function main(): void {
        // Define two numbers
        $numA = 8;
        $numB = 2;
        $decimals = 1;

        // Perform and output the calculations
        // Write the program here

        echo "8 + 2 = " . $numA + $numB . "\n";
        echo "8 - 2 = " . $numA - $numB . "\n";
        echo "8 * 2 = " . $numA * $numB . "\n";
        echo "8 / 2 = " . number_format($numA / $numB, $decimals) . "\n";

        //echo "8 / 2 = " . ((float)$numA / (float)$numB) . "\n";
        


        

       
    }
}
