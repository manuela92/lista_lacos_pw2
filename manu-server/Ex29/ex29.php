<!DOCTYPE html>
<html>
<head>
    <title>Ex. 29</title>
</head>
<body>
    <h3>Lojas Quase Dois - Tabela de preços</h3>
    <?php
    for ($i = 1; $i <= 50; $i++) {
        $preco = $i * 1.99;
        echo "$i - R$ " . number_format($preco, 2, ',', '.') . "<br>";
    }
    ?>
</body>
</html>
