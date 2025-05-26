<!DOCTYPE html>
<html>
<head>
    <title>Ex. 23</title>
</head>
<body>
    <h3>Primos até N e quantidade de divisões</h3>
    <form method="post">
        Número N: <input type="number" name="n" min="1" required>
        <input type="submit" value="Mostrar Primos">
    </form>

    <?php
    if ($_POST) {
        $n = $_POST['n'];
        $divisoes = 0;

        echo "Números primos até $n:<br>";
        for ($i = 2; $i <= $n; $i++) {
            $conta = 0;
            for ($j = 1; $j <= $i; $j++) {
                $divisoes++;
                if ($i % $j == 0) {
                    $conta++;
                }
            }
            if ($conta == 2) {
                echo $i . " ";
            }
        }
        echo "<br>Total de divisões executadas: $divisoes";
    }
    ?>
</body>
</html>
