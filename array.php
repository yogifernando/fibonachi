<?php

$array = [1,2,3,4];

foreach ($array as $a){
    echo "$a <br>";
}
echo "<br>";
//array multi dimensi
$array = [[1,2,3],[4,5,6],[7,8,9]];

foreach ($array as $a){
    echo "<br>";
    foreach ($a as $b){
        echo "$b <br>";
    }
}

echo "<br>";
// array assosiatif foreach ($array as $key => $value)
$array = ["VR46" =>46,
          "Peccoo" => 63,
          "Morbidelli" => 21,
          "Marini" => 10];

foreach ($array as $namerider => $a){
    echo "$a<br>";
}
?>