<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Cadastro</title>
</head>
    <body>
        <h2>Tela Editar</h2>
        <a href="listar">Ir para tela Listar</a>
        <form action="atualizar?id=<?= $_GET['id'] ?>" method="POST" style="padding:15px border-radius:8px; width:300px"><br>
            <input type="text" name="id" value="<?= htmlspecialchars($_GET['id']) ?>" disabled><br><br>
            Nome: <br>
            <input type="text" name="nome" placeholder="Seu nome" value="<?= htmlspecialchars($usuario['nome']) ?>" style="width:90%; margin-bottom:10px" require><br>
            Email<br>
            <input type="email" name="email" value="<?= htmlspecialchars($usuario['email']) ?>" style="width:90%; margin-bottom:10px" require><br>
            <button type="submit" style="padding:5px 10px;">Cadastrar</button>
            <button type="submit" style="padding:5px 10px;">Editar</button>
        </form>
    </body>
</html>