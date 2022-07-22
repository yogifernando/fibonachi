<?php
echo "Pola 1";
echo "<br>";

for($i =0; $i <=10; $i++ ){
    echo "<br>";

    for ($j = 0; $j <= $i; $j++){
        echo "j ";
    }

}

for($i = 10; $i >=0; $i-- ){
    echo "<br>";

    for ($j = $i; $j>=0; $j--){
        echo "j ";
    }

}

echo "<br>";
echo "<br>";
echo "Pola 2";
echo "<br>";

for ($i = 1; $i<=10; $i++)
{
    for ($j = 1; $j<$i; $j++){
        echo "J";
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";
echo "Pola 3";
echo "<br>";

for ($i = 10; $i>=0; $i--)
{
    for ($j = $i; $j>0; $j--){
        echo "J";
    }
    echo "<br>";
    
   
}

echo "<br>";
echo "<br>";
echo "Pola 4";
echo "<br>";

for ($i =1; $i<=5; $i++)
{
    for ($j = 5; $j>$i; $j--){
        echo "?";
    }
    for ($k = 1; $k<=$j; $k++){
        echo "*";
    }
    
    echo "<br>";
}

echo "<br>";
echo "<br>";
echo "Pola 5";
echo "<br>";

for ($i =1; $i<=5; $i++)
{
    for ($j = 1; $j<=$i; $j++){
        echo "*";
    }
    for ($k = 5; $k>=$i; $k--){
        echo $k;
    }
    
    echo "<br>";
} 


echo "<br>";
echo "<br>";
echo "Pola 6";
echo "<br>";

for ($i =0; $i<=5; $i++)
{
    for ($j = 5; $j>$i; $j--){
        echo "&nbsp";
    }

    for ($k = 1; $k<=$i; $k++){
        echo "*";
    }

    for ($L = 1; $L<=$k; $L++){
        echo "*";
    }
   
    
    echo "<br>";
}





?>