<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de livros</title>
</head>
<body>
    <h2>Livros</h2>
    <a href='telaCadastro'> Ir para tela de Cadastrao</a><br><br>
    <table border="1">
        <tr>Título</tr>
        <tr>Autor</tr>
        <tr>Gênero</tr>
        <tr>Ações</tr>
        <?php foreach($livros as $id => $u): ?>
            <tr>
                <td><?= $u['titulo']?></td>
                <td><?= $u['genero']?></td>
                <td><?= $u['autor']?></td>
                <td><a href="telaEditar?id=<?= $u['ID'] ?>">Editar</a></td>
                <td><a href="excluir?id=<?= $u['ID'] ?>">Excluir</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>