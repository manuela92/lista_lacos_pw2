<!DOCTYPE html>
<html>
<head>
    <title>Ex 16</title>
</head>
<body>
    <h3>Série de Fibonacci até maior que 500</h3>
    <?php
    $a = 0;
    $b = 1;

    echo "Série de Fibonacci: ";
    while ($a <= 500) {
        echo $a . " ";
        $proximo = $a + $b;
        $a = $b;
        $b = $proximo;
    }
    ?>
</body>
</html>
