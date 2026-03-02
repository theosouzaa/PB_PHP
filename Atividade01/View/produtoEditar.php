<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>
    <body>

    <h2>Editar Produto</h2>

    <a href="listar" class="btn-voltar">← Voltar para Lista</a>

    <form action="atualizar" method="POST">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

        <label>Nome produto:</label>
        <input type="text" name="nome" value="<?= $_SESSION['produtos'][$_GET['id']]['nome'] ?? '' ?>">

        <label>Data validade:</label>
        <input type="date" name="validade" value="<?= $_SESSION['produtos'][$_GET['id']]['data'] ?? '' ?>">

        <label>Preço:</label>
        <input type="number" step="0.01" name="preco" value="<?= $_SESSION['produtos'][$_GET['id']]['preco'] ?? '' ?>">

        <label>Quantidade:</label>
        <input type="number" name="quantidade" value="<?= $_SESSION['produtos'][$_GET['id']]['quantidade'] ?? '' ?>">

        <div class="botoes">
            <button type="submit">Atualizar</button>
            <button type="reset">Limpar</button>
        </div>
        </form>
    <style>
        /* Reset básico */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

/* Corpo da página */
body {
    background-color: #f4f6f9;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 40px 20px;
}

/* Título */
h2 {
    margin-bottom: 15px;
    color: #333;
}

/* Botão Voltar */
.btn-voltar {
    display: inline-block;
    margin-bottom: 20px;
    background-color: #0066cc;
    color: white;
    padding: 8px 14px;
    border-radius: 5px;
    text-decoration: none;
    font-size: 14px;
    transition: 0.3s;
}

.btn-voltar:hover {
    background-color: #004999;
}

/* Formulário */
form {
    background-color: #ffffff;
    padding: 25px;
    border-radius: 8px;
    width: 100%;
    max-width: 350px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

/* Labels */
label {
    font-weight: bold;
    font-size: 14px;
    display: block;
    margin-bottom: 5px;
    color: #333;
}

/* Inputs */
input[type="text"],
input[type="date"],
input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: border 0.3s, box-shadow 0.3s;
    font-size: 14px;
}

/* Input escondido */
input[type="hidden"] {
    display: none;
}

/* Efeito foco */
input:focus {
    border-color: #0066cc;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 102, 204, 0.3);
}

/* Área dos botões */
.botoes {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
}

/* Botões */
button {
    padding: 8px 14px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
    font-size: 14px;
}

/* Atualizar */
button[type="submit"] {
    background-color: #28a745;
    color: white;
}

button[type="submit"]:hover {
    background-color: #218838;
}

/* Limpar */
button[type="reset"] {
    background-color: #dc3545;
    color: white;
}

button[type="reset"]:hover {
    background-color: #c82333;
}
        </style>
    </body>
</html>