<!DOCTYPE html>
<html>
<head>
    <title>Ex. 8</title>
</head>
<body>
    <h3>Soma e média de 5 números</h3>
    <form method="post">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "Número $i: <input type='number' name='num[]' required><br>";
        }
        ?>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_POST) {
        $numeros = $_POST['num'];
        $soma = 0;
        for ($i = 0; $i < 5; $i++) {
            $soma += $numeros[$i];
        }
        $media = $soma / 5;
        echo "Soma: $soma<br>";
        echo "Média: $media";
    }
    ?>
</body>
</html>
