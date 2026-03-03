<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Cadastro</title>
</head>
    <body>
        <h2> Tela de cadastro</h2>
        <a href="listar">Ir para tela Listar</a>
        <form action="salvar" method="POST" style="padding:15px border-radius:8px; width:300px">
            Nome: <br>
            <input type="text" name="nome" placeholder="Seu nome" style="width:90%; margin-bottom:10px" require><br>
            Email<br>
            <input type="email" name="email" placeholder="Seu email" style="width:90%; margin-bottom:10px" require><br>
            <button type="submit" style="padding:5px 10px;">Cadastrar</button>
        </form>
    </body>
</html>