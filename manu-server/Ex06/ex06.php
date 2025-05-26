<!DOCTYPE html>
<html>
<head>
    <title>Exercício 6</title>
</head>
<body>
    <h3>Números de 1 a 20 (um abaixo do outro):</h3>
    <?php
    for ($i = 1; $i <= 20; $i++) {
        echo $i . "<br>";
    }
    ?>

    <h3>Números de 1 a 20 (um ao lado do outro):</h3>
    <?php
    for ($i = 1; $i <= 20; $i++) {
        echo $i . " ";
    }
    ?>
</body>
</html>
