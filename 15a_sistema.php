<?php 
    // Página de login (15a_sistema.php)
    session_start();

    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        // Verifica se os dados são válidos (usuário = admin, senha = 123)
        if ($usuario == 'Guilherme Gandini' && $senha == 'ep12') {
            $_SESSION['usuario'] = $usuario; // Salva o nome do usuário na sessão
            header("location: 15b_restrita.php");
            exit();
        } else {
            $erro = "Usuário ou senha incorretas";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <label for="usuario">Usuário: </label>
        <input type="text" name="usuario" id="usuario" required> <br>

        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha" required> <br>

        <button type="submit">Entrar</button>
    </form>

    <?php 
        if(isset($erro)) {
            echo "<p style='color: red;'>$erro</p>";
        }
    ?>
</body>
</html>