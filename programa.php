<?php


$indice=13;
$SOMA=0;
$k=0;

while($k<$indice){


$k=$k+1;

$SOMA=$SOMA+$k;
}

echo $SOMA;





function fibonacci($numero_maximo):array
{
    $veta = [0,1];

    for($i=1;$i<$numero_maximo;$i++)
    {
        array_push($veta, $veta[$i]+$veta[$i-1]);
    }
    return $veta;
}

print_r(fibonacci(10));




/*a=1,3,5,7,9
b=2,4,8,16,32,64
c=0,1,4,9,16,25,36,49
PA
d=4,16,36,64,100
fibonacci
e=1,1,2,3,5,8,13

f=?


4) 

velocidademedia/ distancia
80km=1h25m
110km=50m
*/

$b="teste";
$c=mb_strlen($b);
echo $c;

 echo strrev($b);