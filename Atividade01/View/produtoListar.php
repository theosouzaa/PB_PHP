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
        <table border="1" cellpadding="10" cellspacing="0">
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
        <style>
            /* Reset básico */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

/* Corpo */
body {
    background-color: #f4f6f9;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 40px 20px;
}

/* Título */
h2 {
    margin-bottom: 20px;
    color: #333;
}

/* Link principal */
a {
    text-decoration: none;
    font-size: 14px;
}

/* Botão cadastrar */
a[href="telaCadastro"] {
    display: inline-block;
    background-color: #28a745;
    color: white;
    padding: 8px 14px;
    border-radius: 5px;
    margin-bottom: 20px;
    transition: 0.3s;
}

a[href="telaCadastro"]:hover {
    background-color: #218838;
}

/* Container da tabela */
.table-container {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    width: 100%;
    max-width: 900px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    overflow-x: auto;
}

/* Tabela */
table {
    width: 100%;
    border-collapse: collapse;
}

/* Cabeçalho */
th {
    background-color: #0066cc;
    color: white;
    padding: 10px;
    text-align: center;
    font-size: 14px;
}

/* Células */
td {
    padding: 10px;
    text-align: center;
    border-bottom: 1px solid #ddd;
    font-size: 14px;
}

/* Linhas alternadas */
tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Hover na linha */
tr:hover {
    background-color: #e9f3ff;
}

/* Links de ação */
td a {
    font-weight: bold;
    margin: 0 5px;
}

/* Editar */
td a[href*="telaEditar"] {
    color: #0066cc;
}

td a[href*="telaEditar"]:hover {
    text-decoration: underline;
}

/* Excluir */
td a[href*="excluir"] {
    color: #dc3545;
}

td a[href*="excluir"]:hover {
    text-decoration: underline;
}
        </style>
    </body>
</html>