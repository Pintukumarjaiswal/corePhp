
<?php 

$arr = [1, 4, 3, 2, 6, 5];

 echo "<pre>";
 print_r($arr);
 echo "</pre>";
// array reverse from Built function
 $new = array_reverse($arr);

//  echo "<pre>";
//  print_r($new);
//  echo "</pre>";
// array reverse form loop
$n = count($arr);
$new = [];
for($i = $n-1; $i>=0;$i--){
    $new[] = $arr[$i];
}
 echo "<pre>";
 print_r($new);
 echo "</pre>";