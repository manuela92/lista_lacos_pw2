<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex. 5</title>
</head>
<body>

    <form method="post" action="ex3.php">
      <h1>Digite o valor da populção e taxa de crescimento</h1>  
      <hr>
      População A: <input type="text" name="popA" required><br>
      População B: <input type="text" name="popB" required><br>
      Taxa A: <input type="text" name="taxaA" required><br>
      Taxa B: <input type="text" name="taxaB" required><br>
  
      <input type="submit" value="Calcular"/>

    </form>
    
</body>
</html>

<?php
$popA = $_POST["popA"];
$popB = $_POST["popB"];

$taxaA = $_POST["taxaA"];
$taxaB = $_POST["taxaB"];

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
