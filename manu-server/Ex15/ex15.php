<!DOCTYPE html>
<html>
<head>
    <title>Ex. 15</title>
</head>
<body>
    <h3>Série de Fibonacci até o n-ésimo termo</h3>
    <form method="post">
        Número de termos: <input type="number" name="n" min="1" required>
        <input type="submit" value="Gerar Série">
    </form>

    <?php
    if ($_POST) {
        $n = $_POST['n'];
        $a = 1;
        $b = 1;

        echo "Série de Fibonacci: ";
        for ($i = 1; $i <= $n; $i++) {
            echo $a . " ";
            $proximo = $a + $b;
            $a = $b;
            $b = $proximo;
        }
    }
    ?>
</body>
</html>
