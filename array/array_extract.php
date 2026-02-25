<?php

$arr = array("a" => "apple","b"=>"ball","c"=>"cat","d"=>"dog");

// echo "<pre>";
// print_r($arr); 
// echo"</pre>";
 
// $new  = extract($arr);
// $new  = extract($arr,EXTR_PREFIX_ALL,"test");
// echo $test_a."<br>";
// echo $test_b."<br>";
// echo $test_c."<br>";
// echo $test_d."<br>";
// $new  = extract($arr,EXTR_SKIP,);
$new  = extract($arr,EXTR_PREFIX_SAME,"test"); 

echo "<pre>";
print_r($new,); 
echo"</pre>";
echo $a."<br>";
echo $b."<br>";
echo $c."<br>";
echo $d."<br>";