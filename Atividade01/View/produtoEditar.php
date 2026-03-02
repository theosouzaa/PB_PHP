<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>
<body>
    <h2>Editar Produto</h2>
    <form action="atualizar" method="POST" style="padding:15px border-radius:8px; width:300px">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        Nome produto: <br>
        <input type="text" name="nome" value="<?= $_SESSION['produtos'][$_GET['id']]['nome'] ?? '' ?>" style="width:90%; margin-bottom:10px"><br>
        Data validade: <br>
        <input type="date" name="validade" value="<?= $_SESSION['produtos'][$_GET['id']]['data'] ?? '' ?>" style="width:90%; margin-bottom:10px"><br>
        Preço: <br>
        <input type="number" step="0.01" name="preco" value="<?= $_SESSION['produtos'][$_GET['id']]['preco'] ?? '' ?>" style="width:90%; margin-bottom:10px"><br>
        Quantidade: <br>
        <input type="number" name="quantidade" value="<?= $_SESSION['produtos'][$_GET['id']]['quantidade'] ?? '' ?>" style="width:90%; margin-bottom:10px"><br>
        <button type="submit" style="padding:5px 10px;">Atualizar</button>
        <button type="reset" style="padding:5px 10px;">Limpar</button>
    </form>
</body>
</html>