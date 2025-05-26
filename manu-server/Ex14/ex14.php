<!DOCTYPE html>
<html>
<head>
    <title>Ex 14</title>
</head>
<body>
    <h3>Contar Pares e Ímpares</h3>
    <form method="post">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "Número $i: <input type='number' name='num[]' required><br>";
        }
        ?>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_POST) {
        $numeros = $_POST['num'];
        $pares = 0;
        $impares = 0;

        foreach ($numeros as $n) {
            if ($n % 2 == 0) {
                $pares++;
            } else {
                $impares++;
            }
        }

        echo "Quantidade de números pares: $pares<br>";
        echo "Quantidade de números ímpares: $impares";
    }
    ?>
</body>
</html>
