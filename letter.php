<?php

// A
// B C
// D E F
// G H I J

$n = 4;
// $alpha = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];

$alpha = 'A';
$index = 0;
for($i=1; $i<=$n; $i++){
    for($j=1; $j<=$n; $j++){
        if($j<=$i) {

            // echo $alpha[$index] . " ";
            // $index ++;

            echo $alpha . " ";
            $alpha ++;
        } else {
            echo " ";
        }
    }
    echo "\n";
}
