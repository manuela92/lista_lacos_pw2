<!DOCTYPE html>
<html>
<head>
    <title>Ex. 13</title>
</head>
<body>
    <h3>Calcular Potência (sem função de potência)</h3>
    <form method="post">
        Base: <input type="number" name="base" required><br>
        Expoente: <input type="number" name="expoente" required><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_POST) {
        $base = $_POST['base'];
        $expoente = $_POST['expoente'];
        $resultado = 1;

        for ($i = 1; $i <= $expoente; $i++) {
            $resultado *= $base;
        }

        echo "$base elevado a $expoente é: $resultado";
    }
    ?>
</body>
</html>
