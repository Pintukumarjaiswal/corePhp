<?php

$arr = [1,2,4,5,1,2,4,8,7,5,6,3,2];

$length = count($arr);

for($i =0; $i < $length; $i++){
    $count = 1;
    for($j= $i+1; $j< $length; $j++){
        if($arr[$i] == $arr[$j]){
            $count++;
        }
    }

    $alreadyPrint = false;
    for($k=0; $k<$i;$k++){
        if($arr[$i]==$arr[$k]){
    $alreadyPrint = true;
    break;

        }

    }

    if(!$alreadyPrint){
        echo $arr[$i] ."=>".$count."<br>";
    }
}


