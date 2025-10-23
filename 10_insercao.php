<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
</head>
<body>
    <form action="" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" required> <br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" required> <br>

        <button type="submit">Cadastrar</button>
    </form>

    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recebe os dados
            $nome = $_POST['nome'];
            $email = $_POST['email'];

            // Conexão com o banco de dados
            $serverName = "127.0.0.1";
            $userName = "root";
            $password = "Senai@118";
            $dbName = "exercicio";

            $conn = new mysqli($serverName, $userName, $password, $dbName);

            // Verifica a conexão
            if ($conn -> connect_error) {
                die ("Falha na conexão" . $conn -> connect_error);
            }

            // Insere  o registro no banco de dados
            $sql = "INSERT INTO clientes (nome, email) VALUES ('$nome', '$email')";

            if ($conn -> query($sql) === TRUE) {
                echo "<p style= 'color: darkgreen'>Cliente cadastrado com sucesso.<p>";
            } else {
                echo "<p style= 'color: red'>Erro ao cadastrar.<p>";
            }
        }

        // Fechar a conexão
        $conn->close();
    ?>
</body>
</html>