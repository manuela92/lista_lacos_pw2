<?php
$popA = 80000;
$popB = 200000;

$taxaA = 0.03;
$taxaB = 0.015;

$ano = 0;

while($popA<$popB){
    $popA += $popA*$taxaA;
    $popB += $popB*$taxaB;
    $ano++;
}

echo "$ano anos para a população do país A ultrapassar ou igualar a do país B <br>";
echo "População final de A: $popA <br>";
echo "População final de B: $popB";
 

?>