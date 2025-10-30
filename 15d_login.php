<?php 
    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = $_POST['nome'];
        $cor = $_POST['cor'];

        $_SESSION['nome'] = $usuario;
        $_SESSION['cor'] = $cor;

        header('Location: 15d_perfil.php');
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
    <h1>Bem-Vindo!</h1>
    <form action="" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" required> <br>

        <label for="cor">Cor favorita</label>
        <select name="cor" id="cor">
            <option value="pink">Rosa</option>
            <option value="lightblue">Azul</option>
            <option value="yellow">Amarelo</option>
            <option value="lightgreen">Verde</option>
            <option value="gray">Cinza</option>
            <option value="violet">Violeta</option>
        </select> <br>

        <button type="submit">Entrar</button>
    </form>

    <?php 
        if(isset($erro)) {
            echo "<p style='color: red;'>$erro</p>";
        }
    ?>
</body>
</html>