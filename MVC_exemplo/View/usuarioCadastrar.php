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
            <input type="text" name="nome" value="" style="width:90%; margin-bottom:10px"><br>
            Email<br>
            <input type="email" name="email" value="" style="width:90%; margin-bottom:10px"><br>
            <button type="submit" style="padding:5px 10px;">Cadastrar</button>
            <button type="reset" style="padding:5px 10px;">Limpar</button>
        </form>
    </body>
</html>