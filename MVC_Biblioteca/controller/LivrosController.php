<?php

session_start(); // Banco de dados
require_once "./model/LivroModel.php";

class LivroController{

    public function telaCadastro(){
        // session_destroy();
        require "view/livroCadastrar.php";
    }

    public function cadastrar(){
        print_r($_POST);
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $genero = $_POST['genero'];

        $livro = new Livro($titulo, $autor, $genero);
        $livro -> salvar();
        // Redirecionar depois de salvar
        header('Location: /PB_PHP/MVC_Biblioteca/livro/telaCadastro');
        exit;
    }

    public function listarLivros(){
        $livros = Livro::listar();
        echo "<pre>";
        print_r($livros);
        echo "</pre>";
        require 'view/livroListar.php';
    }

    public function telaEditar(){
        $livro = Livro::buscar($_GET['id']);
        require 'view/livroEditar.php';
    }

    public function atualizar(){
        $livro = new Livro($_POST['titulo'], $_POST['autor'], $_POST['genero']);
        $livro -> atualizar($_GET['id']);
        header('Location: /PB_PHP/MVC_Biblioteca/livro/telaEditar?id=' . ($_GET['id']));
        exit;
    }

    public function excluir(){
        Livro::excluir($_GET['id']);
        header('Location: /PB_PHP/MVC_Biblioteca/livro/listar');
        exit;
    }
}