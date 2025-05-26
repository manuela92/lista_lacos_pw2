<!DOCTYPE html>
<html>
<head>
    <title>Ex 18</title>
</head>
<body>
    <h3>Menor, maior e soma de N números</h3>
    <form method="post">
        Quantidade de números: <input type="number" name="qtd" min="1" required>
        <input type="submit" name="continuar" value="Continuar">
    </form>

    <?php
    if (isset($_POST['continuar'])) {
        $qtd = $_POST['qtd'];
        echo "<form method='post'>";
        for ($i = 1; $i <= $qtd; $i++) {
            echo "Número $i: <input type='number' name='num[]' required><br>";
        }
        echo "<input type='submit' value='Calcular'>";
        echo "</form>";
    }

    if (isset($_POST['num'])) {
        $numeros = $_POST['num'];
        $menor = $numeros[0];
        $maior = $numeros[0];
        $soma = 0;

        foreach ($numeros as $n) {
            if ($n < $menor) $menor = $n;
            if ($n > $maior) $maior = $n;
            $soma += $n;
        }

        echo "Menor: $menor<br>";
        echo "Maior: $maior<br>";
        echo "Soma: $soma";
    }
    ?>
</body>
</html>
