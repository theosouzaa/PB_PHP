<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
    <body>
        <h2>Tela Editar</h2>
        <a href="listar">Ir para tela de listar</a>
        <form action="atualizar?id=<?= $_GET['id'] ?>" method="POST" stylle="padding:15px border-radius:8px; width:300px"><br>
            <input type="text" name="id" value="<?= htmlspecialchars($_GET['id']) ?>" disabled><br><br>
            Título: <br>
            <input type="text" name="titulo" placeholder=" novo título" value="<?= htmlspecialchars($livro['titulo']) ?>" style="width:90%; margin-bottom:10px" require><br>
            Autor: <br>
            <input type="text" name="autor" placeholder="novo autor" value="<?= htmlspecialchars($livro['autor']) ?>" style="width:90%; margin-bottom:10px" require><br>
            Gênero: <br>
            <input type="text" name="genero"  placeholder="novo gênero" value="<?= htmlspecialchars($livro['genero']) ?>" style="width:90%; margin-bottom:10px" require><br>
            <button type="submit" style="padding:5px 10px;">Cadastrar</button>
            <button type="submit" style="padding:5px 10px;">Editar</button>
        </form>
    </body>
</html>