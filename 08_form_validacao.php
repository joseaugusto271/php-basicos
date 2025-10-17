<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de feedback</title>
</head>
<body>
    <form action="" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" required> <br>

        <label for="email">Email: </label>
        <input type="text" name="email" id="email"> <br>

        <label for="mensagem">Mensagem: </label>
        <textarea name="mensagem" id="nome"></textarea> <br>

        <button type="submit">Enviar</button>
    </form>

    <?php 
        // Verificar se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $mensagem = $_POST['mensagem'];

            // Valida se os campos não estão vazios
            if (!empty($nome) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($mensagem)) {
                echo "<p style='color: darkgreen;'>Feedback enviado com sucesso!</p>";
            } else {
                echo "<p style='color: red;'>Preencha todos os campos corretamente.</p>";
            }
        }
    ?>
</body>
</html>