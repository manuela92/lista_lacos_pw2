<!DOCTYPE html>
<html>
<head>
    <title>Exercício 22</title>
</head>
<body>
    <h3>Verificar número primo e mostrar divisores</h3>
    <form method="post">
        Número: <input type="number" name="num" min="1" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_POST) {
        $num = $_POST['num'];
        $divisores = [];

        for ($i = 1; $i <= $num; $i++) {
            if ($num % $i == 0) {
                $divisores[] = $i;
            }
        }

        if (count($divisores) == 2) {
            echo "$num é primo!";
        } else {
            echo "$num não é primo. Divisores: " . implode(", ", $divisores);
        }
    }
    ?>
</body>
</html>

