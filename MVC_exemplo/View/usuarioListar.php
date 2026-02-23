<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuários</title>
</head>
<body>
    <h2>Usuarios</h2>
    <a href='telaCadastro'> Ir para tela de Cadastrao</a><br><br>
    <table border="1">
        <tr>Nome</tr>
        <tr>Email</tr>
        <tr>Ações</tr>
        <?php foreach($usuarios as $u): ?>
            <tr>
                <td><?= $u['nome']?></td>
                <td><?= $u['email']?></td>
                <td>próxima aula</td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>