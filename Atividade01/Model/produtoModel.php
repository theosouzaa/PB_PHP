<?php

class Produto{
    private $nomeProduto;
    private $precoProduto;
    private $dataValidade;
    private $quantidadeEstoque;

    public function __construct($nome, $preco, $dataValidade, $quantidade){
        $this->nomeProduto = $nome;
        $this->precoProduto = $preco;
        $this->dataValidade = $dataValidade;
        $this->quantidadeEstoque = $quantidade;
    }

    public function salvar(){
        if (!isset($_SESSION['produtos'])) {
            $_SESSION['produtos'] = [];
        }

        $_SESSION['produtos'][] = [
            'nome' => $this -> nomeProduto,
            'preco' => $this -> precoProduto,
            'data' => $this -> dataValidade,
            'quantidade' => $this -> quantidadeEstoque
        ];
    }

    public static function listar(){
        // Retorna a lista de produtos
        return $_SESSION['produtos'] ?? [];
    }

    public static function buscar($id){
        return $_SESSION['produtos'][$id] ?? null;
    }

    public function atualizar($id){
        if(isset($_SESSION['produtos'][$id])){ // Verifica se o produto existe antes de atualizar
            $_SESSION['produtos'][$id] = [     // Atualiza o produto com os novos dados
                'nome' => $this -> nome,
                'preco' => $this -> preco,
                'data' => $this -> data,
                'quantidade' => $this -> quantidade
            ];
        }
    }

    public static function excluir($id){
        if(isset($_SESSION['produtos'][$id])){ // Verifica se o produto existe antes de excluir
            unset($_SESSION['produtos'][$id]); // Remove o produto da lista
        }
    }

}