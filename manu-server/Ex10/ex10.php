<!DOCTYPE html>
<html>
<head>
    <title>Ex. 10</title>
</head>
<body>
    <h3>Números no intervalo</h3>
    <form method="post">
        Número 1: <input type="number" name="num1" required><br>
        Número 2: <input type="number" name="num2" required><br>
        <input type="submit" value="Gerar Intervalo">
    </form>

    <?php
    if ($_POST) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        echo "Números entre $num1 e $num2:<br>";

        if ($num1 < $num2) {
            for ($i = $num1 + 1; $i < $num2; $i++) {
                echo $i . " ";
            }
        } else {
            for ($i = $num2 + 1; $i < $num1; $i++) {
                echo $i . " ";
            }
        }
    }
    ?>
</body>
</html>
