
<?php
$arr = [10, 5, 20, 8, 15];
$n = count($arr);

$largest = $secondLargest = $thirdLargest = 0;

// echo PHP_INT_MIN;

for ($i = 0; $i < $n; $i++) {

    if ($arr[$i] > $largest) {

        $thirdLargest = $secondLargest;
        $secondLargest = $largest;
        $largest = $arr[$i];

    } elseif ($arr[$i] > $secondLargest && $arr[$i] != $largest) {

        $thirdLargest = $secondLargest;
        $secondLargest = $arr[$i];

    } elseif ($arr[$i] > $thirdLargest && 
              $arr[$i] != $secondLargest && 
              $arr[$i] != $largest) {

        $thirdLargest = $arr[$i];
    }
}

echo "Third Largest: " . $thirdLargest;
