<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
</head>
<body>
    <form action="" method="post">
        <label for="nomeProduto">Nome do produto: </label>
        <input type="text" name="nomeProduto" id="nomeProduto" required> <br>

        <label for="preco">Preço: </label>
        <input type="number" name="preco" id="preco" step="0.01" required> <br>

        <button type="submit">Cadastrar</button>
        <button type="reset">Limpar</button>
    </form>

    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nomeProduto = $_POST['nomeProduto'];
            $preco = $_POST['preco'];
            
            $serverName = "127.0.0.1";
            $userName = "root";
            $password = "Senai@118";
            $dbName = "exercicio";

            $conn = new mysqli($serverName, $userName, $password, $dbName);

            if ($conn -> connect_error) {
                die ("Falha na conexão" . $conn -> connect_error);
            }

            if (!empty($nomeProduto) && !empty($preco) && $preco > 0) {
                $preco = (float)$preco;

                $sql = "INSERT INTO produtos (nome, preco) VALUES ('$nomeProduto', '$preco')";
                
                if ($conn -> query($sql) === TRUE) {
                echo "<p style= 'color: darkgreen'>Produto cadastrado com sucesso.</p>";
            } else {
                echo "<p style= 'color: red'>Erro ao cadastrar produto.</p>";
            }
        } else {
            echo "<p style= 'color: red'>Erro. Informe um nome válido e um preço maior que zero.</p>";
        }
        $conn->close();
    }
    ?>
</body>
</html>