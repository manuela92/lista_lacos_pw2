<?php

if (isset($_POST["usuario"]) && isset($_POST["senha"])) { //isset verifica se a variavel está definida
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if ($usuario == $senha) {
        $mensagem = "A senha não pode ser igual ao nome de usuário.";
    } else {
        echo "Cadastrado com sucesso!";
        exit;
    }
}
?>

<html>
<form method="post">
<h1>Digite usuário e senha:</h1>  
      <hr>

        Usuário: <input type="text" name="usuario"/> <br>
        Senha: <input type="password" name="senha"/> <br>

        <input type="submit" value="Cadastrar"/>

</form>
</html>

<?php

if (!empty($mensagem)) {
    echo "<p style=color:red;>$mensagem</p>";
}
?>

