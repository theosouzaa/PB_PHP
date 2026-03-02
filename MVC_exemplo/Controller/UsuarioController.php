<?php

session_start(); // banco de dados
require_once "./Model/UsuarioModel.php";

class UsuarioController{

    public function telaCadastro(){

        //session_destroy();
        require "view/usuarioCadastrar.php";
    }

    public function cadastrar(){
        print_r($_POST);
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $usuario = new Usuario($nome, $email);
        $usuario -> salvar();
        // Redirecionar depois de salvar
        header('Location: /PB_PHP/MVC_exemplo/usuario/telaCadastro');
        exit;
    }
    
    public function listarUsuarios(){
        $usuarios = Usuario::listar();
        echo "<pre>";
        print_r($usuarios);
        echo "</pre>";
        require 'view/usuarioListar.php';
    }

    public function telaEditar(){
        $usuario = Usuario::buscar($_GET['id']);
        require 'view/usuarioEditar.php';
    }

    public function atualizar(){
        $usuario = new Usuario($_POST['nome'], $_POST['email']);
        $usuario -> atualizar($_GET['id']);
        header('Location: /PB_PHP/MVC_exemplo/usuario/telaEditar?id=' . ($_GET['id']));
        exit;
    }
}

?>