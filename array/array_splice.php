<?php


$colors = ["red", "green", "blue", "yellow", "orange"];
$fruits = ["apple", "banana", "grape", "orange", "kiwi"];


echo "<pre>";
print_r($colors);
echo "</pre>";


//  using array_splice

// $newColors = array_slice($colors,1,2); //green blue
// $newColors = array_splice($colors,1,2); // green blue

// $newArray = array_splice($colors,0,1,$fruits); // apple,banana,grape,orange,kiwi,green,blue,yellow,orange
// $newArray = array_splice($colors,count($colors),1,$fruits); // red,green,blue,yellow,orange,apple,banana,grape,orange,kiwi
// $newArray = array_splice($colors,2,2,$fruits); // red,green,apple,banana,grape,orange,kiwi,orange
// $newArray = array_splice($colors,-2,-2,$fruits); // red,green,blue,apple,banana,grape,orange,kiwi,yellow,orange
// $newArray = array_splice($colors,2,3,$fruits); // red,green,apple,banana,grape,orange,kiwi
$newArray = array_splice($colors,2,-2,$fruits); // red,green,apple,banana,grape,orange,kiwi,yellow,orange

echo "<pre>";
print_r($colors);
echo "</pre>";