<!DOCTYPE html>
<html>
<head>
    <title>Ex. 28</title>
</head>
<body>
    <h3>Valor total e médio de CDs</h3>
    <form method="post">
        Quantidade de CDs: <input type="number" name="qtd" min="1" required>
        <input type="submit" name="continuar" value="Continuar">
    </form>

    <?php
    if (isset($_POST['continuar'])) {
        $qtd = $_POST['qtd'];
        echo "<form method='post'>";
        for ($i = 1; $i <= $qtd; $i++) {
            echo "Valor do CD $i: <input type='number' name='valores[]' step='0.01' required><br>";
        }
        echo "<input type='submit' value='Calcular'>";
        echo "</form>";
    }

    if (isset($_POST['valores'])) {
        $valores = $_POST['valores'];
        $total = array_sum($valores);
        $media = $total / count($valores);

        echo "Valor total investido: R$ " . number_format($total, 2, ',', '.');
        echo "<br>Valor médio por CD: R$ " . number_format($media, 2, ',', '.');
    }
    ?>
</body>
</html>
