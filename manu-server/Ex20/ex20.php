<!DOCTYPE html>
<html>
<head>
    <title>Exercício 20</title>
</head>
<body>
    <h3>Calcular Fatorial (0 a 15)</h3>
    <form method="post">
        Número (0 a 15): <input type="number" name="num" min="0" max="15" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_POST) {
        $num = $_POST['num'];
        $fatorial = 1;
        for ($i = $num; $i > 1; $i--) {
            $fatorial *= $i;
        }
        echo "O fatorial de $num é: $fatorial";
    }
    ?>
</body>
</html>
