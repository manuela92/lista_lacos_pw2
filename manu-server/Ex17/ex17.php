<!DOCTYPE html>
<html>
<head>
    <title>Ex 17</title>
</head>
<body>
    <h3>Calcular Fatorial</h3>
    <form method="post">
        Número: <input type="number" name="num" min="0" required>
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
