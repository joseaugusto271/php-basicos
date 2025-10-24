<?php 
    // Conecta ao banco de dados
    $serverName = "127.0.0.1";
    $userName = "root";
    $password = "Senai@118";
    $dbName = "exercicio";

    $conn = new mysqli($serverName, $userName, $password, $dbName);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão" . $conn->connect_error);
    }

    // Consulta para buscar todos os clientes da tabela
    $sql = "SELECT id, nome, email FROM clientes";
    $result = $conn->query($sql);

    // Verifica se existem registros e os exibe em formato de tabela
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th> <th>Nome</th> <th>Email</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<th>" . $row['id'] . "</th>";
            echo "<th>" . $row['nome'] . "</th>";
            echo "<th>" . $row['email'] . "</th>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum cliente encontrado";
    }

    $conn->close();
?>