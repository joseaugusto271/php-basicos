<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de imagens</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="imagem">Selecione uma imagem</label>\
        <input type="file" name="imagem" id="imagem" accept="image/*" required> <br>

        <button type="submit">Upload</button>
    </form>

    <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Caminho onde as imagens serão lidas
            $diretório_destino = "uploads/";

            if (!is_dir($diretório_destino)) {
                // Cria a pasta (diretório) com permissões
                // de acesso total (código 0777) e possibilidades de subdiretórios.
                mkdir($diretório_destino, 0777, true);
            }
            // Armazena apenas o nome base do arquivo (Ex. foto.png)
            $nome_arquivo = basename($_FILES['imagem'] ['name']);

            // Constrói o caminho completo. Ex.: (uploads/foto.png)
            $caminho_completo = $diretório_destino . $nome_arquivo;

            if (move_uploaded_file($_FILES['imagem'] ['tmp_name'], $caminho_completo)) {
                echo "<p>Upload realizado com sucesso</p>";
                echo "<img src='$caminho_completo' alt='Imagem enviada' style='max-width: 300px;'>";
            } else {
                echo "<p>Erro ao fazer upload do arquivo.</p>";
            }
        }
    ?>
</body>
</html>