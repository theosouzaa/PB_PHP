<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC-Biblioteca</title>
</head>
    <body>
        <h2>Tela cadastro de livros</h2>
        <a href="listar">Ir para tela de listar livros</a>
            <form action="salvar" method="POST" style="padding:15px border-radius:8px; width:300px">
            Título: <br>
            <input type="text" name="titulo" placeholder="Titulo do livro" style="width:90%; margin-bottom:10px" require><br>
            Autor do livro: <br>
            <input type="text" name="autor" placeholder="Autor do livro" style="width:90%; margin-bottom:10px" require><br>
            Gênero: <br>
            <input type="text" name="genero" placeholder="Gênero do livro" style="width:90%; margin-bottom:10px" require><br>
            <button type="submit" style="padding:5px 10px;">Cadastrar</button>
        </form>
    </body>
</html>