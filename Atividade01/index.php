<?php

require_once "controller/produtoController.php";

$produtosContoller = new produtoController();
$route = $_GET["route"] ?? '';

switch ($route) {
    case 'produto/telaCadastro':
        $produtosContoller -> telaCadastro();
        break;

    case 'produto/salvar':
        $produtosContoller -> cadastrar();
        break;

    case 'produto/listar':
        $produtosContoller -> listarProdutos();
        break;
    
    default:
        echo 'Página não encontrada';
        break;
}