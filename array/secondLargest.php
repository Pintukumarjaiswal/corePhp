<?php

$arr = [12, 35, 1, 10, 34, 1];
 
// Sort the array in descending order

// rsort($arr);
// print_r($arr);
// echo "The second largest element is: " . $arr[1];
$largest = 0;
$secondLargest = 0;
$n = count($arr);
for($i=0; $i<$n; $i++){
    if($arr[$i] > $largest){
        $largest = $arr[$i];
    }

    if($arr[$i] > $secondLargest  && $arr[$i] < $largest){
        $secondLargest = $arr[$i];
    }

}

echo "The largest element is: " . $largest . "\n";
echo "The second largest element is: " . $secondLargest . "\n";