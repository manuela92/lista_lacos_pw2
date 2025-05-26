<!DOCTYPE html>
<html>
<head>
    <title>Ex. 21</title>
</head>
<body>
    <h3>Verificar se um número é primo</h3>
    <form method="post">
        Número: <input type="number" name="num" min="1" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_POST) {
        $num = $_POST['num'];
        $divisores = 0;

        for ($i = 1; $i <= $num; $i++) {
            if ($num % $i == 0) {
                $divisores++;
            }
        }

        if ($divisores == 2) {
            echo "$num é primo!";
        } else {
            echo "$num não é primo.";
        }
    }
    ?>
</body>
</html>
