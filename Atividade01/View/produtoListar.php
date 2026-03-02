<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>
</head>
    <body>
        <h2>Lista de produtos</h2>
        <a href="telaCadastro">Cadastrar novo produto</a><br><br>
        <table border="1" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Validade</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($_SESSION['produtos'] as $id => $produto): ?>
            <tr>
                <td><?= $id ?></td>
                <td><?= $produto['nome'] ?></td>
                <td><?= $produto['data'] ?></td>
                <td><?= number_format($produto['preco'], 2, ',', '.') ?></td>
                <td><?= $produto['quantidade'] ?></td>
                <td>
                    <a href="telaEditar?id=<?= $id ?>">Editar</a> | 
                    <a href="excluir?id=<?= $id ?>">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>