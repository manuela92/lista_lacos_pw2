<?php

$nome = $_POST["nome"]; 
$idade = $_POST["idade"];
$salario = (float)$_POST["salario"];
$sexo = strtolower($_POST["sexo"]);
$estado_civil = strtolower($_POST["estado_civil"]);

while (strlen($nome) <= 3) {
    echo "O nome deve ter mais de 3 caracteres.";
    exit;
}
    echo"nome válido!";
while ($idade < 0 || $idade > 150) {
    echo "A idade deve estar entre 0 e 150.";
    return;
}
    echo "Idade válida";
while ($salario <= 0) {
    echo "O salário deve ser maior que zero.";
    return;
}
    echo "Salário válido";
while ($sexo !== 'f' && $sexo !== 'm') {
    echo "Sexo deve ser 'f' (feminino) ou 'm' (masculino).";
    return;
}
    echo"Sexo válido";
while (!in_array($estado_civil, ['s', 'c', 'v', 'd'])) {
    echo "Estado civil deve ser: 's' (solteiro), 'c' (casado), 'v' (viúvo), ou 'd' (divorciado).";
    return;
}
    echo "Estado cívil válido";
    echo "<p style='color:green;'>Dados foram validados com sucesso!</p>";
    exit;


?>