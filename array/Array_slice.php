<?php

$input = array("a", "b", "c", "d", "e");


echo "<pre>";
print_r($input);
echo "</pre>";

// using array_slice

$new = array_slice($input, 0,1); // a
// $new = array_slice($input, 1,3); // b,c,d
// $new = array_slice($input, 1,1); // b
// $new = array_slice($input, 0,sizeof($input)); // b

// $new = array_slice($input, -1,1); // e
// $new = array_slice($input, -4,2); // b,c
// $new = array_slice($input,-2,-2); // empty array
// $new = array_slice($input,-2,-1); // d





echo "<pre>";
print_r($new);
echo "</pre>";