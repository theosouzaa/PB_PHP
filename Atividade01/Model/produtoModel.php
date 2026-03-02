<?php

class Produto{
    private $nomeProduto;
    private $precoProduto;
    private $dataValidade;
    private $quantidadeEstoque;

    public function __construct($nome, $dataValidade){
        $this->nome = $nomeProduto;
        $this->preco= $precoProduto;
        $this->data = $dataValidade;
        $this->quantidade= $quantidadeEstoque;
    }

    public function salvar(){
        if (!isset($_SESSION['produtos'])) {
            $_SESSION['produtos'] = [];
        }

        $_SESSION['produtos'][] = [
            'nome' => $this -> nome,
            'preco' => $this -> preco,
            'data' => $this -> data,
            'quantidade' => $this -> quantidade
        ];
    }

    public static function listar(){
        // Retorna a lista de produtos
        return $_SESSION['produtos'] ?? [];
    }

}