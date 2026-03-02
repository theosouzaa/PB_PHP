<?php

session_start();
require_once "./Model/produtoModel.php";

Class ProdutoController{

    public function telaCadastro(){

        //session_destroy();
        require "view/produtoCadastrar.php";
    }

    public function cadastrar(){
        print_r($_POST);
        $nomeProduto = $_POST ['nome'];
        $precoProduto = $_POST ['preco'];
        $dataValidade = $_POST ['data'];
        $quantidadeEstoque = $_POST ['quantidade'];

        $produto = new Produto($nomeProduto, $precoProduto, $dataValidade, $quantidadeEstoque);
        $produto -> salvar();
        // Redirecionar depois de salvar
        header('Location: /PB_PHP/Atividade01/produto/telaCadastro');
        exit;
    }

    public function listarProdutos(){
        $produtos = Produto::listar();
        // echo "<pre>";
        // print_r($produtos);
        // echo"</pre>";
        require 'view/produtoListar.php';
    }

    public function telaEditar(){
        $produto = Produto::buscar($_GET['id']);
        require 'view/produtoEditar.php';
    }

    public function atualizar(){
        $produto = new Produto($_POST['nome'], $_POST['preco'], $_POST['data'], $_POST['quantidade']);
        $produto -> atualizar($_GET['id']);
        header('Location: /PB_PHP/Atividade01/produto/telaEditar?id=' . ($_GET['id']));
        exit;
    }

        public function excluir(){
            Produto::excluir($_GET['id']);
            header('Location: /PB_PHP/Atividade01/produto/listar');
            exit;
        }
}