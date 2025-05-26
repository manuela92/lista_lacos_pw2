<!DOCTYPE html>
<html>
<head>
    <title>Exercício 9</title>
</head>
<body>
    <h3>Números ímpares de 1 a 50:</h3>
    <?php
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 2 != 0) {
            echo $i . " ";
        }
    }
    ?>
</body>
</html>
