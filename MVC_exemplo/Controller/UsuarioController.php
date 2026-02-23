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
}

?>