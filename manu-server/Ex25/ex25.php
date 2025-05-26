<!DOCTYPE html>
<html>
<head>
    <title>Ex. 25</title>
</head>
<body>
    <h3>Idades e classificação da turma</h3>
    <form method="post">
        Quantidade de pessoas: <input type="number" name="qtd" min="1" required>
        <input type="submit" name="continuar" value="Continuar">
    </form>

    <?php
    if (isset($_POST['continuar'])) {
        $qtd = $_POST['qtd'];
        echo "<form method='post'>";
        for ($i = 1; $i <= $qtd; $i++) {
            echo "Idade da pessoa $i: <input type='number' name='idades[]' min='0' required><br>";
        }
        echo "<input type='submit' value='Verificar'>";
        echo "</form>";
    }

    if (isset($_POST['idades'])) {
        $idades = $_POST['idades'];
        $media = array_sum($idades) / count($idades);

        if ($media <= 25) {
            echo "Turma Jovem! Média: $media";
        } elseif ($media <= 60) {
            echo "Turma Adulta! Média: $media";
        } else {
            echo "Turma Idosa! Média: $media";
        }
    }
    ?>
</body>
</html>
