<!DOCTYPE html>
<html>
<head>
    <title>Ex. 7</title>
</head>
<body>
    <h3>Maior número entre 5 números</h3>
    <form method="post">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "Número $i: <input type='number' name='num[]' required><br>";
        }
        ?>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_POST) {
        $numeros = $_POST['num'];
        $maior = $numeros[0];
        for ($i = 1; $i < 5; $i++) {
            if ($numeros[$i] > $maior) {
                $maior = $numeros[$i];
            }
        }
        echo "O maior número é: $maior";
    }
    ?>
</body>
</html>
