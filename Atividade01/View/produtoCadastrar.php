<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <h2>Controle de estoque </h2>
        <form action="salvar" method="POST" style="padding:15px border-radius:8px; width:300px">
            Nome produto: <br>
            <input type="text" name="nome" value="" style="width:90%; margin-bottom:10px"><br>
            Data validade: <br>
            <input type="date" name="validade" value="" style="width:90%; margin-bottom:10px"><br>
            Preço: <br>
            <input type="number" name="preco" value="" style="width:90%; margin-bottom:10px"><br>
            Quantidade: <br>
            <input type="number" name="quantidade" value="" style="width:90%; margin-bottom:10px"><br>
            <button type="submit" style="padding:5px 10px;">Cadastrar</button>
            <button type="reset" style="padding:5px 10px;">Limpar</button>
        </form>
    </body>
</html>