<!DOCTYPE html>
<html>
<head>
    <title>Ex. 30</title>
</head>
<body>
    <h3>Tabela de preços de pães</h3>
    <form method="post">
        Preço do pão: <input type="number" name="preco" step="0.01" required>
        <input type="submit" value="Gerar Tabela">
    </form>

    <?php
    if ($_POST) {
        $preco = $_POST['preco'];
        echo "<h4>Panificadora Pão de Ontem - Tabela de preços</h4>";
        for ($i = 1; $i <= 50; $i++) {
            $total = $i * $preco;
            echo "$i - R$ " . number_format($total, 2, ',', '.') . "<br>";
        }
    }
    ?>
</body>
</html>
