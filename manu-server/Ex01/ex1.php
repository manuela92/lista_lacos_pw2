<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex.1</title>
</head>
<body>
        <h1>Nota</h1>
        <form method="post" action="ex1.php"> 
                <h1>Digite uma nota de zero a 10: </h1>
                <hr>
                <input type="number" name="nota" required>

                <input type="submit" value="Enviar"/>
        </form>

</body>
 
</html>

<?php

    if (isset($_POST["nota"])) { //isset verifica se a variavel está definida

    while ($nota <1 || $nota > 10 ){
        echo "<p style=color;:red>Valor inválido</p>";
        exit;
    }
}
    echo "Você digitou a nota $nota <br>";
   
    ?>