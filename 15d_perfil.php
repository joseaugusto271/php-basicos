<?php 
    session_start();

    if(!isset($_SESSION['nome'])) {
        header("Location: 15d_login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restrito</title>
    <style>
        body {
            background-color: <?php echo $_SESSION['cor'];?>;
        }
    </style>
</head>
<body>
    <h2>Olá, <?php echo $_SESSION['nome'] ?>!</h2>
    <p>Essa é sua página personalizada com sua cor favorita.</p>
    <a href="15d_login.php">Logout</a>
</body>
</html>