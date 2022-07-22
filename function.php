<?php

function fibonachi(){
    $fib = [];
    for ($k = 0; $k < 10; $k++) {
      if ($k < 2 ) {
        $fib [$k] = 1;
      } else{
        $fib[$k] = $fib[$k - 1] + $fib[$k - 2];
      }
        echo $fib[$k];
    }
 
}

echo (fibonachi());
?>