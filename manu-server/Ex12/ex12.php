<!DOCTYPE html>
<html>
<head>
    <title>Ex. 12</title>
</head>
<body>
    <h3>Gerador de Tabuada</h3>
    <form method="post">
        Número (1 a 10): <input type="number" name="num" min="1" max="10" required>
        <input type="submit" value="Gerar Tabuada">
    </form>

    <?php
    if ($_POST) {
        $num = $_POST['num'];
        echo "<h4>Tabuada de $num:</h4>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $num * $i;
            echo "$num x $i = $resultado<br>";
        }
    }
    ?>
</body>
</html>
