<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de usuário</title>
</head>
<body>
    <form action="" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" required> <br>

        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha" required> <br>

        <button type="submit">Entrar</button>
    </form>

    <?php 
        // Verifica se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];

            // Abrir arquivo txt para ler os usuários
            $arquivo = fopen('usuarios.txt', 'r');
            $login_sucesso = false;

            // Ler cada linha do arquivos
            while (($linha = fgets($arquivo)) !== false)  {
                list($usuario_arquivo, $senha_arquivo) = explode(';', trim($linha));
                // trim: Retira espaços em branco
                // explode: Separa string pelo delimitador
                // list(): Atribuição múltipla

                // Verificando se o nome e a senha correspondem aos valores no arquivo
                if ($nome == $usuario_arquivo && $senha == $senha_arquivo) {
                    $login_sucesso = true;
                    break; //Interromper o laço. Usuário localizado no arquivo
                }
            } 
            fclose($arquivo);

            if ($login_sucesso == true) {
                echo "<p style='color: green;'>Login realizado com sucesso, <br> Bem vindo(a) $nome!</p>";
            } else {
                echo "<p style='color: red;'>Usuário ou senha incorretos. <br> Tente novamente.</p>";
            }
        }
    ?>
</body>
</html>