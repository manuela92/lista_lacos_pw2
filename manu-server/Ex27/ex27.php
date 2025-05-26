<!DOCTYPE html>
<html>
<head>
    <title>Ex. 27</title>
</head>
<body>
    <h3>Média de alunos por turma (máx 40 por turma)</h3>
    <form method="post">
        Quantidade de turmas: <input type="number" name="turmas" min="1" required>
        <input type="submit" name="continuar" value="Continuar">
    </form>

    <?php
    if (isset($_POST['continuar'])) {
        $turmas = $_POST['turmas'];
        echo "<form method='post'>";
        for ($i = 1; $i <= $turmas; $i++) {
            echo "Alunos na turma $i: <input type='number' name='alunos[]' min='1' max='40' required><br>";
        }
        echo "<input type='submit' value='Calcular'>";
        echo "</form>";
    }

    if (isset($_POST['alunos'])) {
        $alunos = $_POST['alunos'];
        $total = array_sum($alunos);
        $media = $total / count($alunos);

        echo "Número médio de alunos por turma: " . number_format($media, 2);
    }
    ?>
</body>
</html>
