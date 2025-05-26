<!DOCTYPE html>
<html>
<head>
    <title>Ex. 26</title>
</head>
<body>
    <h3>Votação para 3 candidatos</h3>
    <form method="post">
        Número total de eleitores: <input type="number" name="eleitores" min="1" required>
        <input type="submit" name="continuar" value="Continuar">
    </form>

    <?php
    if (isset($_POST['continuar'])) {
        $eleitores = $_POST['eleitores'];
        echo "<form method='post'>";
        for ($i = 1; $i <= $eleitores; $i++) {
            echo "Eleitor $i, digite (1, 2 ou 3): <input type='number' name='votos[]' min='1' max='3' required><br>";
        }
        echo "<input type='submit' value='Apurar'>";
        echo "</form>";
    }

    if (isset($_POST['votos'])) {
        $votos = $_POST['votos'];
        $c1 = $c2 = $c3 = 0;

        foreach ($votos as $v) {
            if ($v == 1) $c1++;
            elseif ($v == 2) $c2++;
            elseif ($v == 3) $c3++;
        }

        echo "Candidato 1: $c1 votos<br>";
        echo "Candidato 2: $c2 votos<br>";
        echo "Candidato 3: $c3 votos<br>";
    }
    ?>
</body>
</html>
