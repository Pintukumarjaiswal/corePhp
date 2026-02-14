
<?php

$arr = [6,4,8,3,2,9,6,3,5,8,7,4,1,2,5,3];

// print_r($arr);

//  using for loop

$count = count($arr);
$uniqueArr = [];

for($i = 0;$i <$count; $i++){
    $duplicate = false;
    for($j=0;$j<count($uniqueArr);$j++){
        if($arr[$i] == $uniqueArr[$j]){
            $duplicate = true;
            break;
        }
    }
    if(!$duplicate){
        $uniqueArr[] = $arr[$i];
    }
}
echo "Unique elements using for loop: \n";
echo "<pre>";
print_r($uniqueArr);
echo "</pre>";