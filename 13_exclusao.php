<!-- Passar id via URL -->
<!-- http://localhost/php-basicos/13_exclusao.php?id=5-->

<?php 
    // Conecta o banco de dados
    $serverName = "127.0.0.1";
    $userName = "root";
    $password = "Senai@118";
    $dbName = "exercicio";

    $conn = new mysqli($serverName, $userName, $password, $dbName);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão" . $conn->connect_error);
    }

    // Verifica se o ID foi passado via URL para exclusão
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Deleta o registro do cliente com o ID especificado
        $sql = "DELETE FROM clientes WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Cliente excluído com sucesso</p>";
        } else {
            echo "<p>Erro ao excluir cliente: " . $conn->error . "</p>";
        }
    }

    // Fecha a conexão
    $conn->close();
?>