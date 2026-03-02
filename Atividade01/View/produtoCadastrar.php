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

        <a href="listar">Estoque de produtos</a><br><br>
        
        <form action="salvar" method="POST" style="padding:15px border-radius:8px; width:300px">
            Nome produto: <br>
            <input type="text" name="nome" value="" style="width:90%; margin-bottom:10px"><br>
            Data validade: <br>
            <input type="date" name="data" value="" style="width:90%; margin-bottom:10px"><br>
            Preço: <br>
            <input type="number" step="0.01" name="preco" value="" style="width:90%; margin-bottom:10px"><br>
            Quantidade: <br>
            <input type="number" name="quantidade" value="" style="width:90%; margin-bottom:10px"><br>
            <button type="submit" style="padding:5px 10px;">Cadastrar</button>
            <button type="reset" style="padding:5px 10px;">Limpar</button>
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

/* Link */
a {
    display: inline-block; /* Corrigido */
    text-decoration: none;
    color: #0066cc;
    margin-bottom: 20px;
    font-size: 14px;
}

a:hover {
    text-decoration: underline;
}

/* Formulário */
form {
    background-color: #ffffff;
    padding: 25px;
    border-radius: 8px;
    width: 100%;
    max-width: 350px; /* Melhor responsividade */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

/* Labels */
form label {
    font-weight: bold;
    font-size: 14px;
    display: block;
    margin-bottom: 5px;
}

/* Inputs */
input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: border 0.3s, box-shadow 0.3s;
    font-size: 14px;
}

/* Efeito ao clicar no input */
input:focus {
    border-color: #0066cc;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 102, 204, 0.3);
}

/* Área dos botões */
form .botoes {
    display: flex;
    justify-content: space-between;
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

/* Botão cadastrar */
button[type="submit"] {
    background-color: #28a745;
    color: white;
}

button[type="submit"]:hover {
    background-color: #218838;
}

/* Botão limpar */
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