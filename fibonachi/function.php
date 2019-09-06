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

function baru(){
$Array2D = [];
$totalBaris = 10;
$totalKolom = 10;
  for ($baris = 0; $baris < $totalBaris; $baris++) {
    $Array2D = [];
    $a = 0;
    for ($kolom = 0; $kolom < $totalKolom; $kolom++) {
      if ($baris + $kolom == $totalKolom - 1) {
        $Array2D[$baris][$kolom] = $a;
      } else {
        $Array2D[$baris][$kolom] = " ";
      }
      $a += 2;
    }
     var_dump ($Array2D[$baris][$kolom]);
  }
};

echo (fibonachi());
echo (baru());

?>