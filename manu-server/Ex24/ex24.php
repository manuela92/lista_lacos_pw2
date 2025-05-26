<!DOCTYPE html>
<html>
<head>
    <title>Ex. 24</title>
</head>
<body>
    <h3>Média de N notas</h3>
    <form method="post">
        Quantidade de notas: <input type="number" name="qtd" min="1" required>
        <input type="submit" name="continuar" value="Continuar">
    </form>

    <?php
    if (isset($_POST['continuar'])) {
        $qtd = $_POST['qtd'];
        echo "<form method='post'>";
        for ($i = 1; $i <= $qtd; $i++) {
            echo "Nota $i: <input type='number' name='notas[]' step='0.01' required><br>";
        }
        echo "<input type='submit' value='Calcular Média'>";
        echo "</form>";
    }

    if (isset($_POST['notas'])) {
        $notas = $_POST['notas'];
        $soma = array_sum($notas);
        $media = $soma / count($notas);

        echo "A média é: " . number_format($media, 2);
    }
    ?>
</body>
</html>
